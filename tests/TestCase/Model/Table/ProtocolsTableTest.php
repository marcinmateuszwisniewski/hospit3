<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProtocolsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProtocolsTable Test Case
 */
class ProtocolsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProtocolsTable
     */
    public $Protocols;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.protocols'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Protocols') ? [] : ['className' => 'App\Model\Table\ProtocolsTable'];
        $this->Protocols = TableRegistry::get('Protocols', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Protocols);

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
