<?php
namespace Solidus\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SpreePricesFixture
 *
 */
class SpreePricesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'variant_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'amount' => ['type' => 'decimal', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'currency' => ['type' => 'string', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'deleted_at' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'created_at' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'updated_at' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'country_iso' => ['type' => 'string', 'length' => 2, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'index_spree_prices_on_variant_id_and_currency' => ['type' => 'index', 'columns' => ['variant_id', 'currency'], 'length' => []],
            'index_spree_prices_on_country_iso' => ['type' => 'index', 'columns' => ['country_iso'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
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
                'variant_id' => 1,
                'amount' => 15.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:48:58',
                'updated_at' => '2018-05-30 06:48:58',
                'country_iso' => null
            ],
            [
                'id' => 2,
                'variant_id' => 1,
                'amount' => 14.0,
                'currency' => 'EUR',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:48:58',
                'updated_at' => '2018-05-30 06:48:58',
                'country_iso' => null
            ],
            [
                'id' => 3,
                'variant_id' => 2,
                'amount' => 22.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:48:58',
                'updated_at' => '2018-05-30 06:48:58',
                'country_iso' => null
            ],
            [
                'id' => 4,
                'variant_id' => 2,
                'amount' => 19.0,
                'currency' => 'EUR',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:48:58',
                'updated_at' => '2018-05-30 06:48:58',
                'country_iso' => null
            ],
            [
                'id' => 5,
                'variant_id' => 3,
                'amount' => 19.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:48:58',
                'updated_at' => '2018-05-30 06:48:58',
                'country_iso' => null
            ],
            [
                'id' => 6,
                'variant_id' => 3,
                'amount' => 16.0,
                'currency' => 'EUR',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:48:58',
                'updated_at' => '2018-05-30 06:48:58',
                'country_iso' => null
            ],
            [
                'id' => 7,
                'variant_id' => 4,
                'amount' => 19.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:48:58',
                'updated_at' => '2018-05-30 06:48:58',
                'country_iso' => null
            ],
            [
                'id' => 8,
                'variant_id' => 4,
                'amount' => 16.0,
                'currency' => 'EUR',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:48:58',
                'updated_at' => '2018-05-30 06:48:58',
                'country_iso' => null
            ],
            [
                'id' => 9,
                'variant_id' => 5,
                'amount' => 19.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:48:58',
                'updated_at' => '2018-05-30 06:48:58',
                'country_iso' => null
            ],
            [
                'id' => 10,
                'variant_id' => 5,
                'amount' => 16.0,
                'currency' => 'EUR',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:48:58',
                'updated_at' => '2018-05-30 06:48:58',
                'country_iso' => null
            ],
            [
                'id' => 11,
                'variant_id' => 6,
                'amount' => 19.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:48:58',
                'updated_at' => '2018-05-30 06:48:58',
                'country_iso' => null
            ],
            [
                'id' => 12,
                'variant_id' => 6,
                'amount' => 16.0,
                'currency' => 'EUR',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:48:58',
                'updated_at' => '2018-05-30 06:48:58',
                'country_iso' => null
            ],
            [
                'id' => 13,
                'variant_id' => 7,
                'amount' => 19.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:48:58',
                'updated_at' => '2018-05-30 06:48:58',
                'country_iso' => null
            ],
            [
                'id' => 14,
                'variant_id' => 7,
                'amount' => 16.0,
                'currency' => 'EUR',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:48:58',
                'updated_at' => '2018-05-30 06:48:58',
                'country_iso' => null
            ],
            [
                'id' => 15,
                'variant_id' => 8,
                'amount' => 13.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:48:58',
                'updated_at' => '2018-05-30 06:48:58',
                'country_iso' => null
            ],
            [
                'id' => 16,
                'variant_id' => 8,
                'amount' => 12.0,
                'currency' => 'EUR',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:48:58',
                'updated_at' => '2018-05-30 06:48:58',
                'country_iso' => null
            ],
            [
                'id' => 17,
                'variant_id' => 9,
                'amount' => 16.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:48:58',
                'updated_at' => '2018-05-30 06:48:58',
                'country_iso' => null
            ],
            [
                'id' => 18,
                'variant_id' => 9,
                'amount' => 14.0,
                'currency' => 'EUR',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:48:58',
                'updated_at' => '2018-05-30 06:48:58',
                'country_iso' => null
            ],
            [
                'id' => 19,
                'variant_id' => 10,
                'amount' => 19.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:49:00',
                'updated_at' => '2018-05-30 06:49:00',
                'country_iso' => null
            ],
            [
                'id' => 20,
                'variant_id' => 11,
                'amount' => 19.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:49:00',
                'updated_at' => '2018-05-30 06:49:00',
                'country_iso' => null
            ],
            [
                'id' => 21,
                'variant_id' => 12,
                'amount' => 19.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:49:00',
                'updated_at' => '2018-05-30 06:49:00',
                'country_iso' => null
            ],
            [
                'id' => 22,
                'variant_id' => 13,
                'amount' => 19.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:49:00',
                'updated_at' => '2018-05-30 06:49:00',
                'country_iso' => null
            ],
            [
                'id' => 23,
                'variant_id' => 14,
                'amount' => 19.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:49:00',
                'updated_at' => '2018-05-30 06:49:00',
                'country_iso' => null
            ],
            [
                'id' => 24,
                'variant_id' => 15,
                'amount' => 19.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:49:00',
                'updated_at' => '2018-05-30 06:49:00',
                'country_iso' => null
            ],
            [
                'id' => 25,
                'variant_id' => 16,
                'amount' => 19.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:49:00',
                'updated_at' => '2018-05-30 06:49:00',
                'country_iso' => null
            ],
            [
                'id' => 26,
                'variant_id' => 17,
                'amount' => 19.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:49:00',
                'updated_at' => '2018-05-30 06:49:00',
                'country_iso' => null
            ],
            [
                'id' => 27,
                'variant_id' => 18,
                'amount' => 19.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:49:00',
                'updated_at' => '2018-05-30 06:49:00',
                'country_iso' => null
            ],
            [
                'id' => 28,
                'variant_id' => 19,
                'amount' => 19.99,
                'currency' => 'USD',
                'deleted_at' => null,
                'created_at' => '2018-05-30 06:49:00',
                'updated_at' => '2018-05-30 06:49:00',
                'country_iso' => null
            ],
        ];
        parent::init();
    }
}
