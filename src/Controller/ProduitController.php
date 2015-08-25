<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Produit Controller
 *
 * @property \App\Model\Table\ProduitTable $Produit
 */
class ProduitController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('produit', $this->paginate($this->Produit));
        $this->set('_serialize', ['produit']);
    }

    /**
     * View method
     *
     * @param string|null $id Produit id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produit = $this->Produit->get($id, [
            'contain' => ['Seance']
        ]);
        $this->set('produit', $produit);
        $this->set('_serialize', ['produit']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produit = $this->Produit->newEntity();
        if ($this->request->is('post')) {
            $produit = $this->Produit->patchEntity($produit, $this->request->data);
            if ($this->Produit->save($produit)) {
                $this->Flash->success(__('The produit has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The produit could not be saved. Please, try again.'));
            }
        }
        $seance = $this->Produit->Seance->find('list', ['limit' => 200]);
        $this->set(compact('produit', 'seance'));
        $this->set('_serialize', ['produit']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Produit id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produit = $this->Produit->get($id, [
            'contain' => ['Seance']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produit = $this->Produit->patchEntity($produit, $this->request->data);
            if ($this->Produit->save($produit)) {
                $this->Flash->success(__('The produit has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The produit could not be saved. Please, try again.'));
            }
        }
        $seance = $this->Produit->Seance->find('list', ['limit' => 200]);
        $this->set(compact('produit', 'seance'));
        $this->set('_serialize', ['produit']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Produit id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produit = $this->Produit->get($id);
        if ($this->Produit->delete($produit)) {
            $this->Flash->success(__('The produit has been deleted.'));
        } else {
            $this->Flash->error(__('The produit could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
