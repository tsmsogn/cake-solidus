<?php
namespace Solidus\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Solidus\Model\Table\PricesTable;

/**
 * Solidus\Model\Table\PricesTable Test Case
 */
class PricesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Solidus\Model\Table\PricesTable
     */
    public $Prices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.solidus.spree_prices',
        'plugin.solidus.variants'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Prices') ? [] : ['className' => PricesTable::class];
        $this->Prices = TableRegistry::get('Prices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Prices);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
