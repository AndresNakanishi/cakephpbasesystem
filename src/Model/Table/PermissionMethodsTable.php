<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PermissionMethods Model
 *
 * @property \App\Model\Table\PermissionsTable|\Cake\ORM\Association\BelongsTo $Permissions
 * @property \App\Model\Table\MethodsTable|\Cake\ORM\Association\BelongsTo $Methods
 *
 * @method \App\Model\Entity\PermissionMethod get($primaryKey, $options = [])
 * @method \App\Model\Entity\PermissionMethod newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PermissionMethod[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PermissionMethod|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PermissionMethod|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PermissionMethod patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PermissionMethod[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PermissionMethod findOrCreate($search, callable $callback = null, $options = [])
 */
class PermissionMethodsTable extends Table
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

        $this->setTable('permission_methods');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Permissions', [
            'foreignKey' => 'permission_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Methods', [
            'foreignKey' => 'method_id',
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
            ->nonNegativeInteger('id')
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
        $rules->add($rules->existsIn(['method_id'], 'Methods'));

        return $rules;
    }
}
