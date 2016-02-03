<?php
namespace App\Controller\Admin;


use App\Controller\AppController;

/**
 * Celulas Controller
 *
 * @property \App\Model\Table\CelulasTable $Celulas
 */
class CelulasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {


         if ($this->request->is('post')) {
            $search = null;
            if (isset($this->request->data['search'])) {
                $search = $this->request->data['search'];
            }

            $celulas = $this->Celulas->find('all',
                [
                    'conditions'=>[
                        'Celulas.nome LIKE'=>'%'.$search.'%'
                    ]
                ]
            );

            $this->set('celulas', $celulas);
            $this->render('index');
        }    



   

        $this->paginate = [
            'limit'=> 7,
            'order' => ['Celulas.nome'=>'asc'],
            'contain' => ['Dias', 'Horas']
        ];
        $this->set('celulas', $this->paginate($this->Celulas));
        $this->set('_serialize', ['celulas']);
    }

    /**
     * View method
     *
     * @param string|null $id Celula id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $celula = $this->Celulas->get($id, [
            'contain' => ['Dias', 'Horas', 'Lideres', 'Membros']
        ]);
        $this->set('celula', $celula);
        $this->set('_serialize', ['celula']);
    }


    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $celula = $this->Celulas->newEntity();
        if ($this->request->is('post')) {
            $celula = $this->Celulas->patchEntity($celula, $this->request->data);
            if ($this->Celulas->save($celula)) {
                $this->Flash->success('Célula cadastrada com sucesso!.', [
                        'key' => 'positive']);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The celula could not be saved. Please, try again.');
            }
        }
        $dias = $this->Celulas->Dias->find('list', ['limit' => 200]);
        $horas = $this->Celulas->Horas->find('list', ['limit' => 200]);
        $this->set(compact('celula', 'dias', 'horas'));
        $this->set('_serialize', ['celula']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Celula id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $celula = $this->Celulas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $celula = $this->Celulas->patchEntity($celula, $this->request->data);
            if ($this->Celulas->save($celula)) {
                $this->Flash->success('The celula has been saved.', [
                        'key' => 'positive']);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The celula could not be saved. Please, try again.'));
            }
        }
        $dias = $this->Celulas->Dias->find('list', ['limit' => 200]);
        $horas = $this->Celulas->Horas->find('list', ['limit' => 200]);
        $this->set(compact('celula', 'dias', 'horas'));
        $this->set('_serialize', ['celula']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Celula id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $celula = $this->Celulas->get($id);
        if ($this->Celulas->delete($celula)) {
            $this->Flash->success('Célula deletada com sucesso.', [
                        'key' => 'delet']);
        } else {
            $this->Flash->error(__('The celula could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
