<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Profiles Controller
 *
 * @property \App\Model\Table\ProfilesTable $Profiles
 *
 * @method \App\Model\Entity\Profile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfilesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('system-datatables');
        $profiles = $this->Profiles->find('all',['conditions' => ['code <>' => 'GOD']])->all();
        $this->set('profiles', $profiles);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('system-datatables');
        $profile = $this->Profiles->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            filter_var($data['name'], FILTER_SANITIZE_STRING);
            $profile = $this->Profiles->patchEntity($profile, $this->request->getData());
            if ($this->Profiles->save($profile)) {
                $this->Flash->success(__('El perfil ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El perfil no pudo ser guardado. Por favor, intente más tarde.'));
        }
        $this->set(compact('profile'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Profile id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($code = null)
    {
        $this->viewBuilder()->setLayout('system-datatables');
        $profile = $this->Profiles->find('all', ['conditions' => ['code' => $code]])->first();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            filter_var($data['name'], FILTER_SANITIZE_STRING);
            $profile = $this->Profiles->patchEntity($profile, $this->request->getData());
            if ($this->Profiles->save($profile)) {
                $this->Flash->success(__('El perfil ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El perfil no pudo ser guardado. Por favor, intente más tarde.'));
        }
        $this->set(compact('profile'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['get','post', 'delete']);

        $profile = $this->Profiles->get($id);
        $deleted = false;

        if ($profile->allow_edit) {
            try {
                $deleted = $this->Profiles->delete($profile);
            } catch(\Exception $e) {

            }
        }
        
        if ($deleted) {
            $this->Flash->success(__('El perfil ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Este perfil no puede ser eliminado.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
