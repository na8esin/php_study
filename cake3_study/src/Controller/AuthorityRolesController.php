<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * AuthorityRoles Controller
 *
 * @property \App\Model\Table\AuthorityRolesTable $AuthorityRoles
 *
 * @method \App\Model\Entity\AuthorityRole[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AuthorityRolesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            //'contain' => ['CreatedUsers', 'ModifiedUsers']
        ];
        $authorityRoles = $this->paginate($this->AuthorityRoles);

        $this->set(compact('authorityRoles'));
    }

    /**
     * View method
     *
     * @param string|null $id Authority Role id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $authorityRole = $this->AuthorityRoles->get($id, [
            //'contain' => ['CreatedUsers', 'ModifiedUsers']
        ]);

        $this->set('authorityRole', $authorityRole);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $authorityRole = $this->AuthorityRoles->newEntity();
        if ($this->request->is('post')) {
            $authorityRole = $this->AuthorityRoles->patchEntity($authorityRole, $this->request->getData());
            if ($this->AuthorityRoles->save($authorityRole)) {
                $this->Flash->success(__('The authority role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The authority role could not be saved. Please, try again.'));
        }
        $createdUsers = $this->AuthorityRoles->CreatedUsers->find('list', ['limit' => 200]);
        $modifiedUsers = $this->AuthorityRoles->ModifiedUsers->find('list', ['limit' => 200]);
        $this->set(compact('authorityRole', 'createdUsers', 'modifiedUsers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Authority Role id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $authorityRole = $this->AuthorityRoles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $authorityRole = $this->AuthorityRoles->patchEntity($authorityRole, $this->request->getData());
            if ($this->AuthorityRoles->save($authorityRole)) {
                $this->Flash->success(__('The authority role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The authority role could not be saved. Please, try again.'));
        }
        $createdUsers = $this->AuthorityRoles->CreatedUsers->find('list', ['limit' => 200]);
        $modifiedUsers = $this->AuthorityRoles->ModifiedUsers->find('list', ['limit' => 200]);
        $this->set(compact('authorityRole', 'createdUsers', 'modifiedUsers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Authority Role id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $authorityRole = $this->AuthorityRoles->get($id);
        if ($this->AuthorityRoles->delete($authorityRole)) {
            $this->Flash->success(__('The authority role has been deleted.'));
        } else {
            $this->Flash->error(__('The authority role could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
