<?php
use Migrations\AbstractMigration;

class CreateMessagesTable extends AbstractMigration
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
        $table = $this->table('messages');
        $table->addColumn('from_user_id', 'integer', [
            'default' => null,
            'null' => false,
        ])->addForeignKey('from_user_id','users','id');

        $table->addColumn('to_users_id', 'integer', [
            'default' => null,
            'null' => false,
        ])->addForeignKey('to_users_id','users','id');

        $table->addColumn('product_id', 'integer', [
            'default' => null,
            'null' => false,
        ])->addForeignKey('product_id','products','id');

        $table->addColumn('content', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('readed_by_from_user_at', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('readed_by_to_user_at', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('readed_by_admin', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('canceled_at', 'datetime', [
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
