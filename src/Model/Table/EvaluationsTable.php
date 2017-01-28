<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Evaluations Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $AcademicTeachers
 *
 * @method \App\Model\Entity\Evaluation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Evaluation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Evaluation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Evaluation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Evaluation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Evaluation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Evaluation findOrCreate($search, callable $callback = null, $options = [])
 */
class EvaluationsTable extends Table
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

        $this->table('evaluations');
        $this->displayField('ID');
        $this->primaryKey('ID');

        $this->belongsToMany('AcademicTeachers', [
            'foreignKey' => 'evaluation_id',
            'targetForeignKey' => 'academic_teacher_id',
            'joinTable' => 'academic_teachers_evaluations'
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
            ->integer('academic_teacher_ID')
            ->requirePresence('academic_teacher_ID', 'create')
            ->notEmpty('academic_teacher_ID');

        $validator
            ->integer('framework_ID')
            ->requirePresence('framework_ID', 'create')
            ->notEmpty('framework_ID');

        $validator
            ->integer('protocol_ID')
            ->requirePresence('protocol_ID', 'create')
            ->notEmpty('protocol_ID');

        $validator
            ->integer('final_note')
            ->allowEmpty('final_note');

        $validator
            ->allowEmpty('room');

        return $validator;
    }
}
