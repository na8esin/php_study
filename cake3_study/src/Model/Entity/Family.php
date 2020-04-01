<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Family Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property string $lname
 * @property string $fname
 * @property string $lname_kana
 * @property string $fname_kana
 * @property string $gender
 * @property \Cake\I18n\FrozenDate|null $birthday
 * @property string|resource|null $enc_birthday
 * @property string|null $relation
 * @property string $job_name
 * @property string $job_type
 * @property string $smoking
 * @property string|null $note
 * @property \Cake\I18n\FrozenTime $created
 * @property int $created_user_id
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $modified_user_id
 * @property bool $delete_flg
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\CreatedUser $created_user
 * @property \App\Model\Entity\ModifiedUser $modified_user
 */
class Family extends Entity
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
        'customer_id' => true,
        'lname' => true,
        'fname' => true,
        'lname_kana' => true,
        'fname_kana' => true,
        'gender' => true,
        'birthday' => true,
        'enc_birthday' => true,
        'relation' => true,
        'job_name' => true,
        'job_type' => true,
        'smoking' => true,
        'note' => true,
        'created' => true,
        'created_user_id' => true,
        'modified' => true,
        'modified_user_id' => true,
        'delete_flg' => true,
        'customer' => true,
        'created_user' => true,
        'modified_user' => true
    ];
}
