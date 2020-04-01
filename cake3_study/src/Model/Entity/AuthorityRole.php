<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AuthorityRole Entity
 *
 * @property int $id
 * @property int $role_type
 * @property string $menu_code
 * @property string $func_code
 * @property string $action_code
 * @property string $authority_code
 * @property bool $enabled
 * @property \Cake\I18n\FrozenTime $created
 * @property int $created_user_id
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $modified_user_id
 * @property bool $delete_flg
 *
 * @property \App\Model\Entity\CreatedUser $created_user
 * @property \App\Model\Entity\ModifiedUser $modified_user
 */
class AuthorityRole extends Entity
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
        'role_type' => true,
        'menu_code' => true,
        'func_code' => true,
        'action_code' => true,
        'authority_code' => true,
        'enabled' => true,
        'created' => true,
        'created_user_id' => true,
        'modified' => true,
        'modified_user_id' => true,
        'delete_flg' => true,
        'created_user' => true,
        'modified_user' => true
    ];
}
