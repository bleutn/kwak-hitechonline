<?php
namespace App\Model\Table;

use App\Model\Entity\Categorie;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categorie Model
 *
 */
class CategorieTable extends Table
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

        $this->table('categorie');
        $this->displayField('id');
        $this->primaryKey('id');

        //$this->belongsToMany('Produit');
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
            ->requirePresence('intitule', 'create')
            ->notEmpty('intitule');

        $validator
            ->requirePresence('desciption', 'create')
            ->notEmpty('desciption');

        return $validator;
    }
}
