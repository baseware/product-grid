<?php
declare(strict_types=1);

namespace CakeCart\Test\TestCase\Model\Table;

use CakeCart\Model\Table\UsersTable;
use Cake\TestSuite\TestCase;

/**
 * CakeCart\Model\Table\UsersTable Test Case
 */
class UsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \CakeCart\Model\Table\UsersTable
     */
    protected $Users;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.CakeCart.Users',
        'plugin.CakeCart.Roles',
        'plugin.CakeCart.SocialAccounts',
        'plugin.CakeCart.UsersOld',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Users') ? [] : ['className' => UsersTable::class];
        $this->Users = $this->getTableLocator()->get('Users', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Users);

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
