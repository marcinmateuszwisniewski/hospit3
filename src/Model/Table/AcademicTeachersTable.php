<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AcademicTeachers Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Evaluations
 *
 * @method \App\Model\Entity\AcademicTeacher get($primaryKey, $options = [])
 * @method \App\Model\Entity\AcademicTeacher newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AcademicTeacher[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AcademicTeacher|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AcademicTeacher patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AcademicTeacher[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AcademicTeacher findOrCreate($search, callable $callback = null, $options = [])
 */
class AcademicTeachersTable extends Table
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

        $this->table('academic_teachers');
        $this->displayField('name');
        $this->primaryKey('ID');

        $this->belongsToMany('Evaluations', [
            'foreignKey' => 'academic_teacher_id',
            'targetForeignKey' => 'evaluation_id',
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('surname', 'create')
            ->notEmpty('surname');

        $validator
            ->integer('national_identification_number')
            ->requirePresence('national_identification_number', 'create')
            ->notEmpty('national_identification_number');

        $validator
            ->allowEmpty('occupation');

        $validator
            ->allowEmpty('degree');

        $validator
            ->allowEmpty('department');

        return $validator;
    }
    
    // The $query argument is a query builder instance.
// The $options array will contain the 'tags' option we passed
// to find('tagged') in our controller action.
public function findLowNotes(Query $query, array $options)
{
return $this->find()
->distinct(['AcademicTeachers.id'])
->matching('Evaluations', function ($q) {
    
    return $q->where(['Evaluations.final_note' < 3]);
});
}
    
    
}
