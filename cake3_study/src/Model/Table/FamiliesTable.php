<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\Event;
use App\Event\UserStatistic;

/**
 * Families Model
 *
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\CreatedUsersTable&\Cake\ORM\Association\BelongsTo $CreatedUsers
 * @property \App\Model\Table\ModifiedUsersTable&\Cake\ORM\Association\BelongsTo $ModifiedUsers
 *
 * @method \App\Model\Entity\Family get($primaryKey, $options = [])
 * @method \App\Model\Entity\Family newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Family[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Family|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Family saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Family patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Family[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Family findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FamiliesTable extends Table
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

        $this->setTable('families');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        /*
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CreatedUsers', [
            'foreignKey' => 'created_user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ModifiedUsers', [
            'foreignKey' => 'modified_user_id',
            'joinType' => 'INNER'
        ]);
        */

        $this->getEventManager()->on(new UserStatistic());
    }

    public function place($order)
    {
        \Cake\Log\Log::debug('hellow');

        // ここはメソッド化してもいいか
        $event = new Event(UserStatistic::EVENT_NAME, $this, [
            'order' => $order,
            'mother' => '母'
        ]);
        $this->getEventManager()->dispatch($event);
        return true;
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
            ->scalar('lname')
            ->maxLength('lname', 32)
            ->requirePresence('lname', 'create')
            ->notEmptyString('lname');

        $validator
            ->scalar('fname')
            ->maxLength('fname', 32)
            ->requirePresence('fname', 'create')
            ->notEmptyString('fname');

        $validator
            ->scalar('lname_kana')
            ->maxLength('lname_kana', 32)
            ->requirePresence('lname_kana', 'create')
            ->notEmptyString('lname_kana');

        $validator
            ->scalar('fname_kana')
            ->maxLength('fname_kana', 32)
            ->requirePresence('fname_kana', 'create')
            ->notEmptyString('fname_kana');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 2)
            ->notEmptyString('gender');

        $validator
            ->date('birthday')
            ->allowEmptyDate('birthday');

        $validator
            ->allowEmptyString('enc_birthday');

        $validator
            ->scalar('relation')
            ->maxLength('relation', 2)
            ->allowEmptyString('relation');

        $validator
            ->scalar('job_name')
            ->maxLength('job_name', 200)
            ->requirePresence('job_name', 'create')
            ->notEmptyString('job_name');

        $validator
            ->scalar('job_type')
            ->maxLength('job_type', 200)
            ->requirePresence('job_type', 'create')
            ->notEmptyString('job_type');

        $validator
            ->scalar('smoking')
            ->maxLength('smoking', 2)
            ->notEmptyString('smoking');

        $validator
            ->scalar('note')
            ->allowEmptyString('note');

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
        //        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        //        $rules->add($rules->existsIn(['created_user_id'], 'CreatedUsers'));
        //        $rules->add($rules->existsIn(['modified_user_id'], 'ModifiedUsers'));

        return $rules;
    }
}
