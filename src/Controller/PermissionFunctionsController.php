<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PermissionFunctions Controller
 *
 *
 * @method \App\Model\Entity\PermissionFunction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PermissionFunctionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $permissionFunctions = $this->paginate($this->PermissionFunctions);

        $this->set(compact('permissionFunctions'));
    }

    /**
     * View method
     *
     * @param string|null $id Permission Function id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $permissionFunction = $this->PermissionFunctions->get($id, [
            'contain' => []
        ]);

        $this->set('permissionFunction', $permissionFunction);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $permissionFunction = $this->PermissionFunctions->newEntity();
        if ($this->request->is('post')) {
            $permissionFunction = $this->PermissionFunctions->patchEntity($permissionFunction, $this->request->getData());
            if ($this->PermissionFunctions->save($permissionFunction)) {
                $this->Flash->success(__('The permission function has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The permission function could not be saved. Please, try again.'));
        }
        $this->set(compact('permissionFunction'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Permission Function id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $permissionFunction = $this->PermissionFunctions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $permissionFunction = $this->PermissionFunctions->patchEntity($permissionFunction, $this->request->getData());
            if ($this->PermissionFunctions->save($permissionFunction)) {
                $this->Flash->success(__('The permission function has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The permission function could not be saved. Please, try again.'));
        }
        $this->set(compact('permissionFunction'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Permission Function id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $permissionFunction = $this->PermissionFunctions->get($id);
        if ($this->PermissionFunctions->delete($permissionFunction)) {
            $this->Flash->success(__('The permission function has been deleted.'));
        } else {
            $this->Flash->error(__('The permission function could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
