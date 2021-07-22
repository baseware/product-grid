<?php
declare(strict_types=1);

namespace CakeCart\Test\TestCase\Model\Table;

use CakeCart\Model\Table\UnitsTable;
use Cake\TestSuite\TestCase;

/**
 * CakeCart\Model\Table\UnitsTable Test Case
 */
class UnitsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \CakeCart\Model\Table\UnitsTable
     */
    protected $Units;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.CakeCart.Units',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Units') ? [] : ['className' => UnitsTable::class];
        $this->Units = $this->getTableLocator()->get('Units', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Units);

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
}
