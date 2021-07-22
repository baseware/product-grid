<?php
declare(strict_types=1);

namespace CakeCart\Test\TestCase\Model\Table;

use CakeCart\Model\Table\VariantsTable;
use Cake\TestSuite\TestCase;

/**
 * CakeCart\Model\Table\VariantsTable Test Case
 */
class VariantsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \CakeCart\Model\Table\VariantsTable
     */
    protected $Variants;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.CakeCart.Variants',
        'plugin.CakeCart.Units',
        'plugin.CakeCart.Products',
        'plugin.CakeCart.Statuses',
        'plugin.CakeCart.Variantimages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Variants') ? [] : ['className' => VariantsTable::class];
        $this->Variants = $this->getTableLocator()->get('Variants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Variants);

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
