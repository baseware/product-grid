<?php
declare(strict_types=1);

namespace CakeCart\Test\TestCase\Model\Table;

use CakeCart\Model\Table\StatusesTable;
use Cake\TestSuite\TestCase;

/**
 * CakeCart\Model\Table\StatusesTable Test Case
 */
class StatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \CakeCart\Model\Table\StatusesTable
     */
    protected $Statuses;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
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
        $config = $this->getTableLocator()->exists('Statuses') ? [] : ['className' => StatusesTable::class];
        $this->Statuses = $this->getTableLocator()->get('Statuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Statuses);

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
