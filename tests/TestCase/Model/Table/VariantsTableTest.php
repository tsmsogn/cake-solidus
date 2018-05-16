<?php
namespace Solidus\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Solidus\Model\Table\VariantsTable;

/**
 * Solidus\Model\Table\VariantsTable Test Case
 */
class VariantsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Solidus\Model\Table\VariantsTable
     */
    public $Variants;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.solidus.spree_variants',
        'plugin.solidus.spree_prices',
        'plugin.solidus.spree_products',
//        'plugin.solidus.tax_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Variants') ? [] : ['className' => VariantsTable::class];
        $this->Variants = TableRegistry::get('Variants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Variants);

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

    public function testDeletePrices()
    {
        $rubyOnRailsToteMasterVariant = $this->Variants->get(1);
        $this->Variants->delete($rubyOnRailsToteMasterVariant);

        $exists = $this->Variants->Prices
            ->exists(['id' => 1]);
        $this->assertFalse($exists);
    }
}
