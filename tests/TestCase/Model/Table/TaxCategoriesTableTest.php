<?php
namespace Solidus\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Solidus\Model\Table\TaxCategoriesTable;

/**
 * Solidus\Model\Table\TaxCategoriesTable Test Case
 */
class TaxCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Solidus\Model\Table\TaxCategoriesTable
     */
    public $TaxCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.solidus.spree_tax_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TaxCategories') ? [] : ['className' => TaxCategoriesTable::class];
        $this->TaxCategories = TableRegistry::get('TaxCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TaxCategories);

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
