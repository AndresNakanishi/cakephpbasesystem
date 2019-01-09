<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PermissionProfiles Controller
 *
 * @property \App\Model\Table\PermissionProfilesTable $PermissionProfiles
 *
 * @method \App\Model\Entity\PermissionProfile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PermissionProfilesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Permissions', 'Profiles']
        ];
        $permissionProfiles = $this->paginate($this->PermissionProfiles);

        $this->set(compact('permissionProfiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Permission Profile id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $permissionProfile = $this->PermissionProfiles->get($id, [
            'contain' => ['Permissions', 'Profiles']
        ]);

        $this->set('permissionProfile', $permissionProfile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $permissionProfile = $this->PermissionProfiles->newEntity();
        if ($this->request->is('post')) {
            $permissionProfile = $this->PermissionProfiles->patchEntity($permissionProfile, $this->request->getData());
            if ($this->PermissionProfiles->save($permissionProfile)) {
                $this->Flash->success(__('The permission profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The permission profile could not be saved. Please, try again.'));
        }
        $permissions = $this->PermissionProfiles->Permissions->find('list', ['limit' => 200]);
        $profiles = $this->PermissionProfiles->Profiles->find('list', ['limit' => 200]);
        $this->set(compact('permissionProfile', 'permissions', 'profiles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Permission Profile id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $permissionProfile = $this->PermissionProfiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $permissionProfile = $this->PermissionProfiles->patchEntity($permissionProfile, $this->request->getData());
            if ($this->PermissionProfiles->save($permissionProfile)) {
                $this->Flash->success(__('The permission profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The permission profile could not be saved. Please, try again.'));
        }
        $permissions = $this->PermissionProfiles->Permissions->find('list', ['limit' => 200]);
        $profiles = $this->PermissionProfiles->Profiles->find('list', ['limit' => 200]);
        $this->set(compact('permissionProfile', 'permissions', 'profiles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Permission Profile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $permissionProfile = $this->PermissionProfiles->get($id);
        if ($this->PermissionProfiles->delete($permissionProfile)) {
            $this->Flash->success(__('The permission profile has been deleted.'));
        } else {
            $this->Flash->error(__('The permission profile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
