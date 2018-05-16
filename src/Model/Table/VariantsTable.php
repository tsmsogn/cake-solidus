<?php
namespace Solidus\Model\Table;

use Cake\Datasource\EntityInterface;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;
use Solidus\Model\Entity\Variant;

/**
 * SpreeVariants Model
 *
 * @property \Solidus\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 * @property \Solidus\Model\Table\TaxCategoriesTable|\Cake\ORM\Association\BelongsTo $TaxCategories
 * @property \Solidus\Model\Table\PricesTable|\Cake\ORM\Association\HasMany $Prices
 *
 * @method Variant get($primaryKey, $options = [])
 * @method Variant newEntity($data = null, array $options = [])
 * @method Variant[] newEntities(array $data, array $options = [])
 * @method Variant|bool save(EntityInterface $entity, $options = [])
 * @method Variant patchEntity(EntityInterface $entity, array $data, array $options = [])
 * @method Variant[] patchEntities($entities, array $data, array $options = [])
 * @method Variant findOrCreate($search, callable $callback = null, $options = [])
 */
class VariantsTable extends BaseTable
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

        $this->setTable('spree_variants');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Discard.Discardable', [
            'field' => 'deleted_at'
        ]);

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'className' => 'Solidus.Products'
        ]);
        $this->belongsTo('TaxCategories', [
            'foreignKey' => 'tax_category_id',
            'className' => 'Solidus.TaxCategories'
        ]);
        $this->hasMany('Prices', [
            'foreignKey' => 'variant_id',
            'className' => 'Solidus.Prices',
            'dependent' => true
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
            ->scalar('sku')
            ->requirePresence('sku', 'create')
            ->notEmpty('sku');

        $validator
            ->decimal('weight')
            ->allowEmpty('weight');

        $validator
            ->decimal('height')
            ->allowEmpty('height');

        $validator
            ->decimal('width')
            ->allowEmpty('width');

        $validator
            ->decimal('depth')
            ->allowEmpty('depth');

        $validator
            ->dateTime('deleted_at')
            ->allowEmpty('deleted_at');

        $validator
            ->boolean('is_master')
            ->allowEmpty('is_master');

        $validator
            ->decimal('cost_price')
            ->allowEmpty('cost_price');

        $validator
            ->integer('position')
            ->allowEmpty('position');

        $validator
            ->scalar('cost_currency')
            ->allowEmpty('cost_currency');

        $validator
            ->boolean('track_inventory')
            ->allowEmpty('track_inventory');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

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
        $rules->add($rules->existsIn(['product_id'], 'Products'));
        $rules->add($rules->existsIn(['tax_category_id'], 'TaxCategories'));

        return $rules;
    }
}
