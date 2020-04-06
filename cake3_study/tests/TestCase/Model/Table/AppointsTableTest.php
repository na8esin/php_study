<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AppointsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AppointsTable Test Case
 */
class AppointsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AppointsTable
     */
    public $Appoints;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Appoints',
        'app.Users',
        'app.Customers',
        'app.GoogleCalendars',
        'app.CreatedUsers',
        'app.ModifiedUsers',
        'app.Applications',
        'app.MailLogs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Appoints') ? [] : ['className' => AppointsTable::class];
        $this->Appoints = TableRegistry::getTableLocator()->get('Appoints', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Appoints);

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
