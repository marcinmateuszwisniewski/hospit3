<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CoursesSchedules Controller
 *
 * @property \App\Model\Table\CoursesSchedulesTable $CoursesSchedules
 */
class CoursesSchedulesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $coursesSchedules = $this->paginate($this->CoursesSchedules);

        $this->set(compact('coursesSchedules'));
        $this->set('_serialize', ['coursesSchedules']);
    }

    /**
     * View method
     *
     * @param string|null $id Courses Schedule id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coursesSchedule = $this->CoursesSchedules->get($id, [
            'contain' => []
        ]);

        $this->set('coursesSchedule', $coursesSchedule);
        $this->set('_serialize', ['coursesSchedule']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coursesSchedule = $this->CoursesSchedules->newEntity();
        if ($this->request->is('post')) {
            $coursesSchedule = $this->CoursesSchedules->patchEntity($coursesSchedule, $this->request->data);
            if ($this->CoursesSchedules->save($coursesSchedule)) {
                $this->Flash->success(__('The courses schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The courses schedule could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('coursesSchedule'));
        $this->set('_serialize', ['coursesSchedule']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Courses Schedule id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coursesSchedule = $this->CoursesSchedules->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coursesSchedule = $this->CoursesSchedules->patchEntity($coursesSchedule, $this->request->data);
            if ($this->CoursesSchedules->save($coursesSchedule)) {
                $this->Flash->success(__('The courses schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The courses schedule could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('coursesSchedule'));
        $this->set('_serialize', ['coursesSchedule']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Courses Schedule id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coursesSchedule = $this->CoursesSchedules->get($id);
        if ($this->CoursesSchedules->delete($coursesSchedule)) {
            $this->Flash->success(__('The courses schedule has been deleted.'));
        } else {
            $this->Flash->error(__('The courses schedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
