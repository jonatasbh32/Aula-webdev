<?php
namespace App\Model\Table;

use App\Model\Entity\Celula;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Celulas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Dias
 * @property \Cake\ORM\Association\BelongsTo $Horas
 * @property \Cake\ORM\Association\HasMany $Lideres
 * @property \Cake\ORM\Association\HasMany $Membros
 */
class CelulasTable extends Table
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

        $this->table('celulas');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->belongsTo('Dias', [
            'foreignKey' => 'dia_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Horas', [
            'foreignKey' => 'hora_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Lideres', [
            'foreignKey' => 'celula_id'
        ]);
        $this->hasMany('Membros', [
            'foreignKey' => 'celula_id'
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
            ->add('id', 'valid',  ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('endereco', 'create')
            ->notEmpty('endereco');

        $validator
            ->requirePresence('bairro', 'create')
            ->notEmpty('bairro');

        $validator
            ->requirePresence('cidade', 'create')
            ->notEmpty('cidade');

        $validator
            ->requirePresence('obs', 'create')
            ->notEmpty('obs');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['dia_id'], 'Dias'));
        $rules->add($rules->existsIn(['hora_id'], 'Horas'));
        return $rules;
    }
}
