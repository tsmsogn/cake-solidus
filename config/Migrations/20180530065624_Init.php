<?php
use Migrations\AbstractMigration;

class Init extends AbstractMigration
{
    public function up()
    {

        $this->table('spree_assets')
            ->addColumn('viewable_type', 'string', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('viewable_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('attachment_width', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('attachment_height', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('attachment_file_size', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('position', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('attachment_content_type', 'string', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('attachment_file_name', 'string', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('type', 'string', [
                'default' => null,
                'limit' => 75,
                'null' => true,
            ])
            ->addColumn('attachment_updated_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('alt', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'viewable_type',
                    'type',
                ]
            )
            ->addIndex(
                [
                    'viewable_id',
                ]
            )
            ->create();

        $this->table('spree_prices')
            ->addColumn('variant_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('amount', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 10,
                'scale' => 2,
            ])
            ->addColumn('currency', 'string', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('deleted_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('country_iso', 'string', [
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addIndex(
                [
                    'variant_id',
                    'currency',
                ]
            )
            ->addIndex(
                [
                    'country_iso',
                ]
            )
            ->create();

        $this->table('spree_products')
            ->addColumn('name', 'string', [
                'default' => '',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('available_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('deleted_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('slug', 'string', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('meta_description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('meta_keywords', 'string', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('tax_category_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('shipping_category_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('promotionable', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('meta_title', 'string', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'slug',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'name',
                ]
            )
            ->addIndex(
                [
                    'available_on',
                ]
            )
            ->addIndex(
                [
                    'deleted_at',
                ]
            )
            ->create();

        $this->table('spree_shipping_categories')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('spree_tax_categories')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('description', 'string', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('is_default', 'boolean', [
                'default' => false,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('deleted_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('tax_code', 'string', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('spree_variants')
            ->addColumn('sku', 'string', [
                'default' => '',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('weight', 'decimal', [
                'default' => '0.0',
                'null' => true,
                'precision' => 8,
                'scale' => 2,
            ])
            ->addColumn('height', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 8,
                'scale' => 2,
            ])
            ->addColumn('width', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 8,
                'scale' => 2,
            ])
            ->addColumn('depth', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 8,
                'scale' => 2,
            ])
            ->addColumn('deleted_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('is_master', 'boolean', [
                'default' => false,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('product_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('cost_price', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 10,
                'scale' => 2,
            ])
            ->addColumn('position', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('cost_currency', 'string', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('track_inventory', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('tax_category_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'sku',
                ]
            )
            ->addIndex(
                [
                    'product_id',
                ]
            )
            ->addIndex(
                [
                    'position',
                ]
            )
            ->addIndex(
                [
                    'track_inventory',
                ]
            )
            ->addIndex(
                [
                    'tax_category_id',
                ]
            )
            ->create();
    }

    public function down()
    {
        $this->dropTable('spree_assets');
        $this->dropTable('spree_prices');
        $this->dropTable('spree_products');
        $this->dropTable('spree_shipping_categories');
        $this->dropTable('spree_tax_categories');
        $this->dropTable('spree_variants');
    }
}
