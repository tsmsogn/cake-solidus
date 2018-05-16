<?php
namespace Solidus\Model\Table;

use Cake\Datasource\EntityInterface;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;
use Solidus\Model\Entity\Price;

/**
 * SpreePrices Model
 *
 * @property VariantsTable|\Cake\ORM\Association\BelongsTo $Variants
 *
 * @method Price get($primaryKey, $options = [])
 * @method Price newEntity($data = null, array $options = [])
 * @method Price[] newEntities(array $data, array $options = [])
 * @method Price|bool save(EntityInterface $entity, $options = [])
 * @method Price patchEntity(EntityInterface $entity, array $data, array $options = [])
 * @method Price[] patchEntities($entities, array $data, array $options = [])
 * @method Price findOrCreate($search, callable $callback = null, $options = [])
 */
class PricesTable extends BaseTable
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

        $this->setTable('spree_prices');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Discard.Discardable', [
            'field' => 'deleted_at'
        ]);

        $this->belongsTo('Variants', [
            'foreignKey' => 'variant_id',
            'joinType' => 'INNER',
            'className' => 'Solidus.Variants'
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
            ->decimal('amount')
            ->allowEmpty('amount');

        $validator
            ->scalar('currency')
            ->allowEmpty('currency');

        $validator
            ->dateTime('deleted_at')
            ->allowEmpty('deleted_at');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

        $validator
            ->scalar('country_iso')
            ->maxLength('country_iso', 2)
            ->allowEmpty('country_iso');

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
        $rules->add($rules->existsIn(['variant_id'], 'Variants'));

        return $rules;
    }
}
