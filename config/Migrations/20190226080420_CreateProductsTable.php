<?php
use Migrations\AbstractMigration;

class CreateProductsTable extends AbstractMigration
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
        $table = $this->table('products');
        $table->addColumn('from_user_id', 'integer', [
            'default' => null,
            'null' => false,
        ])->addForeignKey('from_user_id','users','id');

        $table->addColumn('to_users_id', 'integer', [
            'default' => null,
            'null' => false,
        ])->addForeignKey('to_users_id','users','id');

        $table->addColumn('category_id', 'integer', [
            'default' => null,
            'null' => false,
        ])->addForeignKey('category_id','categories','id');

        $table->addColumn('mtb_sale_status_id', 'integer', [
            'default' => null,
            'null' => false,
        ])->addForeignKey('mtb_sale_status_id','mtb_sale_statuses','id');

        $table->addColumn('name', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('product_code', 'string', [
            'default' => null,
            'limit' => 16,
            'null' => false,
        ])->addIndex(
          [
            'product_code',
          ],
          [
            'unique' => true
          ]
        );
        $table->addColumn('ship_code', 'string', [
            'default' => null,
            'limit' => 16,
            'null' => true,
        ])->addIndex(
          [
            'ship_code',
          ],
          [
            'unique' => true
          ]
        );

        $table->addColumn('detail', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('price', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('image1', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('image2', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('image3', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('image4', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('from_user_assessment', 'integer', [
            'default' => null,
            'comment' => '1:良い 2:悪い 3:普通',
            'null' => true,
        ]);
        $table->addColumn('from_user_comment', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('to_user_assessment', 'integer', [
            'default' => null,
            'comment' => '1:良い 2:悪い 3:普通',
            'null' => true,
        ]);
        $table->addColumn('to_user_comment', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('published_at', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('ordered_at', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('shipped_at', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('from_user_assessed_at', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('to_user_assessed_at', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('return_reason', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('return_requested_at', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('return_finished_at', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('admin_confirmed_at', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('prohibition_reason', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('prohibited_at', 'datetime', [
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
