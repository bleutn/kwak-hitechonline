<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Categorie Controller
 *
 * @property \App\Model\Table\CategorieTable $Categorie
 */
class CategorieController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('categorie', $this->paginate($this->Categorie));
        $this->set('_serialize', ['categorie']);
    }

    /**
     * View method
     *
     * @param string|null $id Categorie id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categorie = $this->Categorie->get($id, [
            'contain' => []
        ]);
        $this->set('categorie', $categorie);
        $this->set('_serialize', ['categorie']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categorie = $this->Categorie->newEntity();
        if ($this->request->is('post')) {
            $categorie = $this->Categorie->patchEntity($categorie, $this->request->data);
            if ($this->Categorie->save($categorie)) {
                $this->Flash->success(__('The categorie has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The categorie could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('categorie'));
        $this->set('_serialize', ['categorie']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorie id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categorie = $this->Categorie->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categorie = $this->Categorie->patchEntity($categorie, $this->request->data);
            if ($this->Categorie->save($categorie)) {
                $this->Flash->success(__('The categorie has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The categorie could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('categorie'));
        $this->set('_serialize', ['categorie']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorie id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categorie = $this->Categorie->get($id);
        if ($this->Categorie->delete($categorie)) {
            $this->Flash->success(__('The categorie has been deleted.'));
        } else {
            $this->Flash->error(__('The categorie could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
