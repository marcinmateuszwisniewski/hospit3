<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Schedules Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Courses
 *
 * @method \App\Model\Entity\Schedule get($primaryKey, $options = [])
 * @method \App\Model\Entity\Schedule newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Schedule[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Schedule|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Schedule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Schedule[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Schedule findOrCreate($search, callable $callback = null, $options = [])
 */
class SchedulesTable extends Table
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

        $this->table('schedules');
        $this->displayField('ID');
        $this->primaryKey('ID');

        $this->belongsToMany('Courses', [
            'foreignKey' => 'schedule_id',
            'targetForeignKey' => 'course_id',
            'joinTable' => 'courses_schedules'
        ]);
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
            ->integer('ID')
            ->allowEmpty('ID', 'create');

        $validator
            ->integer('term_ID')
            ->requirePresence('term_ID', 'create')
            ->notEmpty('term_ID');

        $validator
            ->integer('academic_teacher_ID')
            ->requirePresence('academic_teacher_ID', 'create')
            ->notEmpty('academic_teacher_ID');

        return $validator;
    }
}
