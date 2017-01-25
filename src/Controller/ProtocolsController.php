<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Protocols Controller
 *
 * @property \App\Model\Table\ProtocolsTable $Protocols
 */
class ProtocolsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $protocols = $this->paginate($this->Protocols);

        $this->set(compact('protocols'));
        $this->set('_serialize', ['protocols']);
    }

    /**
     * View method
     *
     * @param string|null $id Protocol id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $protocol = $this->Protocols->get($id, [
            'contain' => []
        ]);

        $this->set('protocol', $protocol);
        $this->set('_serialize', ['protocol']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $protocol = $this->Protocols->newEntity();
        if ($this->request->is('post')) {
            $protocol = $this->Protocols->patchEntity($protocol, $this->request->data);
            if ($this->Protocols->save($protocol)) {
                $this->Flash->success(__('The protocol has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The protocol could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('protocol'));
        $this->set('_serialize', ['protocol']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Protocol id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $protocol = $this->Protocols->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $protocol = $this->Protocols->patchEntity($protocol, $this->request->data);
            if ($this->Protocols->save($protocol)) {
                $this->Flash->success(__('The protocol has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The protocol could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('protocol'));
        $this->set('_serialize', ['protocol']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Protocol id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $protocol = $this->Protocols->get($id);
        if ($this->Protocols->delete($protocol)) {
            $this->Flash->success(__('The protocol has been deleted.'));
        } else {
            $this->Flash->error(__('The protocol could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
