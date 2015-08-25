<?php
namespace App\Model\Table;

use App\Model\Entity\Utilisateur;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Utilisateur Model
 *
 */
class UtilisateurTable extends Table
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

        $this->table('utilisateur');
        $this->displayField('id');
        $this->primaryKey('id');

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
            ->requirePresence('nom', 'create')
            ->notEmpty('nom');

        $validator
            ->requirePresence('penom', 'create')
            ->notEmpty('penom');

        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->add('newsletter', 'valid', ['rule' => 'boolean'])
            ->requirePresence('newsletter', 'create')
            ->notEmpty('newsletter');

        $validator
            ->allowEmpty('adresse');

        $validator
            ->add('code_postal', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('code_postal');

        $validator
            ->allowEmpty('ville');

        $validator
            ->add('telephone', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('telephone');

        $validator
            ->add('telephone mobile', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('telephone mobile');

        $validator
            ->add('role', 'valid', ['rule' => 'numeric'])
            ->requirePresence('role', 'create')
            ->notEmpty('role');

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
        return $rules;
    }
}
