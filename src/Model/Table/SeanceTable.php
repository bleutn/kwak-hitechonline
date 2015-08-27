<?php
namespace App\Model\Table;

use App\Model\Entity\Seance;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Seance Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Produit
 */
class SeanceTable extends Table
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

        $this->table('seance');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Produit', [
            'foreignKey' => 'id_seance',
            'targetForeignKey' => 'id_produit',
            'joinTable' => 'seance_produit'
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
            ->add('date_deb', 'valid', ['rule' => 'datetime'])
            ->requirePresence('date_deb', 'create')
            ->notEmpty('date_deb');

        $validator
            ->add('date_fin', 'valid', ['rule' => 'datetime'])
            ->requirePresence('date_fin', 'create')
            ->notEmpty('date_fin');

        $validator
            ->requirePresence('titre', 'create')
            ->notEmpty('titre');

        return $validator;
    }
}
