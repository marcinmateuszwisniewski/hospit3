<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AcademicTeachers Controller
 *
 * @property \App\Model\Table\AcademicTeachersTable $AcademicTeachers
 */
class AcademicTeachersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $academicTeachers = $this->paginate($this->AcademicTeachers);

        $this->set(compact('academicTeachers'));
        $this->set('_serialize', ['academicTeachers']);
    }

    /**
     * View method
     *
     * @param string|null $id Academic Teacher id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $academicTeacher = $this->AcademicTeachers->get($id, [
            'contain' => ['Evaluations']
        ]);

        $this->set('academicTeacher', $academicTeacher);
        $this->set('_serialize', ['academicTeacher']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $academicTeacher = $this->AcademicTeachers->newEntity();
        if ($this->request->is('post')) {
            $academicTeacher = $this->AcademicTeachers->patchEntity($academicTeacher, $this->request->data);
            if ($this->AcademicTeachers->save($academicTeacher)) {
                $this->Flash->success(__('The academic teacher has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The academic teacher could not be saved. Please, try again.'));
            }
        }
        $evaluations = $this->AcademicTeachers->Evaluations->find('list', ['limit' => 200]);
        $this->set(compact('academicTeacher', 'evaluations'));
        $this->set('_serialize', ['academicTeacher']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Academic Teacher id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $academicTeacher = $this->AcademicTeachers->get($id, [
            'contain' => ['Evaluations']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $academicTeacher = $this->AcademicTeachers->patchEntity($academicTeacher, $this->request->data);
            if ($this->AcademicTeachers->save($academicTeacher)) {
                $this->Flash->success(__('The academic teacher has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The academic teacher could not be saved. Please, try again.'));
            }
        }
        $evaluations = $this->AcademicTeachers->Evaluations->find('list', ['limit' => 200]);
        $this->set(compact('academicTeacher', 'evaluations'));
        $this->set('_serialize', ['academicTeacher']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Academic Teacher id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $academicTeacher = $this->AcademicTeachers->get($id);
        if ($this->AcademicTeachers->delete($academicTeacher)) {
            $this->Flash->success(__('The academic teacher has been deleted.'));
        } else {
            $this->Flash->error(__('The academic teacher could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
