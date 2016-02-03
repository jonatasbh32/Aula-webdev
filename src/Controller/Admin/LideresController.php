<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Lideres Controller
 *
 * @property \App\Model\Table\LideresTable $Lideres
 */
class LideresController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Celulas']
        ];
        $this->set('lideres', $this->paginate($this->Lideres));
        $this->set('_serialize', ['lideres']);
    }

    /**
     * View method
     *
     * @param string|null $id Lidere id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lidere = $this->Lideres->get($id, [
            'contain' => ['Celulas']
        ]);
        $this->set('lidere', $lidere);
        $this->set('_serialize', ['lidere']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lidere = $this->Lideres->newEntity();
        if ($this->request->is('post')) {
            $lidere = $this->Lideres->patchEntity($lidere, $this->request->data);
            if ($this->Lideres->save($lidere)) {
                $this->Flash->success(__('The lidere has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The lidere could not be saved. Please, try again.'));
            }
        }
        $celulas = $this->Lideres->Celulas->find('list', ['limit' => 200]);
        $this->set(compact('lidere', 'celulas'));
        $this->set('_serialize', ['lidere']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lidere id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lidere = $this->Lideres->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lidere = $this->Lideres->patchEntity($lidere, $this->request->data);
            if ($this->Lideres->save($lidere)) {
                $this->Flash->success(__('The lidere has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The lidere could not be saved. Please, try again.'));
            }
        }
        $celulas = $this->Lideres->Celulas->find('list', ['limit' => 200]);
        $this->set(compact('lidere', 'celulas'));
        $this->set('_serialize', ['lidere']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lidere id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lidere = $this->Lideres->get($id);
        if ($this->Lideres->delete($lidere)) {
            $this->Flash->success(__('The lidere has been deleted.'));
        } else {
            $this->Flash->error(__('The lidere could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
