<?php
use Migrations\AbstractMigration;

class CreateMtbUserStatusesTable extends AbstractMigration
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
     $table = $this->table('mtb_user_statuses');
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
     'value' => '未承認',
     'rank' =>1
     ],
     [
     'id' => 2,
     'value' => '承認済',
     'rank' => 2
     ],
     [
     'id' => 3,
     'value' => 'メール未承認',
     'rank' =>3
     ],
     [
     'id' => 4,
     'value' => 'メール承認済み',
     'rank' =>4
     ],
     [
     'id' => 5,
     'value' => '個人情報未承認',
     'rank' =>5
     ],
     [
     'id' => 6,
     'value' => '個人情報承認済み',
     'rank' =>6
     ]
     ];
     $this->insert('mtb_user_statuses', $rows);
   }
   /**
     * Migrate Down.
     */
    public function down()
    {
        $this->execute('DELETE FROM mtb_user_statuses');
    }
}
