<?php
namespace Solidus\Test\TestCase\Model\Table;

use Cake\I18n\Time;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Solidus\Model\Table\ProductsTable;

/**
 * Solidus\Model\Table\ProductsTable Test Case
 */
class ProductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Solidus\Model\Table\ProductsTable
     */
    public $Products;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.solidus.spree_products',
        'plugin.solidus.spree_prices',
        'plugin.solidus.spree_variants',
////        'plugin.solidus.tax_categories',
//        'plugin.solidus.shipping_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Products') ? [] : ['className' => ProductsTable::class];
        $this->Products = TableRegistry::get('Products', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Products);

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

    public function testHasOneMaster()
    {
        $tote = $this->Products
            ->get(1, [
                'contain' => ['Master']
            ]);

        $this->assertEquals('ROR-00011', $tote->master->sku);

        $this->markTestIncomplete('Test variants marked as deleted');
    }

    public function testHasManyVariants()
    {
        $jersey = $this->Products
            ->get(3, [
                'contain' => ['Variants']
            ]);

        $this->assertEquals(10, count($jersey->variants));
        $this->assertInstanceOf('Solidus\Model\Entity\Variant', $jersey->variants[0]);
        $this->assertEquals('ROR-00001', $jersey->variants[0]->sku);

        $this->markTestIncomplete('Test variants marked as deleted');
    }

    public function testHasManyVariantsIncludingMaster()
    {
        $jersey = $this->Products
            ->get(3, [
                'contain' => ['VariantsIncludingMaster']
            ]);

        $this->assertEquals(11, count($jersey->variants_including_master));

        $this->markTestIncomplete('Test variants marked as deleted');
    }

    public function testDeleteVariants()
    {
        $tote = $this->Products->get(1);
        $this->Products->delete($tote);

        $exists = $this->Products->VariantsIncludingDeleted
            ->exists(['sku LIKE' => 'ROR-00011']);
        $this->assertFalse($exists);
    }

    public function testIsAvailable()
    {
        $this->assertTrue($this->Products->isAvailable(['id' => 1]));

        $jersey = $this->Products->get(3);
        $jersey->available_on = null;
        $this->Products->save($jersey);
        $this->assertFalse($this->Products->isAvailable(['id' => 3]));

        $mug = $this->Products->get(8);
        $mug->available_on = new Time('1 day');
        $this->Products->save($mug);
        $this->assertFalse($this->Products->isAvailable(['id' => 8]));

        $stein = $this->Products->get(9);
        $this->Products->discard($stein);
        $this->assertFalse($this->Products->isAvailable(['id' => 9]));

        $this->assertEquals(6, $this->Products->find('available')->count());
    }
}
