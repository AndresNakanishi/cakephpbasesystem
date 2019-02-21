<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Methods Model
 *
 * @property \App\Model\Table\PermissionMethodsTable|\Cake\ORM\Association\HasMany $PermissionMethods
 *
 * @method \App\Model\Entity\Method get($primaryKey, $options = [])
 * @method \App\Model\Entity\Method newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Method[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Method|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Method|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Method patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Method[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Method findOrCreate($search, callable $callback = null, $options = [])
 */
class MethodsTable extends Table
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

        $this->setTable('methods');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('PermissionMethods', [
            'foreignKey' => 'method_id'
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
