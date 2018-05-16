<?php
namespace Solidus\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Solidus\Model\Entity\Asset;
use Solidus\Model\Table\ViewablesTable;

/**
 * SpreeAssets Model
 *
 * @property ViewablesTable|\Cake\ORM\Association\BelongsTo $Viewables
 *
 * @method Asset get($primaryKey, $options = [])
 * @method Asset newEntity($data = null, array $options = [])
 * @method Asset[] newEntities(array $data, array $options = [])
 * @method Asset|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method Asset patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method Asset[] patchEntities($entities, array $data, array $options = [])
 * @method Asset findOrCreate($search, callable $callback = null, $options = [])
 */
class AssetsTable extends Table
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

        $this->setTable('spree_assets');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Viewables', [
            'foreignKey' => 'viewable_id',
            'className' => 'Solidus.Viewables'
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
            ->scalar('viewable_type')
            ->allowEmpty('viewable_type');

        $validator
            ->integer('attachment_width')
            ->allowEmpty('attachment_width');

        $validator
            ->integer('attachment_height')
            ->allowEmpty('attachment_height');

        $validator
            ->integer('attachment_file_size')
            ->allowEmpty('attachment_file_size');

        $validator
            ->integer('position')
            ->allowEmpty('position');

        $validator
            ->scalar('attachment_content_type')
            ->allowEmpty('attachment_content_type');

        $validator
            ->scalar('attachment_file_name')
            ->allowEmpty('attachment_file_name');

        $validator
            ->scalar('type')
            ->maxLength('type', 75)
            ->allowEmpty('type');

        $validator
            ->dateTime('attachment_updated_at')
            ->allowEmpty('attachment_updated_at');

        $validator
            ->scalar('alt')
            ->allowEmpty('alt');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

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
        $rules->add($rules->existsIn(['viewable_id'], 'Viewables'));

        return $rules;
    }
}
