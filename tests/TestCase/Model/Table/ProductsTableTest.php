<?php
declare(strict_types=1);

namespace CakeCart\Test\TestCase\Model\Table;

use CakeCart\Model\Table\ProductsTable;
use Cake\TestSuite\TestCase;

/**
 * CakeCart\Model\Table\ProductsTable Test Case
 */
class ProductsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \CakeCart\Model\Table\ProductsTable
     */
    protected $Products;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.CakeCart.Products',
        'plugin.CakeCart.Statuses',
        'plugin.CakeCart.Users',
        'plugin.CakeCart.Variants',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Products') ? [] : ['className' => ProductsTable::class];
        $this->Products = $this->getTableLocator()->get('Products', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Products);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
