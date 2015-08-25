<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Seance Controller
 *
 * @property \App\Model\Table\SeanceTable $Seance
 */
class SeanceController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('seance', $this->paginate($this->Seance));
        $this->set('_serialize', ['seance']);
    }

    /**
     * View method
     *
     * @param string|null $id Seance id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $seance = $this->Seance->get($id, [
            'contain' => ['Produit']
        ]);
        $this->set('seance', $seance);
        $this->set('_serialize', ['seance']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $seance = $this->Seance->newEntity();
        if ($this->request->is('post')) {
            $seance = $this->Seance->patchEntity($seance, $this->request->data);
            if ($this->Seance->save($seance)) {
                $this->Flash->success(__('The seance has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The seance could not be saved. Please, try again.'));
            }
        }
        $produit = $this->Seance->Produit->find('list', ['limit' => 200]);
        $this->set(compact('seance', 'produit'));
        $this->set('_serialize', ['seance']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Seance id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $seance = $this->Seance->get($id, [
            'contain' => ['Produit']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $seance = $this->Seance->patchEntity($seance, $this->request->data);
            if ($this->Seance->save($seance)) {
                $this->Flash->success(__('The seance has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The seance could not be saved. Please, try again.'));
            }
        }
        $produit = $this->Seance->Produit->find('list', ['limit' => 200]);
        $this->set(compact('seance', 'produit'));
        $this->set('_serialize', ['seance']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Seance id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $seance = $this->Seance->get($id);
        if ($this->Seance->delete($seance)) {
            $this->Flash->success(__('The seance has been deleted.'));
        } else {
            $this->Flash->error(__('The seance could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
