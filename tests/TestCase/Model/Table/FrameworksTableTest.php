<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FrameworksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FrameworksTable Test Case
 */
class FrameworksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FrameworksTable
     */
    public $Frameworks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.frameworks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Frameworks') ? [] : ['className' => 'App\Model\Table\FrameworksTable'];
        $this->Frameworks = TableRegistry::get('Frameworks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Frameworks);

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
