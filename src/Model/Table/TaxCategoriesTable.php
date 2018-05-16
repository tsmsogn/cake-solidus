<?php
namespace Solidus\Model\Table;

use Cake\Datasource\EntityInterface;
use Cake\Validation\Validator;
use Solidus\Model\Entity\TaxCategory;

/**
 * SpreeTaxCategories Model
 *
 * @method TaxCategory get($primaryKey, $options = [])
 * @method TaxCategory newEntity($data = null, array $options = [])
 * @method TaxCategory[] newEntities(array $data, array $options = [])
 * @method TaxCategory|bool save(EntityInterface $entity, $options = [])
 * @method TaxCategory patchEntity(EntityInterface $entity, array $data, array $options = [])
 * @method TaxCategory[] patchEntities($entities, array $data, array $options = [])
 * @method TaxCategory findOrCreate($search, callable $callback = null, $options = [])
 */
class TaxCategoriesTable extends BaseTable
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

        $this->setTable('spree_tax_categories');
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
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->boolean('is_default')
            ->allowEmpty('is_default');

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
            ->scalar('tax_code')
            ->allowEmpty('tax_code');

        return $validator;
    }
}
