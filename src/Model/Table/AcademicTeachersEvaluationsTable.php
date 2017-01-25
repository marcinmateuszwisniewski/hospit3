<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AcademicTeachersEvaluations Model
 *
 * @method \App\Model\Entity\AcademicTeachersEvaluation get($primaryKey, $options = [])
 * @method \App\Model\Entity\AcademicTeachersEvaluation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AcademicTeachersEvaluation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AcademicTeachersEvaluation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AcademicTeachersEvaluation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AcademicTeachersEvaluation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AcademicTeachersEvaluation findOrCreate($search, callable $callback = null, $options = [])
 */
class AcademicTeachersEvaluationsTable extends Table
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

        $this->table('academic_teachers_evaluations');
        $this->displayField('evaluation_ID');
        $this->primaryKey(['evaluation_ID', 'academic_teacher_ID']);
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
            ->integer('evaluation_ID')
            ->allowEmpty('evaluation_ID', 'create');

        $validator
            ->integer('academic_teacher_ID')
            ->allowEmpty('academic_teacher_ID', 'create');

        return $validator;
    }
}
