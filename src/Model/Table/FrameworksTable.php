<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Frameworks Model
 *
 * @method \App\Model\Entity\Framework get($primaryKey, $options = [])
 * @method \App\Model\Entity\Framework newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Framework[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Framework|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Framework patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Framework[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Framework findOrCreate($search, callable $callback = null, $options = [])
 */
class FrameworksTable extends Table
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

        $this->table('frameworks');
        $this->displayField('ID');
        $this->primaryKey('ID');
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
            ->date('submission_day')
            ->allowEmpty('submission_day');

        $validator
            ->boolean('accepted')
            ->requirePresence('accepted', 'create')
            ->notEmpty('accepted');

        $validator
            ->date('acceptation_day')
            ->allowEmpty('acceptation_day');

        return $validator;
    }
}
