<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{

    public $autoId = false;

    public function up()
    {

        $this->table('access_logs_yyyy')
            ->addColumn('id', 'biginteger', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 20,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('user_id', 'integer', [
                'comment' => 'ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('remote_address', 'string', [
                'comment' => '遷移元ipアドレス',
                'default' => null,
                'limit' => 40,
                'null' => true,
            ])
            ->addColumn('user_agent', 'string', [
                'comment' => 'ユーザエージェント',
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('menu_key', 'string', [
                'comment' => 'メニューキー',
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('sub_menu_key', 'string', [
                'comment' => 'サブメニューキー',
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('action_key', 'string', [
                'comment' => 'アクションキー',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('customer_id', 'integer', [
                'comment' => '顧客id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('sub_id', 'integer', [
                'comment' => 'サブid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('cnt', 'integer', [
                'comment' => '件数',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('note', 'text', [
                'comment' => '備考',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_category1', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_category2', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_action', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('actions')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('code', 'string', [
                'comment' => 'アクションコード',
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'comment' => '名前',
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('act', 'string', [
                'comment' => 'アクション名',
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('enabled', 'boolean', [
                'comment' => '有効無効フラグ',
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'code',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('applications')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('customer_id', 'integer', [
                'comment' => '顧客id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('applied', 'date', [
                'comment' => '申込日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('contracted_date', 'date', [
                'comment' => '契約日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('notification_date', 'date', [
                'comment' => '告知日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('status', 'string', [
                'comment' => '成立フラグ',
                'default' => '00',
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('concluded', 'string', [
                'comment' => '成立年月',
                'default' => null,
                'limit' => 7,
                'null' => true,
            ])
            ->addColumn('application_type', 'boolean', [
                'comment' => '契約区分',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('start_deduction', 'string', [
                'comment' => '控除開始年月',
                'default' => null,
                'limit' => 7,
                'null' => true,
            ])
            ->addColumn('contractor', 'integer', [
                'comment' => '契約者',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('contractor_job', 'string', [
                'comment' => '契約者勤務先区分',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('contractor_job_name', 'string', [
                'comment' => '契約者勤務先名',
                'default' => null,
                'limit' => 60,
                'null' => true,
            ])
            ->addColumn('policy_number', 'string', [
                'comment' => '証券番号',
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('insurant', 'integer', [
                'comment' => '被保険者',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('insurant_job', 'string', [
                'comment' => '被保険者勤務先区分',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('insurant_job_name', 'string', [
                'comment' => '被保険者勤務先名',
                'default' => null,
                'limit' => 60,
                'null' => true,
            ])
            ->addColumn('insurant_id', 'integer', [
                'comment' => '保険会社id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('product_category_id', 'integer', [
                'comment' => '保険種別id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('product_id', 'integer', [
                'comment' => '保険商品id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('pay_type', 'string', [
                'comment' => '支払方法',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('period_insurer_type', 'string', [
                'comment' => '保険期間タイプ',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('period_insurer_date', 'date', [
                'comment' => '満期年月日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('premium', 'biginteger', [
                'comment' => '保険料',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('annual_premium', 'biginteger', [
                'comment' => 'anp',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('is_transfer', 'string', [
                'comment' => '振込有無フラグ',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('note', 'text', [
                'comment' => '備考',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('constituent', 'boolean', [
                'comment' => '構成員契約確認チェック',
                'default' => false,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('death_benefit', 'boolean', [
                'comment' => '死亡保障なしチェック',
                'default' => false,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('checked_user_id', 'integer', [
                'comment' => '構成員契約確認ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_customer_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_checked_user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_stauts', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_contractor', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_contractor_job', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_insurant', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_insurant_job', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_product_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_paytype', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_period_insurer_type', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_is_transfer', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'customer_id',
                ]
            )
            ->addIndex(
                [
                    'product_category_id',
                ]
            )
            ->addIndex(
                [
                    'product_id',
                ]
            )
            ->create();

        $this->table('appoints')
            ->addColumn('id', 'biginteger', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 20,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('customer_id', 'integer', [
                'comment' => '顧客id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('role', 'string', [
                'comment' => 'アポイント種別',
                'default' => '0',
                'limit' => 3,
                'null' => true,
            ])
            ->addColumn('date_from', 'date', [
                'comment' => 'アポイント開始日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('date_from_hhmm', 'string', [
                'comment' => 'アポイント開始時刻（時分）',
                'default' => '00',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('date_to', 'date', [
                'comment' => 'アポイント終了日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('date_to_hhmm', 'string', [
                'comment' => 'アポイント終了時刻（時分）',
                'default' => '00',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('contacted', 'datetime', [
                'comment' => '面談日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('status_code', 'string', [
                'comment' => '面談ステータスコード',
                'default' => null,
                'limit' => 3,
                'null' => true,
            ])
            ->addColumn('child_status_code', 'string', [
                'comment' => '子面談ステータスコード',
                'default' => null,
                'limit' => 3,
                'null' => true,
            ])
            ->addColumn('grandson_status_code', 'string', [
                'comment' => '孫面談ステータスコード',
                'default' => null,
                'limit' => 3,
                'null' => true,
            ])
            ->addColumn('repeat_pattern_div', 'string', [
                'comment' => '繰り返し区分',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('repeat_week_div', 'string', [
                'comment' => '繰り返し週区分',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('repeat_pattern_dayofweek', 'string', [
                'comment' => '繰り返し曜日区分',
                'default' => null,
                'limit' => 7,
                'null' => true,
            ])
            ->addColumn('repeat_pattern_month_dayofmonth', 'string', [
                'comment' => '繰り返し日設定区分',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('repeat_end_date', 'date', [
                'comment' => '繰り返し終了日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('spot', 'string', [
                'comment' => '所在地',
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('spot_url', 'text', [
                'comment' => '所在地url',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('note', 'text', [
                'comment' => '意向およびその他',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('note_cc', 'text', [
                'comment' => 'cc備考',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('note_etc1', 'text', [
                'comment' => 'その他備考１',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('note_etc2', 'text', [
                'comment' => 'その他備考２',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('note_etc3', 'text', [
                'comment' => 'その他備考３',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('presented_lifeplan', 'date', [
                'comment' => 'ライフプラン提示日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('presented_lifeplan_means', 'string', [
                'comment' => 'ライフプラン提示方法',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('presence_relation', 'string', [
                'comment' => '同席者続柄',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('presence_note', 'string', [
                'comment' => '同席者備考',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('interest_car_insurer', 'tinyinteger', [
                'comment' => '自動車保険興味フラグ',
                'default' => null,
                'limit' => 4,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('is_counter_introduction', 'string', [
                'comment' => 'スーモカウンタ紹介有無',
                'default' => '0',
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('result_counter_introduction', 'string', [
                'comment' => 'ご紹介結果',
                'default' => null,
                'limit' => 3,
                'null' => true,
            ])
            ->addColumn('google_calendar_id', 'string', [
                'comment' => 'google calendar id',
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_customer_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_status', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_substatus', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_cancelstatus', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_role', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_repeat_pattern_div', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_repeat_week_div', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_repeat_pattern_dayofweek', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_repeat_pattern_month_dayofmonth', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_presented_lifeplan_means', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_presence_relation', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_is_counter_introduction', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_result_counter_introduction', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'customer_id',
                ]
            )
            ->create();

        $this->table('approval_changing_ipaddresses')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('user_id', 'integer', [
                'comment' => '申請者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('allowed_ip_address', 'text', [
                'comment' => '変更後ipアドレス',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('approval_key', 'string', [
                'comment' => '承認キー',
                'default' => null,
                'limit' => 16,
                'null' => true,
            ])
            ->addColumn('approval_param', 'string', [
                'comment' => '承認urlパラメータ',
                'default' => null,
                'limit' => 16,
                'null' => true,
            ])
            ->addColumn('approval_status', 'string', [
                'comment' => '承認ステータス',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('approval_user_id', 'integer', [
                'comment' => '承認ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_approval_status', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_approval_user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('authorities')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('code', 'string', [
                'comment' => '権限コード',
                'default' => null,
                'limit' => 4,
                'null' => false,
            ])
            ->addColumn('type', 'string', [
                'comment' => '権限タイプ',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'comment' => '権限名',
                'default' => null,
                'limit' => 25,
                'null' => false,
            ])
            ->addColumn('refer_range_type', 'tinyinteger', [
                'comment' => 'データ参照範囲',
                'default' => null,
                'limit' => 4,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('enabled', 'boolean', [
                'comment' => '無効有効フラグ',
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('color', 'string', [
                'comment' => '色',
                'default' => null,
                'limit' => 8,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'code',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('authority_roles')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('role_type', 'tinyinteger', [
                'comment' => '権限タイプ',
                'default' => null,
                'limit' => 4,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('menu_code', 'string', [
                'comment' => 'メニューコード',
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('func_code', 'string', [
                'comment' => '機能コード',
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('action_code', 'string', [
                'comment' => 'アクションコード',
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('authority_code', 'string', [
                'comment' => '権限コード',
                'default' => null,
                'limit' => 4,
                'null' => false,
            ])
            ->addColumn('enabled', 'boolean', [
                'comment' => '有効無効フラグ',
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('claim_processes')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('claim_id', 'integer', [
                'comment' => 'クレームid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('user_id', 'integer', [
                'comment' => '対応者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('corresponding_date', 'date', [
                'comment' => '対応日',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('corresponding_date_hhmm', 'string', [
                'comment' => '対応時刻（時分）',
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('status', 'boolean', [
                'comment' => '状況',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('note', 'text', [
                'comment' => '内容',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('comment', 'text', [
                'comment' => '上司コメント',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'claim_id',
                ]
            )
            ->create();

        $this->table('claims')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('customer_id', 'integer', [
                'comment' => '顧客id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('claim_no', 'string', [
                'comment' => 'クレームno',
                'default' => null,
                'limit' => 12,
                'null' => true,
            ])
            ->addColumn('receive_date', 'date', [
                'comment' => '受付日',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('receive_date_hhmm', 'string', [
                'comment' => '受付時刻（時分）',
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('customer_name', 'string', [
                'comment' => 'お客様名',
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('customer_tel', 'string', [
                'default' => null,
                'limit' => 15,
                'null' => true,
            ])
            ->addColumn('enc_customer_tel', 'binary', [
                'comment' => 'お客様電話番号',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('user_id', 'integer', [
                'comment' => '担当ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'customer_id',
                ]
            )
            ->create();

        $this->table('classification_datas')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('table_name', 'string', [
                'comment' => 'varchar',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('primary_id', 'integer', [
                'comment' => 'プライマリid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('classification_code', 'string', [
                'comment' => '区分コード',
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('value', 'string', [
                'comment' => '値',
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addIndex(
                [
                    'table_name',
                    'primary_id',
                    'classification_code',
                    'value',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('classification_lists')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('classification_code', 'string', [
                'comment' => '区分コード',
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('code', 'string', [
                'comment' => 'キー',
                'default' => null,
                'limit' => 3,
                'null' => false,
            ])
            ->addColumn('value', 'string', [
                'comment' => 'バリュー',
                'default' => null,
                'limit' => 30,
                'null' => false,
            ])
            ->addColumn('free1', 'string', [
                'comment' => 'フリー項目1',
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('free2', 'string', [
                'comment' => 'フリー項目2',
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('default_flg', 'boolean', [
                'comment' => 'デフォルトフラグ',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('initial_default_flg', 'boolean', [
                'comment' => '初期選択フラグ',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('enabled', 'boolean', [
                'comment' => '無効有効フラグ',
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('show_at', 'integer', [
                'comment' => '並び順',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('classifications')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('code', 'string', [
                'comment' => '区分コード',
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'comment' => '区分名',
                'default' => null,
                'limit' => 30,
                'null' => false,
            ])
            ->addColumn('type', 'string', [
                'comment' => 'タイプ',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('enabled', 'boolean', [
                'comment' => '無効有効フラグ',
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('note', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('clients')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('client_key', 'string', [
                'comment' => 'クライアントキー',
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'comment' => '会社名',
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('address', 'string', [
                'comment' => '住所',
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('google_map_url', 'string', [
                'default' => null,
                'limit' => 1500,
                'null' => true,
            ])
            ->addColumn('tel', 'string', [
                'comment' => '電話番号',
                'default' => null,
                'limit' => 15,
                'null' => true,
            ])
            ->addColumn('mail', 'string', [
                'comment' => 'メールアドレス',
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('homepage_url', 'string', [
                'comment' => 'ホームページurl',
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('color', 'string', [
                'comment' => 'クライアントカラー',
                'default' => null,
                'limit' => 8,
                'null' => true,
            ])
            ->addColumn('start_date', 'date', [
                'comment' => '利用開始日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('db_conf_name', 'string', [
                'comment' => 'データベース設定名',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('zip_code', 'string', [
                'default' => null,
                'limit' => 8,
                'null' => true,
            ])
            ->addColumn('logo', 'binary', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('customer_changedusers')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('customer_id', 'integer', [
                'comment' => '顧客id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('user_id', 'integer', [
                'comment' => 'ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addIndex(
                [
                    'customer_id',
                ]
            )
            ->create();

        $this->table('customers')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('code', 'string', [
                'comment' => '顧客id',
                'default' => null,
                'limit' => 25,
                'null' => true,
            ])
            ->addColumn('corporation_code', 'string', [
                'comment' => '会社コード',
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('staff_code', 'string', [
                'comment' => '氏名コード',
                'default' => null,
                'limit' => 6,
                'null' => true,
            ])
            ->addColumn('sfid', 'string', [
                'comment' => 'salesforceid',
                'default' => null,
                'limit' => 25,
                'null' => true,
            ])
            ->addColumn('lmapp_no', 'string', [
                'comment' => 'lm対象契約no',
                'default' => null,
                'limit' => 25,
                'null' => true,
            ])
            ->addColumn('lmapp_id', 'string', [
                'comment' => 'lm対象契約id',
                'default' => null,
                'limit' => 25,
                'null' => true,
            ])
            ->addColumn('lname', 'string', [
                'comment' => '顧客名(姓)',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('fname', 'string', [
                'comment' => '顧客名(名)',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('lname_kana', 'string', [
                'comment' => '顧客カナ(姓)',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('fname_kana', 'string', [
                'comment' => '顧客カナ(名)',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('tel1', 'string', [
                'comment' => '自宅電話',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('enc_tel1', 'binary', [
                'comment' => '(バイナリ)自宅電話',
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('tel2', 'string', [
                'comment' => '連絡先電話',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('enc_tel2', 'binary', [
                'comment' => '(バイナリ)連絡先電話',
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('notice_mail', 'string', [
                'comment' => 'メールアドレス',
                'default' => null,
                'limit' => 128,
                'null' => true,
            ])
            ->addColumn('enc_notice_mail', 'binary', [
                'comment' => '(バイナリ）メールアドレス',
                'default' => null,
                'limit' => 384,
                'null' => true,
            ])
            ->addColumn('zip_code', 'string', [
                'comment' => '郵便番号',
                'default' => null,
                'limit' => 7,
                'null' => true,
            ])
            ->addColumn('pref_code', 'tinyinteger', [
                'comment' => '都道府県コード',
                'default' => null,
                'limit' => 4,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('address', 'string', [
                'comment' => '市区町村-番地',
                'default' => null,
                'limit' => 512,
                'null' => true,
            ])
            ->addColumn('enc_address', 'binary', [
                'comment' => '(バイナリ）市区町村-番地',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('birthday', 'date', [
                'comment' => '生年月日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('enc_birthday', 'binary', [
                'comment' => '(バイナリ)生年月日',
                'default' => null,
                'limit' => 16,
                'null' => true,
            ])
            ->addColumn('gender', 'string', [
                'comment' => '性別',
                'default' => '0',
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('company', 'string', [
                'comment' => '会社名',
                'default' => null,
                'limit' => 60,
                'null' => true,
            ])
            ->addColumn('occupation', 'string', [
                'comment' => '職業',
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('annual_income_personal', 'string', [
                'comment' => '顧客年収（個人）',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('annual_income_household', 'string', [
                'comment' => '顧客年収（世帯）',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('exist_contract_life', 'string', [
                'comment' => '生保既契約有無',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('exist_contract_nolife', 'string', [
                'comment' => '損保既契約有無',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('insurant_name', 'string', [
                'comment' => '加入対象者名',
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('insurant_name_kana', 'string', [
                'comment' => '加入対象者名カナ',
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('insurant_gender', 'string', [
                'comment' => '加入対象者性別',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('insurant_birthday', 'date', [
                'comment' => '加入対象者生年月日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('enc_insurant_birthday', 'binary', [
                'comment' => '(バイナリ)被保険者生年月日',
                'default' => null,
                'limit' => 16,
                'null' => true,
            ])
            ->addColumn('relation', 'string', [
                'comment' => '被保険者との関係',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('is_finished_talking', 'string', [
                'comment' => '終話フラグ',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('intention_calling_flg', 'string', [
                'comment' => '意向確認架電',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('adjust_interview_status', 'string', [
                'comment' => '面談調整ステータス',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('shokai_code', 'string', [
                'comment' => '紹介者id',
                'default' => null,
                'limit' => 25,
                'null' => true,
            ])
            ->addColumn('visit_place', 'string', [
                'comment' => '訪問場所',
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('access', 'string', [
                'comment' => '最寄り駅',
                'default' => null,
                'limit' => 80,
                'null' => true,
            ])
            ->addColumn('called', 'date', [
                'comment' => 'コール日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('caller', 'string', [
                'comment' => 'コール担当',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('advisor', 'string', [
                'comment' => 'アドバイザ名',
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('user_id', 'integer', [
                'comment' => '担当コンサルタント',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('route_id', 'integer', [
                'comment' => 'アポイント入手経路',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('reserve_a', 'string', [
                'comment' => '予備欄a',
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('reserve_b', 'string', [
                'comment' => '予備欄b',
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('reserve_c', 'string', [
                'comment' => '予備欄c',
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('reserve_id', 'integer', [
                'comment' => '予備欄id',
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('first_appointed_id', 'integer', [
                'comment' => '初回アポイントid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('next_appointed_id', 'integer', [
                'comment' => '次回アポイントid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('first_contacted_id', 'integer', [
                'comment' => '初回面談アポイントid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('last_appointed_id', 'integer', [
                'comment' => '最終ステータスアポイントid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('highest_appointed_id', 'integer', [
                'comment' => '最高ステータスアポイントid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('first_applied_id', 'integer', [
                'comment' => '初回申込日契約id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('first_presented_lifeplan', 'date', [
                'comment' => '初回ライフプラン表提示日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('letter_downloaded', 'datetime', [
                'comment' => 'レターpdf出力日付',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('constituent_downloaded', 'datetime', [
                'comment' => '特定法人一覧表ダウンロード日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('note', 'text', [
                'comment' => '備考',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('other_system_key', 'integer', [
                'comment' => '他システム連携用キー',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_route_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_reserve_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_gender', 'integer', [
                'default' => null,
                'limit' => 12,
                'null' => true,
            ])
            ->addColumn('w_annual_income_personal', 'integer', [
                'default' => null,
                'limit' => 13,
                'null' => true,
            ])
            ->addColumn('w_annual_income_household', 'integer', [
                'default' => null,
                'limit' => 14,
                'null' => true,
            ])
            ->addColumn('w_exist_contract_life', 'integer', [
                'default' => null,
                'limit' => 15,
                'null' => true,
            ])
            ->addColumn('w_exist_contract_nolife', 'integer', [
                'default' => null,
                'limit' => 16,
                'null' => true,
            ])
            ->addColumn('w_insurant_gender', 'integer', [
                'default' => null,
                'limit' => 17,
                'null' => true,
            ])
            ->addColumn('w_relation', 'integer', [
                'default' => null,
                'limit' => 18,
                'null' => true,
            ])
            ->addColumn('w_is_finished_talking', 'integer', [
                'default' => null,
                'limit' => 19,
                'null' => true,
            ])
            ->addColumn('w_arouse_needs_flag', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('w_adjust_interview_status', 'integer', [
                'default' => null,
                'limit' => 21,
                'null' => true,
            ])
            ->addIndex(
                [
                    'route_id',
                ]
            )
            ->addIndex(
                [
                    'user_id',
                ]
            )
            ->create();

        $this->table('divisions')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => '区分id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('code', 'string', [
                'comment' => '代理店コード',
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('shared_account_code', 'string', [
                'comment' => '統合コード',
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'comment' => '所属名',
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('address', 'string', [
                'comment' => '住所',
                'default' => null,
                'limit' => 256,
                'null' => true,
            ])
            ->addColumn('tel', 'string', [
                'comment' => '電話番号',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('type', 'string', [
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('parent_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('note', 'text', [
                'comment' => '備考(受付時間)',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_role', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('show_at', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('expertise_field_users')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('user_id', 'integer', [
                'comment' => 'ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('expertise_field_id', 'integer', [
                'comment' => '得意分野id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('classfication_key', 'string', [
                'comment' => '区分キー',
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_expertise_field_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_classfication_key', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('expertise_fields')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'comment' => '名前',
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('color', 'string', [
                'comment' => '表示色',
                'default' => '#000000',
                'limit' => 7,
                'null' => true,
            ])
            ->addColumn('note', 'string', [
                'comment' => '備考',
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('show_at', 'integer', [
                'comment' => '並び順',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('families')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('customer_id', 'integer', [
                'comment' => '顧客id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('lname', 'string', [
                'comment' => '姓名（姓）',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('fname', 'string', [
                'comment' => '姓名（名）',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('lname_kana', 'string', [
                'comment' => '姓名カナ（姓）',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('fname_kana', 'string', [
                'comment' => '姓名カナ（名）',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('gender', 'string', [
                'comment' => '性別',
                'default' => '00',
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('birthday', 'date', [
                'comment' => '生年月日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('enc_birthday', 'binary', [
                'comment' => '生年月日（バイナリ）',
                'default' => null,
                'limit' => 16,
                'null' => true,
            ])
            ->addColumn('relation', 'string', [
                'comment' => '続柄',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('job_name', 'string', [
                'comment' => '職業',
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('job_type', 'string', [
                'comment' => '職種',
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('smoking', 'string', [
                'comment' => '喫煙',
                'default' => '00',
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('note', 'text', [
                'comment' => '備考',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_customer_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_gender', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_relation', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_smoking', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'customer_id',
                ]
            )
            ->create();

        $this->table('functions')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('menu_code', 'string', [
                'comment' => 'メニューコード',
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('identity', 'string', [
                'default' => null,
                'limit' => 25,
                'null' => true,
            ])
            ->addColumn('code', 'string', [
                'comment' => '機能コード',
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'comment' => '機能名',
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('controller', 'string', [
                'comment' => 'コントローラ名',
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('css_icon', 'string', [
                'comment' => 'アイコン',
                'default' => null,
                'limit' => 25,
                'null' => true,
            ])
            ->addColumn('enabled', 'boolean', [
                'comment' => '有効無効フラグ',
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('show_at', 'integer', [
                'comment' => '並び順',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'code',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('group_users')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('division_id', 'integer', [
                'comment' => '区分id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('user_id', 'integer', [
                'comment' => 'ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('show_at', 'integer', [
                'comment' => '並び順',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('w_division_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'division_id',
                ]
            )
            ->addIndex(
                [
                    'user_id',
                ]
            )
            ->create();

        $this->table('holidays')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('holiday', 'string', [
                'comment' => '休日',
                'default' => null,
                'limit' => 8,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'comment' => '名前',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('color', 'string', [
                'comment' => 'カラー',
                'default' => null,
                'limit' => 8,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'integer', [
                'comment' => '削除フラグ',
                'default' => '0',
                'limit' => 1,
                'null' => false,
                'signed' => false,
            ])
            ->create();

        $this->table('insurers')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'comment' => '保険会社名',
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('code', 'string', [
                'comment' => '保険会社コード',
                'default' => null,
                'limit' => 15,
                'null' => true,
            ])
            ->addColumn('intention_code', 'string', [
                'comment' => '識別番号',
                'default' => '1',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('show_at', 'smallinteger', [
                'comment' => '並び順',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('intention_approval_histories')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('intention_id', 'integer', [
                'comment' => '意向把握id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('approval_time', 'datetime', [
                'comment' => '決裁日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('approval_status', 'string', [
                'comment' => '決裁ステータス',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('approval_user_id', 'integer', [
                'comment' => '決裁者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('note', 'text', [
                'comment' => '差し戻し理由等',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('intention_data', 'text', [
                'comment' => '意向把握データ(json)',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('w_intention_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_approval_status', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_approval_user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('intention_category_datas')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('intention_id', 'integer', [
                'comment' => '意向把握id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('intention_small_category_id', 'integer', [
                'comment' => '小分類カテゴリid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('intention_small_category_etc', 'string', [
                'comment' => '小分類カテゴリその他',
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('check_first_intention', 'boolean', [
                'comment' => '最初のご意向チェック',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('check_last_intention', 'boolean', [
                'comment' => '最終のご意向チェック',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('w_intention_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_intention_small_category_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('intention_difference_reason_datas')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('intention_id', 'integer', [
                'comment' => '意向把握id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('intention_difference_reason_id', 'integer', [
                'comment' => '最終意向相違理由id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('intention_difference_check', 'string', [
                'comment' => '最終意向相違区分',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('intention_difference_reason_etc', 'string', [
                'comment' => '最終意向相違理由その他',
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('w_intention_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_intention_difference_reason_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_intention_difference_check', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('intention_difference_reasons')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('reason_type', 'string', [
                'comment' => 'カテゴリ区分',
                'default' => null,
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'comment' => '小分類カテゴリ名',
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('show_at', 'integer', [
                'comment' => '並び順',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_intention_difference_reason_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_reson_type', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('intention_importance_point_data')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('intention_id', 'integer', [
                'comment' => '意向把握id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('intention_type', 'string', [
                'comment' => '意向区分',
                'default' => null,
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('intention_importance_point_id', 'integer', [
                'comment' => '重視ポイントid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('w_intention_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_intention_type', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_intention_importance_point_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('intention_importance_points')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'comment' => '重視ポイント名',
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('show_at', 'integer', [
                'comment' => '並び順',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_intention_importance_point_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('intention_insurer_datas')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('intention_id', 'integer', [
                'comment' => '意向把握id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('product_category_id', 'integer', [
                'comment' => '保険種別id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('insurance_amount', 'integer', [
                'comment' => '保険金額',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('check_period', 'string', [
                'comment' => '保険期間区分',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('period_end_age', 'tinyinteger', [
                'comment' => '保険期間年齢',
                'default' => null,
                'limit' => 4,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('insurance_fee', 'integer', [
                'comment' => '保険料',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('w_intention_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_check_period', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('intention_large_categories')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'comment' => '大分類カテゴリ名',
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('show_at', 'integer', [
                'comment' => '並び順',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('intention_proposal_insurer_datas')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('intention_id', 'integer', [
                'comment' => '意向把握id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('product_category_id', 'integer', [
                'comment' => '保険種別id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('proposal_insurer_number', 'string', [
                'comment' => '提案保険会社番号',
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('last_insurer_number', 'string', [
                'comment' => '最終保険会社番号',
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('w_intention_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_product_category_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('intention_small_categories')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('intention_large_category_id', 'integer', [
                'comment' => '大分類カテゴリid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('symbol', 'string', [
                'comment' => '識別番号',
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('category_type', 'string', [
                'comment' => 'カテゴリ区分',
                'default' => null,
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'comment' => '小分類カテゴリ名',
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('cancel_check', 'string', [
                'comment' => '解約返戻金：要確認項目',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('show_at', 'smallinteger', [
                'comment' => '並び順',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_intention_large_category_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_category_type', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_cancel_check', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('intentions')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('customer_id', 'integer', [
                'comment' => '顧客id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('hearing_date', 'date', [
                'comment' => 'ヒアリング日',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('insured_name', 'string', [
                'comment' => '被保険者名',
                'default' => null,
                'limit' => 64,
                'null' => false,
            ])
            ->addColumn('approval_status', 'string', [
                'comment' => '決裁ステータス',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('approval_time', 'datetime', [
                'comment' => '決裁日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('approval_user_id', 'integer', [
                'comment' => '決裁者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('last_intention_flg', 'string', [
                'comment' => '最終意向フラグ',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('first_cancel_refund', 'string', [
                'comment' => '解約返戻金必要識別番号（最初）',
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('last_cancel_refund', 'string', [
                'comment' => '解約返戻金必要識別番号（最終）',
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('insurer_conclusion_flg', 'string', [
                'comment' => '保険情報最終結果同一フラグ',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('insurer_change_content', 'string', [
                'comment' => '変更内容',
                'default' => null,
                'limit' => 500,
                'null' => true,
            ])
            ->addColumn('first_hope_content', 'string', [
                'comment' => '最初意向のその他希望内容',
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('last_hope_content', 'string', [
                'comment' => '最終意向のその他希望内容',
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('difference_reason_flg', 'string', [
                'comment' => '最初、最終相違フラグ',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_customer_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_approval_status', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_approval_user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_last_intention_flg', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_insurer_conclusion_flg', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_difference_reason_flg', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'customer_id',
                ]
            )
            ->create();

        $this->table('item_infos')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('item_code', 'string', [
                'comment' => '項目コード',
                'default' => null,
                'limit' => 6,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'comment' => '項目名',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('item_type', 'string', [
                'comment' => '項目タイプ',
                'default' => null,
                'limit' => 3,
                'null' => false,
            ])
            ->addColumn('table_alias', 'string', [
                'comment' => 'テーブルエイリアス',
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('table_field', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('require_flg', 'boolean', [
                'comment' => '必須フラグ',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('placeholder', 'string', [
                'comment' => 'プレイスホルダー',
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('format', 'string', [
                'comment' => 'フォーマット',
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('format_errcode', 'string', [
                'comment' => 'フォーマットエラーコード',
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('max_length', 'smallinteger', [
                'comment' => '文字数',
                'default' => null,
                'limit' => 4,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('form_class', 'string', [
                'comment' => 'フォームクラス',
                'default' => null,
                'limit' => 150,
                'null' => true,
            ])
            ->addColumn('form_style', 'string', [
                'comment' => 'フォームスタイル',
                'default' => null,
                'limit' => 150,
                'null' => true,
            ])
            ->addColumn('label_before', 'text', [
                'comment' => '前ラベル',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('label_after', 'text', [
                'comment' => '後ラベル',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('classification_code', 'string', [
                'comment' => '区分コード',
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('item_validations')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('item_code', 'string', [
                'comment' => '項目コード',
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'comment' => '名前',
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('format', 'string', [
                'comment' => 'フォーマット',
                'default' => null,
                'limit' => 500,
                'null' => true,
            ])
            ->addColumn('multi_validation_key', 'string', [
                'comment' => 'マルチバリデーションキー',
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('message_code', 'string', [
                'comment' => 'メッセージコード',
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('enabled', 'boolean', [
                'comment' => '有効無効フラグ',
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'item_code',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('items')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('func_code', 'string', [
                'comment' => '機能コード',
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('category', 'string', [
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('code', 'string', [
                'comment' => '項目コード',
                'default' => null,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'comment' => '名前',
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('require_flg', 'boolean', [
                'comment' => '必須フラグ',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('search_item_flg', 'boolean', [
                'comment' => '検索項目フラグ',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('col_type', 'boolean', [
                'comment' => '列タイプ',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('show_list_flg', 'boolean', [
                'comment' => '一覧表示フラグ',
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('list_link_flg', 'boolean', [
                'comment' => 'リンクフラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('col_divide_12', 'smallinteger', [
                'comment' => '12分割数',
                'default' => null,
                'limit' => 5,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('enabled', 'boolean', [
                'comment' => '有効無効フラグ',
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('show_at', 'smallinteger', [
                'comment' => '並び順',
                'default' => null,
                'limit' => 5,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('note', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'code',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('letter_formats')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('letter_id', 'integer', [
                'comment' => 'レターid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('item_code', 'string', [
                'comment' => '項目コード',
                'default' => null,
                'limit' => 6,
                'null' => true,
            ])
            ->addColumn('pos_x', 'smallinteger', [
                'comment' => '出力位置(x)',
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->addColumn('pos_y', 'smallinteger', [
                'comment' => '出力位置(y)',
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->addColumn('font', 'string', [
                'comment' => 'フォント',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('size', 'smallinteger', [
                'comment' => 'サイズ',
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->addColumn('color', 'string', [
                'comment' => 'カラ―',
                'default' => null,
                'limit' => 8,
                'null' => true,
            ])
            ->addColumn('bold_flg', 'boolean', [
                'comment' => '太字フラグ',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('wrap_flg', 'boolean', [
                'comment' => '折り返しフラグ',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('wrap_length', 'smallinteger', [
                'comment' => '折り返し文字数',
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->addColumn('wrap_margin_y', 'smallinteger', [
                'comment' => '折り返しマージン',
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->addColumn('enabled', 'boolean', [
                'comment' => '無効有効フラグ',
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('letters')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'comment' => 'レター名称',
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('note', 'text', [
                'comment' => '備考',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('show_at', 'smallinteger', [
                'comment' => '並び順',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('mail_log_senders')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('mail_log_id', 'integer', [
                'comment' => 'メールログｉｄ',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('opened', 'datetime', [
                'comment' => '開封日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->create();

        $this->table('mail_logs')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('code', 'string', [
                'comment' => '一意なコード',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('mail_type', 'string', [
                'comment' => 'メールタイプ',
                'default' => null,
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('customer_id', 'integer', [
                'comment' => '顧客ｉｄ',
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('sub_id', 'integer', [
                'comment' => 'サブｉｄ',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('title', 'string', [
                'comment' => 'メールタイトル',
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('body', 'text', [
                'comment' => 'メール本文',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('w_kind', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_customer_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_appoint_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('menus')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('category', 'string', [
                'comment' => 'カテゴリ',
                'default' => null,
                'limit' => 3,
                'null' => true,
            ])
            ->addColumn('code', 'string', [
                'comment' => 'メニューコード',
                'default' => '00000',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'comment' => 'メニュー名',
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('param', 'string', [
                'comment' => 'パラメータ',
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('css_icon', 'string', [
                'comment' => 'アイコン',
                'default' => null,
                'limit' => 25,
                'null' => true,
            ])
            ->addColumn('enabled', 'boolean', [
                'comment' => '有効無効フラグ',
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('show_at', 'integer', [
                'comment' => '並び順',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'code',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('messages')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('code', 'string', [
                'default' => null,
                'limit' => 8,
                'null' => true,
            ])
            ->addColumn('message_type', 'string', [
                'comment' => 'メッセージタイプ',
                'default' => null,
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('message', 'string', [
                'comment' => 'メッセージ',
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('note', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'code',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('news')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('open_date', 'datetime', [
                'comment' => '投稿日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('user_id', 'integer', [
                'comment' => '投稿者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('title', 'string', [
                'comment' => 'タイトル',
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('body', 'text', [
                'comment' => '本文',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('enabled', 'boolean', [
                'comment' => '無効有効フラグ',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('news_senders')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('news_id', 'integer', [
                'comment' => 'お知らせid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('division_id', 'integer', [
                'comment' => '所属id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'news_id',
                    'division_id',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('password_histories')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('user_id', 'integer', [
                'comment' => 'ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('password', 'string', [
                'comment' => 'パスワード',
                'default' => null,
                'limit' => 128,
                'null' => true,
            ])
            ->addColumn('param', 'string', [
                'comment' => 'urlパラメータ',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('onetime_password', 'string', [
                'comment' => 'ワンタイムパスワード',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('expired', 'datetime', [
                'comment' => '有効期限',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('status', 'boolean', [
                'comment' => 'ステータス',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->create();

        $this->table('product_categories')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'comment' => '保険種別名',
                'default' => null,
                'limit' => 96,
                'null' => true,
            ])
            ->addColumn('sphere', 'string', [
                'comment' => '分野',
                'default' => '0',
                'limit' => 3,
                'null' => true,
            ])
            ->addColumn('commission', 'smallinteger', [
                'comment' => '手数料率',
                'default' => '0',
                'limit' => 3,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('note', 'text', [
                'comment' => '備考',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('show_at', 'smallinteger', [
                'comment' => '並び順',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_sphere', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('products')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'comment' => '商品名',
                'default' => null,
                'limit' => 96,
                'null' => true,
            ])
            ->addColumn('code', 'string', [
                'comment' => '商品コード',
                'default' => null,
                'limit' => 15,
                'null' => true,
            ])
            ->addColumn('insurer_id', 'integer', [
                'comment' => '保険会社id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('product_category_id', 'integer', [
                'comment' => '保険種別id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('target_gender', 'string', [
                'comment' => '対象性別',
                'default' => '0',
                'limit' => 3,
                'null' => true,
            ])
            ->addColumn('target_age_from', 'tinyinteger', [
                'comment' => '対象年齢（from)',
                'default' => null,
                'limit' => 4,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('target_age_to', 'tinyinteger', [
                'comment' => '対象年齢（to)',
                'default' => null,
                'limit' => 4,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('application_hidden', 'string', [
                'comment' => '契約情報商品選択非表示フラグ',
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('show_at', 'integer', [
                'comment' => '並び順',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_insurer_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_product_category_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_application_hidden', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'insurer_id',
                ]
            )
            ->addIndex(
                [
                    'product_category_id',
                ]
            )
            ->create();

        $this->table('properties')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'comment' => 'プロパティ名',
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('value', 'text', [
                'comment' => 'プロパティ値',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('note', 'text', [
                'comment' => '備考',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('routes')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'comment' => 'アポイント入手経路名',
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('halve_rate', 'decimal', [
                'comment' => '折半率',
                'default' => '0.50000',
                'null' => true,
                'precision' => 6,
                'scale' => 5,
            ])
            ->addColumn('note', 'text', [
                'comment' => '備考',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('division_id', 'integer', [
                'comment' => 'コールセンタid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('letter_text1', 'text', [
                'comment' => '問い合わせ先 (連絡先等)',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('letter_text2', 'text', [
                'comment' => '問い合わせ先 (連絡時間等)',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('show_at', 'smallinteger', [
                'comment' => '並び順',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_division_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'division_id',
                ]
            )
            ->create();

        $this->table('shared_account_applies')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('apply_datetime', 'datetime', [
                'comment' => '申請日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('client_id', 'integer', [
                'comment' => 'クライアントid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('user_id', 'integer', [
                'comment' => '申請ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('apply_type', 'string', [
                'comment' => '申請タイプ',
                'default' => null,
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('shared_account_login_id', 'string', [
                'comment' => '統合アカウントid',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('status', 'boolean', [
                'comment' => '申請ステータス',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('shared_accounts')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('sharing_id', 'integer', [
                'comment' => '統合アカウントid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('client_id', 'integer', [
                'comment' => 'クライアントid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('user_id', 'integer', [
                'comment' => 'ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addIndex(
                [
                    'sharing_id',
                    'client_id',
                    'user_id',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('statuses')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('type', 'tinyinteger', [
                'comment' => 'ステータスタイプ',
                'default' => null,
                'limit' => 4,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('status', 'string', [
                'comment' => '面談ステータス',
                'default' => null,
                'limit' => 3,
                'null' => false,
            ])
            ->addColumn('child_status', 'string', [
                'comment' => '子面談ステータス',
                'default' => null,
                'limit' => 3,
                'null' => true,
            ])
            ->addColumn('grandson_status', 'string', [
                'comment' => '孫面談ステータス',
                'default' => null,
                'limit' => 3,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'comment' => '名前',
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('style_icon', 'string', [
                'comment' => 'スタイルアイコン',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('style_bgcolor', 'string', [
                'comment' => 'スタイルカラー',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('enabled', 'boolean', [
                'comment' => '無効有効フラグ',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('show_at', 'smallinteger', [
                'comment' => '並び順',
                'default' => null,
                'limit' => 5,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('highest_show_at', 'smallinteger', [
                'comment' => '最高ステータス並び順',
                'default' => null,
                'limit' => 5,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'status',
                    'child_status',
                    'grandson_status',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('template_mails')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('mail_type', 'string', [
                'comment' => 'メールタイプ',
                'default' => null,
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('action_type', 'string', [
                'comment' => 'アクション種別',
                'default' => null,
                'limit' => 3,
                'null' => false,
            ])
            ->addColumn('route_id', 'integer', [
                'comment' => 'アポイント入手経路id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('title', 'string', [
                'comment' => 'タイトル',
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('header', 'text', [
                'comment' => 'ヘッダ',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('body', 'text', [
                'comment' => '本文',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('footer', 'text', [
                'comment' => 'フッター',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('repeat_flg', 'boolean', [
                'comment' => '繰り返しフラグ',
                'default' => false,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('show_at', 'smallinteger', [
                'comment' => '並び順',
                'default' => '0',
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_route_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_customer_template_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_action_type', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();

        $this->table('upload_files')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('customer_id', 'integer', [
                'comment' => '顧客id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('name', 'string', [
                'comment' => 'ファイル名',
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('uploaded', 'datetime', [
                'comment' => 'アップロード日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('ext', 'string', [
                'comment' => '拡張子',
                'default' => null,
                'limit' => 8,
                'null' => true,
            ])
            ->addColumn('size', 'integer', [
                'comment' => 'ファイルサイズ',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('note', 'text', [
                'comment' => '備考',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_customer_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'customer_id',
                ]
            )
            ->create();

        $this->table('users')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('division_parent_id', 'integer', [
                'comment' => '所属親id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('division_id', 'integer', [
                'comment' => '所属id',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('login_id', 'string', [
                'comment' => 'ログインid',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('password', 'string', [
                'comment' => 'パスワード',
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'comment' => '名前',
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('name_kana', 'string', [
                'comment' => '名前(かな)',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('authority_code', 'string', [
                'comment' => 'ユーザ権限',
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->addColumn('profile_image', 'binary', [
                'default' => null,
                'limit' => 16777215,
                'null' => true,
            ])
            ->addColumn('profile_image_thumnail', 'binary', [
                'comment' => 'サムネイルイメージ',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('gender', 'string', [
                'comment' => '性別',
                'default' => '0',
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('staff_code', 'string', [
                'comment' => 'スタッフコード',
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('dealer_code', 'string', [
                'comment' => 'コンサルタントコード',
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('birthday', 'date', [
                'comment' => '誕生日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('tel', 'string', [
                'comment' => '連絡先',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('notice_mail', 'string', [
                'comment' => '通知メールアドレス',
                'default' => null,
                'limit' => 128,
                'null' => true,
            ])
            ->addColumn('business_mail', 'string', [
                'comment' => '業務連絡メールアドレス',
                'default' => null,
                'limit' => 128,
                'null' => true,
            ])
            ->addColumn('qualification_etc', 'string', [
                'comment' => '資格その他',
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('profile', 'text', [
                'comment' => 'プロフィール',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('note', 'text', [
                'comment' => '備考',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('login_ip', 'text', [
                'comment' => 'ログインip許可アドレス',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('terminal_token', 'string', [
                'comment' => '端末固定ip',
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('login_failed', 'datetime', [
                'comment' => 'ログイン失敗日時',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('login_failed_count', 'integer', [
                'comment' => 'ログイン失敗回数',
                'default' => '0',
                'limit' => 4,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('locked', 'boolean', [
                'comment' => 'ログイン可否フラグ',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('enabled', 'boolean', [
                'comment' => '表示・非表示',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('is_approval_superuser', 'boolean', [
                'comment' => 'スーパー承認ユーザフラグ',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('is_approval_user', 'boolean', [
                'comment' => '承認ユーザフラグ',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('is_constituent_checker', 'boolean', [
                'comment' => '構成員契約確認送付先指定',
                'default' => false,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('is_wait_contract', 'boolean', [
                'comment' => '契約情報成立待ち通知フラグ',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('is_insurer_func', 'boolean', [
                'comment' => '保険会社資料利用可能フラグ',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('start_func_id', 'integer', [
                'comment' => 'ログイン後表示機能id',
                'default' => null,
                'limit' => 11,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('api_key', 'string', [
                'comment' => 'apiキー',
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('google_service_account_key', 'string', [
                'comment' => 'googleサービスアカウント名',
                'default' => null,
                'limit' => 25,
                'null' => true,
            ])
            ->addColumn('google_calendar_sync_flg', 'boolean', [
                'comment' => 'googleカレンダー同期フラグ',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('google_calendar_open', 'boolean', [
                'comment' => 'googleカレンダー他ユーザ公開フラグ',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '作成日時',
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_user_id', 'integer', [
                'comment' => '作成者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => '更新日時',
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_user_id', 'integer', [
                'comment' => '更新者ユーザid',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('delete_flg', 'boolean', [
                'comment' => '削除フラグ',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('w_division_parent_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_division_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('w_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('refer_data_type', 'tinyinteger', [
                'default' => null,
                'limit' => 4,
                'null' => false,
            ])
            ->addIndex(
                [
                    'division_id',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('zips')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'id',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('zip_code', 'string', [
                'comment' => '郵便番号',
                'default' => null,
                'limit' => 7,
                'null' => true,
            ])
            ->addColumn('pref_code', 'integer', [
                'comment' => '都道府県コード',
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->addColumn('address', 'string', [
                'comment' => '住所',
                'default' => null,
                'limit' => 128,
                'null' => true,
            ])
            ->create();

        $this->table('applications')
            ->addForeignKey(
                'customer_id',
                'customers',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'product_category_id',
                'product_categories',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'product_id',
                'products',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('appoints')
            ->addForeignKey(
                'customer_id',
                'customers',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('claim_processes')
            ->addForeignKey(
                'claim_id',
                'customers',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('claims')
            ->addForeignKey(
                'customer_id',
                'customers',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('customer_changedusers')
            ->addForeignKey(
                'customer_id',
                'customers',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('customers')
            ->addForeignKey(
                'route_id',
                'routes',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('families')
            ->addForeignKey(
                'customer_id',
                'customers',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('group_users')
            ->addForeignKey(
                'division_id',
                'divisions',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('intentions')
            ->addForeignKey(
                'customer_id',
                'customers',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('products')
            ->addForeignKey(
                'insurer_id',
                'insurers',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'product_category_id',
                'product_categories',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('routes')
            ->addForeignKey(
                'division_id',
                'divisions',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('upload_files')
            ->addForeignKey(
                'customer_id',
                'customers',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();
    }

    public function down()
    {
        $this->table('applications')
            ->dropForeignKey(
                'customer_id'
            )
            ->dropForeignKey(
                'product_category_id'
            )
            ->dropForeignKey(
                'product_id'
            )->save();

        $this->table('appoints')
            ->dropForeignKey(
                'customer_id'
            )->save();

        $this->table('claim_processes')
            ->dropForeignKey(
                'claim_id'
            )->save();

        $this->table('claims')
            ->dropForeignKey(
                'customer_id'
            )->save();

        $this->table('customer_changedusers')
            ->dropForeignKey(
                'customer_id'
            )->save();

        $this->table('customers')
            ->dropForeignKey(
                'route_id'
            )
            ->dropForeignKey(
                'user_id'
            )->save();

        $this->table('families')
            ->dropForeignKey(
                'customer_id'
            )->save();

        $this->table('group_users')
            ->dropForeignKey(
                'division_id'
            )
            ->dropForeignKey(
                'user_id'
            )->save();

        $this->table('intentions')
            ->dropForeignKey(
                'customer_id'
            )->save();

        $this->table('products')
            ->dropForeignKey(
                'insurer_id'
            )
            ->dropForeignKey(
                'product_category_id'
            )->save();

        $this->table('routes')
            ->dropForeignKey(
                'division_id'
            )->save();

        $this->table('upload_files')
            ->dropForeignKey(
                'customer_id'
            )->save();

        $this->table('access_logs_yyyy')->drop()->save();
        $this->table('actions')->drop()->save();
        $this->table('applications')->drop()->save();
        $this->table('appoints')->drop()->save();
        $this->table('approval_changing_ipaddresses')->drop()->save();
        $this->table('authorities')->drop()->save();
        $this->table('authority_roles')->drop()->save();
        $this->table('claim_processes')->drop()->save();
        $this->table('claims')->drop()->save();
        $this->table('classification_datas')->drop()->save();
        $this->table('classification_lists')->drop()->save();
        $this->table('classifications')->drop()->save();
        $this->table('clients')->drop()->save();
        $this->table('customer_changedusers')->drop()->save();
        $this->table('customers')->drop()->save();
        $this->table('divisions')->drop()->save();
        $this->table('expertise_field_users')->drop()->save();
        $this->table('expertise_fields')->drop()->save();
        $this->table('families')->drop()->save();
        $this->table('functions')->drop()->save();
        $this->table('group_users')->drop()->save();
        $this->table('holidays')->drop()->save();
        $this->table('insurers')->drop()->save();
        $this->table('intention_approval_histories')->drop()->save();
        $this->table('intention_category_datas')->drop()->save();
        $this->table('intention_difference_reason_datas')->drop()->save();
        $this->table('intention_difference_reasons')->drop()->save();
        $this->table('intention_importance_point_data')->drop()->save();
        $this->table('intention_importance_points')->drop()->save();
        $this->table('intention_insurer_datas')->drop()->save();
        $this->table('intention_large_categories')->drop()->save();
        $this->table('intention_proposal_insurer_datas')->drop()->save();
        $this->table('intention_small_categories')->drop()->save();
        $this->table('intentions')->drop()->save();
        $this->table('item_infos')->drop()->save();
        $this->table('item_validations')->drop()->save();
        $this->table('items')->drop()->save();
        $this->table('letter_formats')->drop()->save();
        $this->table('letters')->drop()->save();
        $this->table('mail_log_senders')->drop()->save();
        $this->table('mail_logs')->drop()->save();
        $this->table('menus')->drop()->save();
        $this->table('messages')->drop()->save();
        $this->table('news')->drop()->save();
        $this->table('news_senders')->drop()->save();
        $this->table('password_histories')->drop()->save();
        $this->table('product_categories')->drop()->save();
        $this->table('products')->drop()->save();
        $this->table('properties')->drop()->save();
        $this->table('routes')->drop()->save();
        $this->table('shared_account_applies')->drop()->save();
        $this->table('shared_accounts')->drop()->save();
        $this->table('statuses')->drop()->save();
        $this->table('template_mails')->drop()->save();
        $this->table('upload_files')->drop()->save();
        $this->table('users')->drop()->save();
        $this->table('zips')->drop()->save();
    }
}
