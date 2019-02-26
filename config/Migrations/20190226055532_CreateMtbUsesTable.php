<?php
use Migrations\AbstractMigration;

class CreateMtbUsesTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $table = $this->table('mtb_uses');
        $table->addColumn('value', 'text', [
        'default' => null,
        'null' => false,
        ]);
        $table->addColumn('rank', 'integer', [
        'default' => null,
        'null' => false,
        ]);
        $table->create();
        $rows = [
        [
        'id' => 1,
        'value' => '入金（チャージ）',
        'rank' =>1
        ],
        [
        'id' => 2,
        'value' => '出金',
        'rank' => 2
        ],
        [
        'id' => 3,
        'value' => '売上金',
        'rank' =>3
        ],
        [
        'id' => 4,
        'value' => '支払金',
        'rank' =>4
        ],
        [
        'id' => 5,
        'value' => '手数料',
        'rank' =>5
        ],
        [
        'id' => 6,
        'value' => '返金',
        'rank' =>6
        ],
        [
        'id' => 7,
        'value' => 'キャンペン',
        'rank' =>7
        ],
        [
        'id' => 8,
        'value' => '管理者操作',
        'rank' =>8
        ]
        ];
        $this->insert('mtb_uses', $rows);
      }
      /**
        * Migrate Down.
        */
       public function down()
       {
           $this->execute('DELETE FROM mtb_uses');
       }
   }
