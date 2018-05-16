<?php
namespace Solidus\Model\Table;

use Cake\Database\Query;
use Cake\Datasource\EntityInterface;
use Cake\I18n\Time;
use Cake\ORM\RulesChecker;
use Cake\Utility\Hash;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \Solidus\Model\Table\TaxCategoriesTable|\Cake\ORM\Association\BelongsTo $TaxCategories
 * @property \Solidus\Model\Table\ShippingCategoriesTable|\Cake\ORM\Association\BelongsTo $ShippingCategories
 *
 * @method \Solidus\Model\Entity\Product get($primaryKey, $options = [])
 * @method \Solidus\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \Solidus\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \Solidus\Model\Entity\Product|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Solidus\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Solidus\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \Solidus\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductsTable extends BaseTable
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('spree_products');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Discard.Discardable', [
            'field' => 'deleted_at'
        ]);

        $this->belongsTo('TaxCategories', [
            'foreignKey' => 'tax_category_id',
            'className' => 'Solidus.TaxCategories'
        ]);
        $this->belongsTo('ShippingCategories', [
            'foreignKey' => 'shipping_category_id',
            'className' => 'Solidus.ShippingCategories'
        ]);

        $this->hasOne('Master', [
            'foreignKey' => 'product_id',
            'className' => 'Solidus.Variants',
            'conditions' => [
                'Master.is_master' => true,
                'Master.deleted_at IS' => null,
            ]
        ]);

        $this->hasMany('Variants', [
            'foreignKey' => 'product_id',
            'className' => 'Solidus.Variants',
            'conditions' => [
                'Variants.is_master' => false,
                'Variants.deleted_at IS' => null,
            ],
            'order' => ['position'],
        ]);

        $this->hasMany('VariantsIncludingMaster', [
            'foreignKey' => 'product_id',
            'className' => 'Solidus.Variants',
            'conditions' => [
                'VariantsIncludingMaster.deleted_at IS' => null,
            ],
            'order' => ['position'],
        ]);

        $this->hasMany('VariantsIncludingDeleted', [
            'foreignKey' => 'product_id',
            'className' => 'Solidus.Variants',
            'order' => ['position'],
            'dependent' => true,
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name', 'Name can\'t be blank');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->dateTime('available_on')
            ->allowEmpty('available_on');

        $validator
            ->dateTime('deleted_at')
            ->allowEmpty('deleted_at');

        $validator
            ->scalar('slug')
            ->notEmpty('slug', 'Slug can\'t be blank')
            ->add('slug', [
                'unique' => [
                    'rule' => 'validateUnique',
                    'message' => 'Slug has already been taken',
                    'provider' => 'table'
                ]
            ]);

        $validator
            ->scalar('meta_description')
            ->allowEmpty('meta_description');

        $validator
            ->scalar('meta_keywords')
            ->allowEmpty('meta_keywords');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

        $validator
            ->boolean('promotionable')
            ->allowEmpty('promotionable');

        $validator
            ->scalar('meta_title')
            ->allowEmpty('meta_title');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['slug']));
        $rules->add($rules->existsIn(['tax_category_id'], 'TaxCategories'));
        $rules->add($rules->existsIn(['shipping_category_id'], 'ShippingCategories'));

        return $rules;
    }

    /**
     * @param $condition
     * @return bool
     */
    public function isAvailable($condition)
    {
        if ($this->isDiscarded($condition)) {
            return false;
        }

        $condition = Hash::merge($condition, [
            $this->getAlias() . '.available_on IS NOT' => null,
            $this->getAlias() . '.available_on <=' => new Time()
        ]);

        return $this->exists($condition);
    }

    /**
     * @param Query $query
     * @param array $options
     * @return $this
     */
    public function findAvailable(Query $query, array $options)
    {
        return $this->find('kept')
            ->where([
                $this->getAlias() . '.available_on IS NOT' => null,
                $this->getAlias() . '.available_on <=' => new Time()
            ]);
    }
}
