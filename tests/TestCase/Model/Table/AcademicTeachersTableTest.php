<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AcademicTeachersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AcademicTeachersTable Test Case
 */
class AcademicTeachersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AcademicTeachersTable
     */
    public $AcademicTeachers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.academic_teachers',
        'app.evaluations',
        'app.academic_teachers_evaluations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AcademicTeachers') ? [] : ['className' => 'App\Model\Table\AcademicTeachersTable'];
        $this->AcademicTeachers = TableRegistry::get('AcademicTeachers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AcademicTeachers);

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
