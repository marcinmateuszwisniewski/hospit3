<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Frameworks Controller
 *
 * @property \App\Model\Table\FrameworksTable $Frameworks
 */
class FrameworksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $frameworks = $this->paginate($this->Frameworks);

        $this->set(compact('frameworks'));
        $this->set('_serialize', ['frameworks']);
    }

    /**
     * View method
     *
     * @param string|null $id Framework id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $framework = $this->Frameworks->get($id, [
            'contain' => []
        ]);

        $this->set('framework', $framework);
        $this->set('_serialize', ['framework']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $framework = $this->Frameworks->newEntity();
        if ($this->request->is('post')) {
            $framework = $this->Frameworks->patchEntity($framework, $this->request->data);
            if ($this->Frameworks->save($framework)) {
                $this->Flash->success(__('The framework has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The framework could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('framework'));
        $this->set('_serialize', ['framework']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Framework id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $framework = $this->Frameworks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $framework = $this->Frameworks->patchEntity($framework, $this->request->data);
            if ($this->Frameworks->save($framework)) {
                $this->Flash->success(__('The framework has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The framework could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('framework'));
        $this->set('_serialize', ['framework']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Framework id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $framework = $this->Frameworks->get($id);
        if ($this->Frameworks->delete($framework)) {
            $this->Flash->success(__('The framework has been deleted.'));
        } else {
            $this->Flash->error(__('The framework could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
