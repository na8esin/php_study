<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AuthorityRolesFixture
 */
class AuthorityRolesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '[id] ', 'autoIncrement' => true, 'precision' => null],
        'role_type' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '[権限タイプ] 1: メニュー 2: 機能', 'precision' => null],
        'menu_code' => ['type' => 'string', 'fixed' => true, 'length' => 5, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[メニューコード] ※別紙参照', 'precision' => null],
        'func_code' => ['type' => 'string', 'fixed' => true, 'length' => 5, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[機能コード] ※別紙参照', 'precision' => null],
        'action_code' => ['type' => 'string', 'fixed' => true, 'length' => 5, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[アクションコード] ※別紙参照', 'precision' => null],
        'authority_code' => ['type' => 'string', 'fixed' => true, 'length' => 4, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[権限コード] ※別紙参照', 'precision' => null],
        'enabled' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '[有効無効フラグ] 0: 無効 1: 有効', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '[作成日時] 自動設定', 'precision' => null],
        'created_user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '[作成者ユーザid] 自動設定', 'precision' => null, 'autoIncrement' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '[更新日時] 自動設定', 'precision' => null],
        'modified_user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '[更新者ユーザid] 自動設定', 'precision' => null, 'autoIncrement' => null],
        'delete_flg' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '[削除フラグ] 0: 通常 1: 削除', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_0900_ai_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'role_type' => 1,
                'menu_code' => 'Lor',
                'func_code' => 'Lor',
                'action_code' => 'Lor',
                'authority_code' => 'Lo',
                'enabled' => 1,
                'created' => '2019-12-25 01:20:27',
                'created_user_id' => 1,
                'modified' => '2019-12-25 01:20:27',
                'modified_user_id' => 1,
                'delete_flg' => 1
            ],
        ];
        parent::init();
    }
}
