<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MethodsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MethodsTable Test Case
 */
class MethodsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MethodsTable
     */
    public $Methods;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Methods',
        'app.PermissionMethods'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Methods') ? [] : ['className' => MethodsTable::class];
        $this->Methods = TableRegistry::getTableLocator()->get('Methods', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Methods);

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
}
