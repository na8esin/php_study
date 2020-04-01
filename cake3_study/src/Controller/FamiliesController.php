<?php

namespace App\Controller;

use App\Controller\AppController;


/**
 * Families Controller
 *
 * @property \App\Model\Table\FamiliesTable $Families
 *
 * @method \App\Model\Entity\Family[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FamiliesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 25,
            'page ' => 2
            //            'contain' => ['Customers', 'CreatedUsers', 'ModifiedUsers']
        ];
        $families = $this->paginate($this->Families);
        $this->Families->place([5]);
        $this->set(compact('families'));
    }

    /**
     * View method
     *
     * @param string|null $id Family id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $family = $this->Families->get($id, [
            'contain' => ['Customers', 'CreatedUsers', 'ModifiedUsers']
        ]);

        $this->set('family', $family);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $family = $this->Families->newEntity();
        if ($this->request->is('post')) {
            $family = $this->Families->patchEntity($family, $this->request->getData());
            // newEntityからだとなんかinsert文を発行するっぽい
            if ($this->Families->save($family)) {
                $this->Flash->success(__('The family has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The family could not be saved. Please, try again.'));
        }
        //        $customers = $this->Families->Customers->find('list', ['limit' => 200]);
        //        $createdUsers = $this->Families->CreatedUsers->find('list', ['limit' => 200]);
        //        $modifiedUsers = $this->Families->ModifiedUsers->find('list', ['limit' => 200]);
        $this->set(compact('family'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Family id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $family = $this->Families->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $family = $this->Families->patchEntity($family, $this->request->getData());
            if ($this->Families->save($family)) {
                $this->Flash->success(__('The family has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The family could not be saved. Please, try again.'));
        }
        //        $customers = $this->Families->Customers->find('list', ['limit' => 200]);
        //        $createdUsers = $this->Families->CreatedUsers->find('list', ['limit' => 200]);
        //        $modifiedUsers = $this->Families->ModifiedUsers->find('list', ['limit' => 200]);
        //        $this->set(compact('family', 'customers', 'createdUsers', 'modifiedUsers'));
        $this->set(compact('family'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Family id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $family = $this->Families->get($id);
        if ($this->Families->delete($family)) {
            $this->Flash->success(__('The family has been deleted.'));
        } else {
            $this->Flash->error(__('The family could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
