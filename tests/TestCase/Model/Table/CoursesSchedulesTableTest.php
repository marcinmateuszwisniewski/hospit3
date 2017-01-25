<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoursesSchedulesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoursesSchedulesTable Test Case
 */
class CoursesSchedulesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CoursesSchedulesTable
     */
    public $CoursesSchedules;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.courses_schedules'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CoursesSchedules') ? [] : ['className' => 'App\Model\Table\CoursesSchedulesTable'];
        $this->CoursesSchedules = TableRegistry::get('CoursesSchedules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CoursesSchedules);

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
