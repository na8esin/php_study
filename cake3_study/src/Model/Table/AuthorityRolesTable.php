<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AuthorityRoles Model
 *
 * @property \App\Model\Table\CreatedUsersTable&\Cake\ORM\Association\BelongsTo $CreatedUsers
 * @property \App\Model\Table\ModifiedUsersTable&\Cake\ORM\Association\BelongsTo $ModifiedUsers
 *
 * @method \App\Model\Entity\AuthorityRole get($primaryKey, $options = [])
 * @method \App\Model\Entity\AuthorityRole newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AuthorityRole[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AuthorityRole|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AuthorityRole saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AuthorityRole patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AuthorityRole[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AuthorityRole findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AuthorityRolesTable extends Table
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

        $this->setTable('authority_roles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('CreatedUsers', [
            'foreignKey' => 'created_user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ModifiedUsers', [
            'foreignKey' => 'modified_user_id',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->requirePresence('role_type', 'create')
            ->notEmptyString('role_type');

        $validator
            ->scalar('menu_code')
            ->maxLength('menu_code', 5)
            ->requirePresence('menu_code', 'create')
            ->notEmptyString('menu_code');

        $validator
            ->scalar('func_code')
            ->maxLength('func_code', 5)
            ->requirePresence('func_code', 'create')
            ->notEmptyString('func_code');

        $validator
            ->scalar('action_code')
            ->maxLength('action_code', 5)
            ->requirePresence('action_code', 'create')
            ->notEmptyString('action_code');

        $validator
            ->scalar('authority_code')
            ->maxLength('authority_code', 4)
            ->requirePresence('authority_code', 'create')
            ->notEmptyString('authority_code');

        $validator
            ->boolean('enabled')
            ->notEmptyString('enabled');

        $validator
            ->boolean('delete_flg')
            ->notEmptyString('delete_flg');

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
        $rules->add($rules->existsIn(['created_user_id'], 'CreatedUsers'));
        $rules->add($rules->existsIn(['modified_user_id'], 'ModifiedUsers'));

        return $rules;
    }
}
