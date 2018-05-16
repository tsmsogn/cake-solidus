<?php
namespace Solidus\Model\Table;

use Cake\Datasource\EntityInterface;
use Cake\Validation\Validator;
use Solidus\Model\Entity\ShippingCategory;

/**
 * SpreeShippingCategories Model
 *
 * @method ShippingCategory get($primaryKey, $options = [])
 * @method ShippingCategory newEntity($data = null, array $options = [])
 * @method ShippingCategory[] newEntities(array $data, array $options = [])
 * @method ShippingCategory|bool save(EntityInterface $entity, $options = [])
 * @method ShippingCategory patchEntity(EntityInterface $entity, array $data, array $options = [])
 * @method ShippingCategory[] patchEntities($entities, array $data, array $options = [])
 * @method ShippingCategory findOrCreate($search, callable $callback = null, $options = [])
 */
class ShippingCategoriesTable extends BaseTable
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

        $this->setTable('spree_shipping_categories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->allowEmpty('name');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

        return $validator;
    }
}
