<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CoursesSchedules Model
 *
 * @method \App\Model\Entity\CoursesSchedule get($primaryKey, $options = [])
 * @method \App\Model\Entity\CoursesSchedule newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CoursesSchedule[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CoursesSchedule|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoursesSchedule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CoursesSchedule[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CoursesSchedule findOrCreate($search, callable $callback = null, $options = [])
 */
class CoursesSchedulesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('courses_schedules');
        $this->displayField('course_ID');
        $this->primaryKey(['course_ID', 'schedule_ID']);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('course_ID')
            ->allowEmpty('course_ID', 'create');

        $validator
            ->integer('schedule_ID')
            ->allowEmpty('schedule_ID', 'create');

        return $validator;
    }
}
