<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EvaluationsFixture
 *
 */
class EvaluationsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'academic_teacher_ID' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'framework_ID' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'protocol_ID' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'final_note' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'room' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'documents' => ['type' => 'index', 'columns' => ['protocol_ID'], 'length' => []],
            'holds' => ['type' => 'index', 'columns' => ['framework_ID'], 'length' => []],
            'concern' => ['type' => 'index', 'columns' => ['academic_teacher_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'concern' => ['type' => 'foreign', 'columns' => ['academic_teacher_ID'], 'references' => ['academic_teachers', 'ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'documents' => ['type' => 'foreign', 'columns' => ['protocol_ID'], 'references' => ['protocols', 'ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'holds' => ['type' => 'foreign', 'columns' => ['framework_ID'], 'references' => ['frameworks', 'ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'ID' => 1,
            'academic_teacher_ID' => 1,
            'framework_ID' => 1,
            'protocol_ID' => 1,
            'final_note' => 1,
            'room' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
