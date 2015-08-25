<?php
namespace App\Model\Table;

use App\Model\Entity\Produit;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produit Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Seance
 */
class ProduitTable extends Table
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

        $this->table('produit');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Seance', [
            'foreignKey' => 'produit_id',
            'targetForeignKey' => 'seance_id',
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
            ->add('id_categorie', 'valid', ['rule' => 'numeric'])
            ->requirePresence('id_categorie', 'create')
            ->notEmpty('id_categorie');

        $validator
            ->requirePresence('intitule', 'create')
            ->notEmpty('intitule');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->add('prix', 'valid', ['rule' => 'numeric'])
            ->requirePresence('prix', 'create')
            ->notEmpty('prix');

        $validator
            ->add('quantite', 'valid', ['rule' => 'numeric'])
            ->requirePresence('quantite', 'create')
            ->notEmpty('quantite');

        $validator
            ->add('nb_vendu', 'valid', ['rule' => 'numeric'])
            ->requirePresence('nb_vendu', 'create')
            ->notEmpty('nb_vendu');

        return $validator;
    }
}
