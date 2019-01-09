<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PermissionFunctions Model
 *
 * @property \App\Model\Table\PermissionsTable|\Cake\ORM\Association\BelongsTo $Permissions
 * @property \App\Model\Table\FunctionsTable|\Cake\ORM\Association\BelongsTo $Functions
 *
 * @method \App\Model\Entity\PermissionFunction get($primaryKey, $options = [])
 * @method \App\Model\Entity\PermissionFunction newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PermissionFunction[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PermissionFunction|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PermissionFunction patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PermissionFunction[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PermissionFunction findOrCreate($search, callable $callback = null, $options = [])
 */
class PermissionFunctionsTable extends Table
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

        $this->setTable('permission_functions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Permissions', [
            'foreignKey' => 'permission_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Functions', [
            'foreignKey' => 'function_id',
            'joinType' => 'INNER'
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
        $rules->add($rules->existsIn(['permission_id'], 'Permissions'));
        $rules->add($rules->existsIn(['function_id'], 'Functions'));

        return $rules;
    }
}
