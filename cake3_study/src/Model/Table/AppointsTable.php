<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Appoints Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\GoogleCalendarsTable&\Cake\ORM\Association\BelongsTo $GoogleCalendars
 * @property \App\Model\Table\CreatedUsersTable&\Cake\ORM\Association\BelongsTo $CreatedUsers
 * @property \App\Model\Table\ModifiedUsersTable&\Cake\ORM\Association\BelongsTo $ModifiedUsers
 * @property \App\Model\Table\ApplicationsTable&\Cake\ORM\Association\HasMany $Applications
 * @property \App\Model\Table\MailLogsTable&\Cake\ORM\Association\HasMany $MailLogs
 *
 * @method \App\Model\Entity\Appoint get($primaryKey, $options = [])
 * @method \App\Model\Entity\Appoint newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Appoint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Appoint|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Appoint saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Appoint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Appoint[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Appoint findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AppointsTable extends Table
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

        $this->setTable('appoints');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
        ]);
        $this->belongsTo('GoogleCalendars', [
            'foreignKey' => 'google_calendar_id',
        ]);
        $this->belongsTo('CreatedUsers', [
            'foreignKey' => 'created_user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ModifiedUsers', [
            'foreignKey' => 'modified_user_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Applications', [
            'foreignKey' => 'appoint_id',
        ]);
        $this->hasMany('MailLogs', [
            'foreignKey' => 'appoint_id',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('role')
            ->maxLength('role', 3)
            ->notEmptyString('role');

        $validator
            ->date('date_from')
            ->requirePresence('date_from', 'create')
            ->notEmptyDate('date_from');

        $validator
            ->scalar('date_from_hhmm')
            ->maxLength('date_from_hhmm', 5)
            ->notEmptyString('date_from_hhmm');

        $validator
            ->date('date_to')
            ->requirePresence('date_to', 'create')
            ->notEmptyDate('date_to');

        $validator
            ->scalar('date_to_hhmm')
            ->maxLength('date_to_hhmm', 5)
            ->notEmptyString('date_to_hhmm');

        $validator
            ->dateTime('contacted')
            ->allowEmptyDateTime('contacted');

        $validator
            ->scalar('status_code')
            ->maxLength('status_code', 3)
            ->allowEmptyString('status_code');

        $validator
            ->scalar('child_status_code')
            ->maxLength('child_status_code', 3)
            ->allowEmptyString('child_status_code');

        $validator
            ->scalar('grandson_status_code')
            ->maxLength('grandson_status_code', 3)
            ->allowEmptyString('grandson_status_code');

        $validator
            ->scalar('repeat_pattern_div')
            ->maxLength('repeat_pattern_div', 2)
            ->allowEmptyString('repeat_pattern_div');

        $validator
            ->scalar('repeat_week_div')
            ->maxLength('repeat_week_div', 2)
            ->allowEmptyString('repeat_week_div');

        $validator
            ->scalar('repeat_pattern_dayofweek')
            ->maxLength('repeat_pattern_dayofweek', 7)
            ->allowEmptyString('repeat_pattern_dayofweek');

        $validator
            ->scalar('repeat_pattern_month_dayofmonth')
            ->maxLength('repeat_pattern_month_dayofmonth', 2)
            ->allowEmptyString('repeat_pattern_month_dayofmonth');

        $validator
            ->date('repeat_end_date')
            ->allowEmptyDate('repeat_end_date');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 20)
            ->allowEmptyString('tel');

        $validator
            ->scalar('spot')
            ->maxLength('spot', 100)
            ->allowEmptyString('spot');

        $validator
            ->scalar('spot_url')
            ->allowEmptyString('spot_url');

        $validator
            ->scalar('note')
            ->allowEmptyString('note');

        $validator
            ->scalar('note_cc')
            ->allowEmptyString('note_cc');

        $validator
            ->scalar('note_etc1')
            ->allowEmptyString('note_etc1');

        $validator
            ->scalar('note_etc2')
            ->allowEmptyString('note_etc2');

        $validator
            ->scalar('note_etc3')
            ->allowEmptyString('note_etc3');

        $validator
            ->date('presented_lifeplan')
            ->allowEmptyDate('presented_lifeplan');

        $validator
            ->scalar('presented_lifeplan_means')
            ->maxLength('presented_lifeplan_means', 2)
            ->allowEmptyString('presented_lifeplan_means');

        $validator
            ->scalar('presence_relation')
            ->maxLength('presence_relation', 2)
            ->allowEmptyString('presence_relation');

        $validator
            ->scalar('presence_note')
            ->maxLength('presence_note', 20)
            ->allowEmptyString('presence_note');

        $validator
            ->allowEmptyString('interest_car_insurer');

        $validator
            ->scalar('is_counter_introduction')
            ->maxLength('is_counter_introduction', 2)
            ->allowEmptyString('is_counter_introduction');

        $validator
            ->scalar('result_counter_introduction')
            ->maxLength('result_counter_introduction', 3)
            ->allowEmptyString('result_counter_introduction');

        $validator
            ->boolean('presented_lifeplan_flg')
            ->allowEmptyString('presented_lifeplan_flg');

        $validator
            ->boolean('presence_flg')
            ->allowEmptyString('presence_flg');

        $validator
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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['google_calendar_id'], 'GoogleCalendars'));
        $rules->add($rules->existsIn(['created_user_id'], 'CreatedUsers'));
        $rules->add($rules->existsIn(['modified_user_id'], 'ModifiedUsers'));

        return $rules;
    }
}
