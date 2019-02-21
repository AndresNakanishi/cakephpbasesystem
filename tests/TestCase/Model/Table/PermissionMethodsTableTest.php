<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PermissionMethodsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PermissionMethodsTable Test Case
 */
class PermissionMethodsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PermissionMethodsTable
     */
    public $PermissionMethods;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PermissionMethods',
        'app.Permissions',
        'app.Methods'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PermissionMethods') ? [] : ['className' => PermissionMethodsTable::class];
        $this->PermissionMethods = TableRegistry::getTableLocator()->get('PermissionMethods', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PermissionMethods);

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
