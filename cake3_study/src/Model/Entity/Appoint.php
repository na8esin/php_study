<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Appoint Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $customer_id
 * @property string $role
 * @property \Cake\I18n\FrozenDate $date_from
 * @property string $date_from_hhmm
 * @property \Cake\I18n\FrozenDate $date_to
 * @property string $date_to_hhmm
 * @property \Cake\I18n\FrozenTime|null $contacted
 * @property string|null $status_code
 * @property string|null $child_status_code
 * @property string|null $grandson_status_code
 * @property string|null $repeat_pattern_div
 * @property string|null $repeat_week_div
 * @property string|null $repeat_pattern_dayofweek
 * @property string|null $repeat_pattern_month_dayofmonth
 * @property \Cake\I18n\FrozenDate|null $repeat_end_date
 * @property string|null $tel
 * @property string|null $spot
 * @property string|null $spot_url
 * @property string|null $note
 * @property string|null $note_cc
 * @property string|null $note_etc1
 * @property string|null $note_etc2
 * @property string|null $note_etc3
 * @property \Cake\I18n\FrozenDate|null $presented_lifeplan
 * @property string|null $presented_lifeplan_means
 * @property string|null $presence_relation
 * @property string|null $presence_note
 * @property int|null $interest_car_insurer
 * @property string|null $is_counter_introduction
 * @property string|null $result_counter_introduction
 * @property string|null $google_calendar_id
 * @property bool|null $presented_lifeplan_flg
 * @property bool|null $presence_flg
 * @property \Cake\I18n\FrozenTime $created
 * @property int $created_user_id
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $modified_user_id
 * @property int $delete_flg
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\GoogleCalendar $google_calendar
 * @property \App\Model\Entity\CreatedUser $created_user
 * @property \App\Model\Entity\ModifiedUser $modified_user
 * @property \App\Model\Entity\Application[] $applications
 * @property \App\Model\Entity\MailLog[] $mail_logs
 */
class Appoint extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'customer_id' => true,
        'role' => true,
        'date_from' => true,
        'date_from_hhmm' => true,
        'date_to' => true,
        'date_to_hhmm' => true,
        'contacted' => true,
        'status_code' => true,
        'child_status_code' => true,
        'grandson_status_code' => true,
        'repeat_pattern_div' => true,
        'repeat_week_div' => true,
        'repeat_pattern_dayofweek' => true,
        'repeat_pattern_month_dayofmonth' => true,
        'repeat_end_date' => true,
        'tel' => true,
        'spot' => true,
        'spot_url' => true,
        'note' => true,
        'note_cc' => true,
        'note_etc1' => true,
        'note_etc2' => true,
        'note_etc3' => true,
        'presented_lifeplan' => true,
        'presented_lifeplan_means' => true,
        'presence_relation' => true,
        'presence_note' => true,
        'interest_car_insurer' => true,
        'is_counter_introduction' => true,
        'result_counter_introduction' => true,
        'google_calendar_id' => true,
        'presented_lifeplan_flg' => true,
        'presence_flg' => true,
        'created' => true,
        'created_user_id' => true,
        'modified' => true,
        'modified_user_id' => true,
        'delete_flg' => true,
        'user' => true,
        'customer' => true,
        'google_calendar' => true,
        'created_user' => true,
        'modified_user' => true,
        'applications' => true,
        'mail_logs' => true,
    ];
}
