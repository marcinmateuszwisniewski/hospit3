<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Protocols Model
 *
 * @method \App\Model\Entity\Protocol get($primaryKey, $options = [])
 * @method \App\Model\Entity\Protocol newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Protocol[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Protocol|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Protocol patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Protocol[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Protocol findOrCreate($search, callable $callback = null, $options = [])
 */
class ProtocolsTable extends Table
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

        $this->table('protocols');
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
            ->boolean('discussed')
            ->requirePresence('discussed', 'create')
            ->notEmpty('discussed');

        $validator
            ->date('discussion_day')
            ->allowEmpty('discussion_day');

        $validator
            ->date('commital_day')
            ->allowEmpty('commital_day');

        $validator
            ->date('evaluation_day')
            ->allowEmpty('evaluation_day');

        $validator
            ->integer('hour')
            ->requirePresence('hour', 'create')
            ->notEmpty('hour');

        return $validator;
    }
}
