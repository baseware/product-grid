<?php
declare(strict_types=1);

namespace CakeCart\Test\TestCase\Model\Table;

use CakeCart\Model\Table\CategoriesTable;
use Cake\TestSuite\TestCase;

/**
 * CakeCart\Model\Table\CategoriesTable Test Case
 */
class CategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \CakeCart\Model\Table\CategoriesTable
     */
    protected $Categories;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.CakeCart.Categories',
        'plugin.CakeCart.Statuses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Categories') ? [] : ['className' => CategoriesTable::class];
        $this->Categories = $this->getTableLocator()->get('Categories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Categories);

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
