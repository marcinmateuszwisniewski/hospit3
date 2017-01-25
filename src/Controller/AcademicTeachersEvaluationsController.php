<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AcademicTeachersEvaluations Controller
 *
 * @property \App\Model\Table\AcademicTeachersEvaluationsTable $AcademicTeachersEvaluations
 */
class AcademicTeachersEvaluationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $academicTeachersEvaluations = $this->paginate($this->AcademicTeachersEvaluations);

        $this->set(compact('academicTeachersEvaluations'));
        $this->set('_serialize', ['academicTeachersEvaluations']);
    }

    /**
     * View method
     *
     * @param string|null $id Academic Teachers Evaluation id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $academicTeachersEvaluation = $this->AcademicTeachersEvaluations->get($id, [
            'contain' => []
        ]);

        $this->set('academicTeachersEvaluation', $academicTeachersEvaluation);
        $this->set('_serialize', ['academicTeachersEvaluation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $academicTeachersEvaluation = $this->AcademicTeachersEvaluations->newEntity();
        if ($this->request->is('post')) {
            $academicTeachersEvaluation = $this->AcademicTeachersEvaluations->patchEntity($academicTeachersEvaluation, $this->request->data);
            if ($this->AcademicTeachersEvaluations->save($academicTeachersEvaluation)) {
                $this->Flash->success(__('The academic teachers evaluation has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The academic teachers evaluation could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('academicTeachersEvaluation'));
        $this->set('_serialize', ['academicTeachersEvaluation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Academic Teachers Evaluation id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $academicTeachersEvaluation = $this->AcademicTeachersEvaluations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $academicTeachersEvaluation = $this->AcademicTeachersEvaluations->patchEntity($academicTeachersEvaluation, $this->request->data);
            if ($this->AcademicTeachersEvaluations->save($academicTeachersEvaluation)) {
                $this->Flash->success(__('The academic teachers evaluation has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The academic teachers evaluation could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('academicTeachersEvaluation'));
        $this->set('_serialize', ['academicTeachersEvaluation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Academic Teachers Evaluation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $academicTeachersEvaluation = $this->AcademicTeachersEvaluations->get($id);
        if ($this->AcademicTeachersEvaluations->delete($academicTeachersEvaluation)) {
            $this->Flash->success(__('The academic teachers evaluation has been deleted.'));
        } else {
            $this->Flash->error(__('The academic teachers evaluation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
