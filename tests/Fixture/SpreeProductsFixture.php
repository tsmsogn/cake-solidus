<?php
namespace Solidus\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SpreeProductsFixture
 *
 */
class SpreeProductsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'name' => ['type' => 'string', 'length' => null, 'default' => '', 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'description' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'available_on' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'deleted_at' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'slug' => ['type' => 'string', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'meta_description' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'meta_keywords' => ['type' => 'string', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'tax_category_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'shipping_category_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'created_at' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'updated_at' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'promotionable' => ['type' => 'boolean', 'length' => null, 'default' => 1, 'null' => true, 'comment' => null, 'precision' => null],
        'meta_title' => ['type' => 'string', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'index_spree_products_on_name' => ['type' => 'index', 'columns' => ['name'], 'length' => []],
            'index_spree_products_on_available_on' => ['type' => 'index', 'columns' => ['available_on'], 'length' => []],
            'index_spree_products_on_deleted_at' => ['type' => 'index', 'columns' => ['deleted_at'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'index_spree_products_on_slug' => ['type' => 'unique', 'columns' => ['slug'], 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Ruby on Rails Tote',
                'description' => 'Quibusdam ut ad minima corporis et ullam necessitatibus. Aliquid quos laudantium tempora est. Numquam rerum consequatur et cumque quibusdam. Non corrupti nemo non dolores qui iste est omnis. Minima suscipit provident quibusdam non illo labore aut.',
                'available_on' => '2018-05-30 04:51:38',
                'deleted_at' => null,
                'slug' => 'ruby-on-rails-tote',
                'meta_description' => null,
                'meta_keywords' => null,
                'tax_category_id' => 1,
                'shipping_category_id' => 1,
                'created_at' => '2018-05-30 04:51:38',
                'updated_at' => '2018-05-30 04:52:03',
                'promotionable' => true,
                'meta_title' => null
            ],
            [
                'id' => 2,
                'name' => 'Ruby on Rails Bag',
                'description' => 'Quibusdam ut ad minima corporis et ullam necessitatibus. Aliquid quos laudantium tempora est. Numquam rerum consequatur et cumque quibusdam. Non corrupti nemo non dolores qui iste est omnis. Minima suscipit provident quibusdam non illo labore aut.',
                'available_on' => '2018-05-30 04:51:38',
                'deleted_at' => null,
                'slug' => 'ruby-on-rails-bag',
                'meta_description' => null,
                'meta_keywords' => null,
                'tax_category_id' => 1,
                'shipping_category_id' => 1,
                'created_at' => '2018-05-30 04:51:38',
                'updated_at' => '2018-05-30 04:52:04',
                'promotionable' => true,
                'meta_title' => null
            ],
            [
                'id' => 3,
                'name' => 'Ruby on Rails Baseball Jersey',
                'description' => 'Quibusdam ut ad minima corporis et ullam necessitatibus. Aliquid quos laudantium tempora est. Numquam rerum consequatur et cumque quibusdam. Non corrupti nemo non dolores qui iste est omnis. Minima suscipit provident quibusdam non illo labore aut.',
                'available_on' => '2018-05-30 04:51:38',
                'deleted_at' => null,
                'slug' => 'ruby-on-rails-baseball-jersey',
                'meta_description' => null,
                'meta_keywords' => null,
                'tax_category_id' => 1,
                'shipping_category_id' => 1,
                'created_at' => '2018-05-30 04:51:38',
                'updated_at' => '2018-05-30 04:51:56',
                'promotionable' => true,
                'meta_title' => null
            ],
            [
                'id' => 4,
                'name' => 'Ruby on Rails Jr. Spaghetti',
                'description' => 'Quibusdam ut ad minima corporis et ullam necessitatibus. Aliquid quos laudantium tempora est. Numquam rerum consequatur et cumque quibusdam. Non corrupti nemo non dolores qui iste est omnis. Minima suscipit provident quibusdam non illo labore aut.',
                'available_on' => '2018-05-30 04:51:38',
                'deleted_at' => null,
                'slug' => 'ruby-on-rails-jr-spaghetti',
                'meta_description' => null,
                'meta_keywords' => null,
                'tax_category_id' => 1,
                'shipping_category_id' => 1,
                'created_at' => '2018-05-30 04:51:38',
                'updated_at' => '2018-05-30 04:51:57',
                'promotionable' => true,
                'meta_title' => null
            ],
            [
                'id' => 8,
                'name' => 'Ruby on Rails Mug',
                'description' => 'Quibusdam ut ad minima corporis et ullam necessitatibus. Aliquid quos laudantium tempora est. Numquam rerum consequatur et cumque quibusdam. Non corrupti nemo non dolores qui iste est omnis. Minima suscipit provident quibusdam non illo labore aut.',
                'available_on' => '2018-05-30 04:51:38',
                'deleted_at' => null,
                'slug' => 'ruby-on-rails-mug',
                'meta_description' => null,
                'meta_keywords' => null,
                'tax_category_id' => null,
                'shipping_category_id' => 1,
                'created_at' => '2018-05-30 04:51:38',
                'updated_at' => '2018-05-30 04:51:58',
                'promotionable' => true,
                'meta_title' => null
            ],
            [
                'id' => 5,
                'name' => 'Ruby on Rails Ringer T-Shirt',
                'description' => 'Quibusdam ut ad minima corporis et ullam necessitatibus. Aliquid quos laudantium tempora est. Numquam rerum consequatur et cumque quibusdam. Non corrupti nemo non dolores qui iste est omnis. Minima suscipit provident quibusdam non illo labore aut.',
                'available_on' => '2018-05-30 04:51:38',
                'deleted_at' => null,
                'slug' => 'ruby-on-rails-ringer-t-shirt',
                'meta_description' => null,
                'meta_keywords' => null,
                'tax_category_id' => 1,
                'shipping_category_id' => 1,
                'created_at' => '2018-05-30 04:51:38',
                'updated_at' => '2018-05-30 04:51:59',
                'promotionable' => true,
                'meta_title' => null
            ],
            [
                'id' => 9,
                'name' => 'Ruby on Rails Stein',
                'description' => 'Quibusdam ut ad minima corporis et ullam necessitatibus. Aliquid quos laudantium tempora est. Numquam rerum consequatur et cumque quibusdam. Non corrupti nemo non dolores qui iste est omnis. Minima suscipit provident quibusdam non illo labore aut.',
                'available_on' => '2018-05-30 04:51:38',
                'deleted_at' => null,
                'slug' => 'ruby-on-rails-stein',
                'meta_description' => null,
                'meta_keywords' => null,
                'tax_category_id' => null,
                'shipping_category_id' => 1,
                'created_at' => '2018-05-30 04:51:38',
                'updated_at' => '2018-05-30 04:52:01',
                'promotionable' => true,
                'meta_title' => null
            ],
            [
                'id' => 7,
                'name' => 'Apache Baseball Jersey',
                'description' => 'Quibusdam ut ad minima corporis et ullam necessitatibus. Aliquid quos laudantium tempora est. Numquam rerum consequatur et cumque quibusdam. Non corrupti nemo non dolores qui iste est omnis. Minima suscipit provident quibusdam non illo labore aut.',
                'available_on' => '2018-05-30 04:51:38',
                'deleted_at' => null,
                'slug' => 'apache-baseball-jersey',
                'meta_description' => null,
                'meta_keywords' => null,
                'tax_category_id' => 1,
                'shipping_category_id' => 1,
                'created_at' => '2018-05-30 04:51:38',
                'updated_at' => '2018-05-30 04:52:01',
                'promotionable' => true,
                'meta_title' => null
            ],
            [
                'id' => 6,
                'name' => 'Ruby Baseball Jersey',
                'description' => 'Quibusdam ut ad minima corporis et ullam necessitatibus. Aliquid quos laudantium tempora est. Numquam rerum consequatur et cumque quibusdam. Non corrupti nemo non dolores qui iste est omnis. Minima suscipit provident quibusdam non illo labore aut.',
                'available_on' => '2018-05-30 04:51:38',
                'deleted_at' => null,
                'slug' => 'ruby-baseball-jersey',
                'meta_description' => null,
                'meta_keywords' => null,
                'tax_category_id' => 1,
                'shipping_category_id' => 1,
                'created_at' => '2018-05-30 04:51:38',
                'updated_at' => '2018-05-30 04:52:02',
                'promotionable' => true,
                'meta_title' => null
            ],
        ];
        parent::init();
    }
}
