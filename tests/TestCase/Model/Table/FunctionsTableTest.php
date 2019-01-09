<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FunctionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FunctionsTable Test Case
 */
class FunctionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FunctionsTable
     */
    public $Functions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Functions',
        'app.PermissionFunctions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Functions') ? [] : ['className' => FunctionsTable::class];
        $this->Functions = TableRegistry::getTableLocator()->get('Functions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Functions);

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
