<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PermissionProfilesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PermissionProfilesTable Test Case
 */
class PermissionProfilesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PermissionProfilesTable
     */
    public $PermissionProfiles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PermissionProfiles',
        'app.Permissions',
        'app.Profiles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PermissionProfiles') ? [] : ['className' => PermissionProfilesTable::class];
        $this->PermissionProfiles = TableRegistry::getTableLocator()->get('PermissionProfiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PermissionProfiles);

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
