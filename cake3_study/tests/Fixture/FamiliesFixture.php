<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FamiliesFixture
 */
class FamiliesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '[id] ', 'autoIncrement' => true, 'precision' => null],
        'customer_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '[顧客id] ', 'precision' => null, 'autoIncrement' => null],
        'lname' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[姓名（姓）] ', 'precision' => null, 'fixed' => null],
        'fname' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[姓名（名）] ', 'precision' => null, 'fixed' => null],
        'lname_kana' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[姓名カナ（姓）] ', 'precision' => null, 'fixed' => null],
        'fname_kana' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[姓名カナ（名）] ', 'precision' => null, 'fixed' => null],
        'gender' => ['type' => 'string', 'fixed' => true, 'length' => 2, 'null' => false, 'default' => '00', 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[性別] ', 'precision' => null],
        'birthday' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[生年月日] ', 'precision' => null],
        'enc_birthday' => ['type' => 'binary', 'length' => 16, 'null' => true, 'default' => null, 'comment' => '[生年月日（バイナリ）] ', 'precision' => null],
        'relation' => ['type' => 'string', 'fixed' => true, 'length' => 2, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[続柄] ', 'precision' => null],
        'job_name' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[職業] ', 'precision' => null, 'fixed' => null],
        'job_type' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[職種] ', 'precision' => null, 'fixed' => null],
        'smoking' => ['type' => 'string', 'fixed' => true, 'length' => 2, 'null' => false, 'default' => '00', 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[喫煙] ', 'precision' => null],
        'note' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[備考] ', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '[作成日時] ', 'precision' => null],
        'created_user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '[作成者ユーザid] ', 'precision' => null, 'autoIncrement' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '[更新日時] ', 'precision' => null],
        'modified_user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '[更新者ユーザid] ', 'precision' => null, 'autoIncrement' => null],
        'delete_flg' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '[削除フラグ] ', 'precision' => null],
        '_indexes' => [
            'fk_families_customer_id_customers_id' => ['type' => 'index', 'columns' => ['customer_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_families_customer_id_customers_id' => ['type' => 'foreign', 'columns' => ['customer_id'], 'references' => ['customers', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'customer_id' => 1,
                'lname' => 'Lorem ipsum dolor sit amet',
                'fname' => 'Lorem ipsum dolor sit amet',
                'lname_kana' => 'Lorem ipsum dolor sit amet',
                'fname_kana' => 'Lorem ipsum dolor sit amet',
                'gender' => 'Lo',
                'birthday' => '2019-12-19',
                'enc_birthday' => 'Lorem ipsum do',
                'relation' => 'Lo',
                'job_name' => 'Lorem ipsum dolor sit amet',
                'job_type' => 'Lorem ipsum dolor sit amet',
                'smoking' => 'Lo',
                'note' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2019-12-19 08:58:55',
                'created_user_id' => 1,
                'modified' => '2019-12-19 08:58:55',
                'modified_user_id' => 1,
                'delete_flg' => 1
            ],
        ];
        parent::init();
    }
}
