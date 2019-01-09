<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Functions Model
 *
 * @property \App\Model\Table\PermissionFunctionsTable|\Cake\ORM\Association\HasMany $PermissionFunctions
 *
 * @method \App\Model\Entity\Function get($primaryKey, $options = [])
 * @method \App\Model\Entity\Function newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Function[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Function|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Function|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Function patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Function[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Function findOrCreate($search, callable $callback = null, $options = [])
 */
class FunctionsTable extends Table
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

        $this->setTable('functions');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('PermissionFunctions', [
            'foreignKey' => 'function_id'
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

        $validator
            ->scalar('name')
            ->maxLength('name', 200)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('controller_name')
            ->maxLength('controller_name', 200)
            ->requirePresence('controller_name', 'create')
            ->notEmpty('controller_name');

        $validator
            ->scalar('action_name')
            ->maxLength('action_name', 200)
            ->requirePresence('action_name', 'create')
            ->notEmpty('action_name');

        return $validator;
    }
}
