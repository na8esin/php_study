<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AppointsFixture
 */
class AppointsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'biginteger', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '[id] 自動採番', 'autoIncrement' => true, 'precision' => null],
        'user_id' => ['type' => 'integer', 'length' => null, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '[コンサルタントid] ブロックの時だけ値が入る', 'precision' => null, 'autoIncrement' => null],
        'customer_id' => ['type' => 'integer', 'length' => null, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '[顧客id] ', 'precision' => null, 'autoIncrement' => null],
        'role' => ['type' => 'string', 'length' => 3, 'fixed' => true, 'null' => false, 'default' => '0', 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[アポイント種別] 000: 通常予定・報告 001: 通常ブロック 002: アポイントブロック 003: 繰り返しブロック  100: googleカレンダー連携', 'precision' => null],
        'date_from' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '[アポイント開始日] ', 'precision' => null],
        'date_from_hhmm' => ['type' => 'string', 'length' => 5, 'fixed' => true, 'null' => false, 'default' => '00', 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[アポイント開始時刻（時分）] ', 'precision' => null],
        'date_to' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '[アポイント終了日] ', 'precision' => null],
        'date_to_hhmm' => ['type' => 'string', 'length' => 5, 'fixed' => true, 'null' => false, 'default' => '00', 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[アポイント終了時刻（時分）] ', 'precision' => null],
        'contacted' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[面談日時] 実際にあった日時（面談ステータスがセットされて、後に終了となった場合でも残す。）', 'precision' => null],
        'status_code' => ['type' => 'string', 'length' => 3, 'fixed' => true, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[面談ステータスコード] statusesテーブル参照', 'precision' => null],
        'child_status_code' => ['type' => 'string', 'length' => 3, 'fixed' => true, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[子面談ステータスコード] statusesテーブル参照', 'precision' => null],
        'grandson_status_code' => ['type' => 'string', 'length' => 3, 'fixed' => true, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[孫面談ステータスコード] statusesテーブル参照', 'precision' => null],
        'repeat_pattern_div' => ['type' => 'string', 'length' => 2, 'fixed' => true, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[繰り返し区分] 00: 毎日 01: 毎週 02: 毎月', 'precision' => null],
        'repeat_week_div' => ['type' => 'string', 'length' => 2, 'fixed' => true, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[繰り返し週区分] 00: 毎週 01: 第1 02: 第2 03: 第3 04: 第4 05: 第5', 'precision' => null],
        'repeat_pattern_dayofweek' => ['type' => 'string', 'length' => 7, 'fixed' => true, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[繰り返し曜日区分] 0000000 1bit : 日 2bit : 月 3bit : 火 4bit : 水 5bit : 木 6bit : 金 7bit : 土', 'precision' => null],
        'repeat_pattern_month_dayofmonth' => ['type' => 'string', 'length' => 2, 'fixed' => true, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[繰り返し日設定区分] 01: 1日 ～ 31: 31日 99: 月末', 'precision' => null],
        'repeat_end_date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[繰り返し終了日] ', 'precision' => null],
        'tel' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[電話番号] 仮アポ向け', 'precision' => null, 'fixed' => null],
        'spot' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[所在地] 所在地', 'precision' => null, 'fixed' => null],
        'spot_url' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[所在地url] 所在地url', 'precision' => null],
        'note' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[意向およびその他] 意向およびその他', 'precision' => null],
        'note_cc' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[cc備考] cc備考', 'precision' => null],
        'note_etc1' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[その他備考１] その他備考１', 'precision' => null],
        'note_etc2' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[その他備考２] その他備考２', 'precision' => null],
        'note_etc3' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[その他備考３] その他備考３', 'precision' => null],
        'presented_lifeplan' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[ライフプラン提示日] ライフプラン表提示日', 'precision' => null],
        'presented_lifeplan_means' => ['type' => 'string', 'length' => 2, 'fixed' => true, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[ライフプラン提示方法] 01: 手渡し 02: 郵送 03: その他', 'precision' => null],
        'presence_relation' => ['type' => 'string', 'length' => 2, 'fixed' => true, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[同席者続柄] 01: 父 02: 母 03: 夫 04: 妻 05: 祖父 06: 祖母 07: 子 08: 孫 09: その他', 'precision' => null],
        'presence_note' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[同席者備考] 同席者備考', 'precision' => null, 'fixed' => null],
        'interest_car_insurer' => ['type' => 'tinyinteger', 'length' => null, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '[自動車保険興味フラグ] 自動車保険興味フラグ', 'precision' => null],
        'is_counter_introduction' => ['type' => 'string', 'length' => 2, 'fixed' => true, 'null' => true, 'default' => '0', 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[スーモカウンタ紹介有無] 00: 無 01: 有', 'precision' => null],
        'result_counter_introduction' => ['type' => 'string', 'length' => 3, 'fixed' => true, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[ご紹介結果] ', 'precision' => null],
        'google_calendar_id' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '[google calendar id] google calendar にスケジュールに紐づくid？', 'precision' => null, 'fixed' => null],
        'presented_lifeplan_flg' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[ライフプラン提示フラグ] ライフプラン提示フラグ', 'precision' => null],
        'presence_flg' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[同席者フラグ] 0: 同席者なし 1: 同席者あり', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '[作成日時] 自動設定', 'precision' => null],
        'created_user_id' => ['type' => 'integer', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '[作成者ユーザid] 自動設定', 'precision' => null, 'autoIncrement' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '[更新日時] 自動設定', 'precision' => null],
        'modified_user_id' => ['type' => 'integer', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '[更新者ユーザid] 自動設定', 'precision' => null, 'autoIncrement' => null],
        'delete_flg' => ['type' => 'tinyinteger', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '[削除フラグ] 0: 通常 1: 削除', 'precision' => null],
        '_indexes' => [
            'fk_appoints_customer_id_customers_id' => ['type' => 'index', 'columns' => ['customer_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_appoints_customer_id_customers_id' => ['type' => 'foreign', 'columns' => ['customer_id'], 'references' => ['customers', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'user_id' => 1,
                'customer_id' => 1,
                'role' => 'L',
                'date_from' => '2020-04-06',
                'date_from_hhmm' => 'Lor',
                'date_to' => '2020-04-06',
                'date_to_hhmm' => 'Lor',
                'contacted' => '2020-04-06 02:52:04',
                'status_code' => 'L',
                'child_status_code' => 'L',
                'grandson_status_code' => 'L',
                'repeat_pattern_div' => 'Lo',
                'repeat_week_div' => 'Lo',
                'repeat_pattern_dayofweek' => 'Lorem',
                'repeat_pattern_month_dayofmonth' => 'Lo',
                'repeat_end_date' => '2020-04-06',
                'tel' => 'Lorem ipsum dolor ',
                'spot' => 'Lorem ipsum dolor sit amet',
                'spot_url' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'note' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'note_cc' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'note_etc1' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'note_etc2' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'note_etc3' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'presented_lifeplan' => '2020-04-06',
                'presented_lifeplan_means' => 'Lo',
                'presence_relation' => 'Lo',
                'presence_note' => 'Lorem ipsum dolor ',
                'interest_car_insurer' => 1,
                'is_counter_introduction' => 'Lo',
                'result_counter_introduction' => 'L',
                'google_calendar_id' => 'Lorem ipsum dolor sit amet',
                'presented_lifeplan_flg' => 1,
                'presence_flg' => 1,
                'created' => '2020-04-06 02:52:04',
                'created_user_id' => 1,
                'modified' => '2020-04-06 02:52:04',
                'modified_user_id' => 1,
                'delete_flg' => 1,
            ],
        ];
        parent::init();
    }
}
