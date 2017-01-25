<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AcademicTeachersEvaluationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AcademicTeachersEvaluationsTable Test Case
 */
class AcademicTeachersEvaluationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AcademicTeachersEvaluationsTable
     */
    public $AcademicTeachersEvaluations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('AcademicTeachersEvaluations') ? [] : ['className' => 'App\Model\Table\AcademicTeachersEvaluationsTable'];
        $this->AcademicTeachersEvaluations = TableRegistry::get('AcademicTeachersEvaluations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AcademicTeachersEvaluations);

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
