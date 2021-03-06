<?php
namespace App\Model\Table;

use App\Model\Entity\Lidere;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lideres Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Celulas
 */
class LideresTable extends Table
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

        $this->table('lideres');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->belongsTo('Celulas', [
            'foreignKey' => 'celula_id',
            'joinType' => 'INNER'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('geracao', 'create')
            ->notEmpty('geracao');

        $validator
            ->requirePresence('m12', 'create')
            ->notEmpty('m12');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['celula_id'], 'Celulas'));
        return $rules;
    }
}
