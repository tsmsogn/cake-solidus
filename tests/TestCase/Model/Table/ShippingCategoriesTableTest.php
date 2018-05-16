<?php
namespace Solidus\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Solidus\Model\Table\ShippingCategoriesTable;

/**
 * Solidus\Model\Table\ShippingCategoriesTable Test Case
 */
class ShippingCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Solidus\Model\Table\ShippingCategoriesTable
     */
    public $ShippingCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.solidus.spree_shipping_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ShippingCategories') ? [] : ['className' => ShippingCategoriesTable::class];
        $this->ShippingCategories = TableRegistry::get('ShippingCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ShippingCategories);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
