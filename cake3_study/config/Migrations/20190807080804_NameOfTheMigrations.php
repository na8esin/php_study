<?php
use Migrations\AbstractMigration;

class NameOfTheMigrations extends AbstractMigration
{

    public function up()
    {
        $this->table('users')
            ->removeIndexByName('division_id')
            ->update();

        $this->table('items')
            ->removeColumn('list_link_flg')
            ->update();

        $this->table('letter_formats')
            ->changeColumn('item_code', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->update();

        $this->table('claims')
            ->addColumn('note', 'text', [
                'after' => 'delete_flg',
                'default' => null,
                'length' => null,
                'null' => true,
            ])
            ->update();

        $this->table('item_infos')
            ->addColumn('link_rel', 'string', [
                'after' => 'require_flg',
                'comment' => 'リンク先パラメータ',
                'default' => null,
                'length' => 12,
                'null' => true,
            ])
            ->addColumn('link_base_url', 'string', [
                'after' => 'link_rel',
                'comment' => 'リンク先ベースurl',
                'default' => null,
                'length' => 255,
                'null' => true,
            ])
            ->update();

        $this->table('letters')
            ->addColumn('template_name', 'string', [
                'after' => 'show_at',
                'comment' => 'テンプレート名',
                'default' => null,
                'length' => 255,
                'null' => true,
            ])
            ->update();
    }

    public function down()
    {

        $this->table('users')
            ->addIndex(
                [
                    'division_id',
                ],
                [
                    'name' => 'division_id',
                    'unique' => true,
                ]
            )
            ->update();

        $this->table('claims')
            ->removeColumn('note')
            ->update();

        $this->table('item_infos')
            ->removeColumn('link_rel')
            ->removeColumn('link_base_url')
            ->update();

        $this->table('items')
            ->addColumn('list_link_flg', 'boolean', [
                'after' => 'show_list_flg',
                'comment' => 'リンクフラグ',
                'default' => '0',
                'length' => null,
                'null' => false,
            ])
            ->update();

        $this->table('letter_formats')
            ->changeColumn('item_code', 'string', [
                'comment' => '項目コード',
                'default' => null,
                'length' => 6,
                'null' => true,
            ])
            ->update();

        $this->table('letters')
            ->removeColumn('template_name')
            ->update();
    }
}

