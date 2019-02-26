<?php
use Migrations\AbstractMigration;

class CreatePointsTable extends AbstractMigration
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
        $table = $this->table('points');
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'null' => false,
        ])->addForeignKey('user_id', 'users', 'id');

        $table->addColumn('time', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('type_flg', 'integer', [
            'default' => null,
            'comment' => '1:プラス　2:マイナス',
            'null' => false,
        ]);
        $table->addColumn('amount', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('mtb_use_id', 'integer', [
            'default' => null,
            'null' => false,
        ])->addForeignKey('mtb_use_id', 'mtb_uses', 'id');

        $table->addColumn('note', 'text', [
            'default' => null,
            'null' => true,
        ]);

        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
