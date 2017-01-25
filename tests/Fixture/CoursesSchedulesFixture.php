<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CoursesSchedulesFixture
 *
 */
class CoursesSchedulesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'course_ID' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'schedule_ID' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'belong_to' => ['type' => 'index', 'columns' => ['course_ID'], 'length' => []],
            'belong_to_2' => ['type' => 'index', 'columns' => ['schedule_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['course_ID', 'schedule_ID'], 'length' => []],
            'belong_to' => ['type' => 'foreign', 'columns' => ['course_ID'], 'references' => ['courses', 'ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'belong_to_2' => ['type' => 'foreign', 'columns' => ['schedule_ID'], 'references' => ['schedules', 'ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'course_ID' => 1,
            'schedule_ID' => 1
        ],
    ];
}
