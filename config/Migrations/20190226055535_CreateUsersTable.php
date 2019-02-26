<?php
use Migrations\AbstractMigration;
use Cake\ORM\Rule\IsUnique;
class CreateUsersTable extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ])->addIndex(
          [
            'email',
          ],
          [
            'unique' => true
          ]
        );

        $table->addColumn('password', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('lastname', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('firstname', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('lastname_reading', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('firstname_reading', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('gender_flg', 'integer', [
            'default' => 1,
            'comment' => '1:男　2:女',
            'null' => false,
        ]);
        $table->addColumn('member_code', 'string', [
            'default' => null,
            'limit' => 6,
            'null' => false,
        ])->addIndex(
          [
            'member_code',
          ],
          [
            'unique' => true
          ]
        );
        $table->addColumn('postcode', 'string', [
            'default' => null,
            'limit' => 7,
            'null' => false,
        ]);
        $table->addColumn('mtb_area_id', 'integer', [
            'default' => null,
            'null' => false,
        ])->addForeignKey('mtb_area_id', 'mtb_areas', 'id');

        $table->addColumn('address1', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('address2', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('birthday', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('telephone_number', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('id_card_surface_pic', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('id_card_back_pic', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('mtb_user_status_id', 'integer', [
            'default' => null,
            'null' => false,
        ])->addForeignKey('mtb_user_status_id','mtb_user_statuses','id');

        $table->addColumn('token', 'string', [
            'default' => null,
            'limit' => 20,
            'null' => false,
        ]);
      
        $table->addColumn('email_approval_at', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('information_approval_at', 'datetime', [
            'default' => null,
            'null' => false,
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
