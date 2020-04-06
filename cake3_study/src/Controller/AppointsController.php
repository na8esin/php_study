<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Appoints Controller
 *
 * @property \App\Model\Table\AppointsTable $Appoints
 *
 * @method \App\Model\Entity\Appoint[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AppointsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
//            'contain' => ['Users', 'Customers', 'GoogleCalendars', 'CreatedUsers', 'ModifiedUsers'],
        ];
        $appoints = $this->paginate($this->Appoints);

        $this->set(compact('appoints'));
    }

    /**
     * View method
     *
     * @param string|null $id Appoint id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $appoint = $this->Appoints->get($id, [
            //'contain' => ['Users', 'Customers', 'GoogleCalendars', 'CreatedUsers', 'ModifiedUsers', 'Applications', 'MailLogs'],
        ]);

        $this->set('appoint', $appoint);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $appoint = $this->Appoints->newEntity();
        if ($this->request->is('post')) {
            $appoint = $this->Appoints->patchEntity($appoint, $this->request->getData());
            if ($this->Appoints->save($appoint)) {
                $this->Flash->success(__('The appoint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The appoint could not be saved. Please, try again.'));
        }
        $users = $this->Appoints->Users->find('list', ['limit' => 200]);
        $customers = $this->Appoints->Customers->find('list', ['limit' => 200]);
        $googleCalendars = $this->Appoints->GoogleCalendars->find('list', ['limit' => 200]);
        $createdUsers = $this->Appoints->CreatedUsers->find('list', ['limit' => 200]);
        $modifiedUsers = $this->Appoints->ModifiedUsers->find('list', ['limit' => 200]);
        $this->set(compact('appoint', 'users', 'customers', 'googleCalendars', 'createdUsers', 'modifiedUsers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Appoint id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $appoint = $this->Appoints->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $appoint = $this->Appoints->patchEntity($appoint, $this->request->getData());
            if ($this->Appoints->save($appoint)) {
                $this->Flash->success(__('The appoint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The appoint could not be saved. Please, try again.'));
        }
        $users = $this->Appoints->Users->find('list', ['limit' => 200]);
        $customers = $this->Appoints->Customers->find('list', ['limit' => 200]);
        $googleCalendars = $this->Appoints->GoogleCalendars->find('list', ['limit' => 200]);
        $createdUsers = $this->Appoints->CreatedUsers->find('list', ['limit' => 200]);
        $modifiedUsers = $this->Appoints->ModifiedUsers->find('list', ['limit' => 200]);
        $this->set(compact('appoint', 'users', 'customers', 'googleCalendars', 'createdUsers', 'modifiedUsers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Appoint id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $appoint = $this->Appoints->get($id);
        if ($this->Appoints->delete($appoint)) {
            $this->Flash->success(__('The appoint has been deleted.'));
        } else {
            $this->Flash->error(__('The appoint could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
