<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AcademicTeachersEvaluationsFixture
 *
 */
class AcademicTeachersEvaluationsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'evaluation_ID' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'academic_teacher_ID' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'acad_eval' => ['type' => 'index', 'columns' => ['evaluation_ID'], 'length' => []],
            'acad_eval_2' => ['type' => 'index', 'columns' => ['academic_teacher_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['evaluation_ID', 'academic_teacher_ID'], 'length' => []],
            'acad_eval' => ['type' => 'foreign', 'columns' => ['evaluation_ID'], 'references' => ['evaluations', 'ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'acad_eval_2' => ['type' => 'foreign', 'columns' => ['academic_teacher_ID'], 'references' => ['academic_teachers', 'ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'evaluation_ID' => 1,
            'academic_teacher_ID' => 1
        ],
    ];
}
