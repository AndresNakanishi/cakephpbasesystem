<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher; 
use Cake\Mailer\Email;
use Cake\Mailer\MailerAwareTrait;
use Cake\ORM\TableRegistry;
use App\Model\Entity\User;

class UsersController extends AppController
{
    use MailerAwareTrait;

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['login','register','recoverPassword']);
    }


    public function dashboard()
    {
        $this->viewBuilder()->setLayout('system-default');
    }

    public function index()
    {
        $this->viewBuilder()->setLayout('system-datatables');
        $users = $this->Users->find('all',['contain' => 'Profiles'])->where(['Profiles.code <>' => 'GOD'])->all();
        $this->set('users', $users);
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Profiles']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('system-default');
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();            
            $user = $this->Users->patchEntity($user, $data);
            if ($this->Users->save($user)) {

                $this->Flash->success(__('Un nuevo usuario ha sido habilitado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El usuario no ha podido ser habilitado.'));
        }
        $profiles = $this->Users->Profiles->find('list')->order(['name' => 'ASC']);
        $this->set(compact('user', 'profiles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $profiles = $this->Users->Profiles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'profiles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    // Configurar el perfil del usuario

    public function configData($id = null)
    {
        $session = $this->request->session();
        $this->viewBuilder()->setLayout('system-default');
        $user = $this->Users->get($id);
        if (strval($this->Auth->user('id')) !== $id) {
            $this->Flash->error(__('No tiene acceso a la información de otra cuenta.'));
            return $this->redirect(['action' => 'config',$this->Auth->user('id')]);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $user = $this->Users->patchEntity($user, $data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Se han actualizado los cambios.'));
                return $this->redirect(['action' => 'config',$this->Auth->user('id')]);
            } else {
                $this->Flash->error(__('No se han podido actualizar los cambios.'));
            }
        } 
        $this->set('user', $user);
    }

    // Cambiar la Contraseña

    public function configPass($id = null)
    {
        $session = $this->request->session();
        $this->viewBuilder()->setLayout('system-default');
        $user = $this->Users->get($id);
        if (strval($this->Auth->user('id')) !== $id) {
            $this->Flash->error(__('No tiene acceso a la información de otra cuenta.'));
            return $this->redirect(['action' => 'config',$this->Auth->user('id')]);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            
         
            $data = $this->request->getData();
            $password = $data['new_password'];
            $new_password_validate = $data['new_password_validation'];
            $new_password = [
                'password' => $password
            ];
 
            
            if ($password !== $new_password_validate){
                $this->Flash->error(__('Las contraseñas nuevas no coinciden.'));
                return $this->redirect(['action' => 'configPass',$this->Auth->user('id')]);
            }
            
            if  (!(new DefaultPasswordHasher())->check($data['old_password'], $user->password)) {
           
                $this->Flash->error(__('La contraseña anterior es errónea.'));
                return $this->redirect(['action' => 'configPass',$this->Auth->user('id')]);
               
            }
            
            $user = $this->Users->patchEntity($user, $new_password);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Se ha cambiado la contraseña correctamente.'));
                return $this->redirect(['action' => 'config',$this->Auth->user('id')]);
            } else {
                $this->Flash->error(__('No se ha podido cambiar la contraseña. Por favor conáctese con el administrador del sistema'));
            }
        } 
        $this->set('user', $user);
    }

    // El usuario ve su propia información...

    public function config($id = null)
    {
        $session = $this->request->session();
        $this->viewBuilder()->setLayout('system-default');
        if (strval($this->Auth->user('id')) !== $id) {
            $this->Flash->error(__('No puede editar la información sensible de otro usuario.'));
            return $this->redirect(['action' => 'dashboard']);
        }
        $user = $this->Users->get($id, [
            'contain' => ['Profiles'],
        ]);
        $this->set('user', $user);
    }

    // LOGIN //
    public function login()
    {
        $this->viewBuilder()->setLayout('system-auth');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Usuario o Password inválido.'));
        }
    }

    // LOGOUT //
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }


    // RECOVER PASSWORD //
    public function recoverPassword()
    {
        $this->viewBuilder()->setLayout('system-auth');
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $user = $this->Users->find('all')->where(['email' => $data['email'], 'active' => 1])->first();

            if ($user !== null){
                $newpassword = $this->generate_password(8);
                $user->password = $newpassword;
                if ($user) {
                    try {
                        $this->getMailer('Users')->send('recover', [$user, $newpassword]);
                        $this->Users->save($user);
                        $this->Flash->success(__('Ha sido enviado un email a su correo.'));
                    } catch (\Exception $e) {                      
                        $this->Flash->error(__('Error en el envío de mail.'));
                    }
                } else {
                    $this->Flash->error(__('No se ha podido recuperar la contraseña, contactese con el Área de Contratistas.'));
                }
            } else {
                $this->Flash->error(__('Usuario inválido.'));
            }
        }

    }

    // Generar Contraseña
    private function generate_password($length = 8) {
       $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-?";
       $password = substr(str_shuffle($chars), 0, $length);
       return $password;
    }
}
