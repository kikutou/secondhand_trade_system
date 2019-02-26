<?php
use Migrations\AbstractMigration;

class CreateMtbSaleStatuses extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('mtb_sale_statuses');
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
        'value' => '未公開',
        'rank' =>1
        ],
        [
        'id' => 2,
        'value' => '公開済み',
        'rank' => 2
        ],
        [
        'id' => 3,
        'value' => '販売済み',
        'rank' =>3
        ],
        [
        'id' => 4,
        'value' => '発送済み',
        'rank' =>4
        ],
        [
        'id' => 5,
        'value' => '購入者評価済み',
        'rank' =>5
        ],
        [
        'id' => 6,
        'value' => '出品者評価済み',
        'rank' =>6
        ],
        [
        'id' => 7,
        'value' => '返品済み',
        'rank' =>7
        ],
        [
        'id' => 8,
        'value' => '管理員確認中',
        'rank' =>8
        ],
        [
        'id' =>9 ,
        'value' => '管理員確認済み',
        'rank' =>9
        ],
        [
        'id' => 10,
        'value' => '出品禁止',
        'rank' =>10
        ]
        ];
        $this->insert('mtb_sale_statuses', $rows);
      }
      /**
        * Migrate Down.
        */
       public function down()
       {
           $this->execute('DELETE FROM mtb_sale_statuses');
       }
   }
