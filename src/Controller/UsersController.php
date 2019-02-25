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
            $newpassword = $this->generate_password(8);               
            $data['password'] = $newpassword;
            $data['active'] = 1;
            $data['avatar'] = 'https://ui-avatars.com/api/?font-size=0.33&background=0D8ABC&color=fff&name='.$data['name'].'+'.$data['surname'];
            $user = $this->Users->patchEntity($user, $data);
            if ($this->Users->save($user)) {
                try {
                    $this->getMailer('Users')->send('welcomeMember', [$user, $newpassword]);
                    $this->Flash->success(__('Un nuevo usuario ha sido habilitado correctamente.'));
                    return $this->redirect(['action' => 'index']);
                } catch (Exception $e) {
                    $this->Flash->error(__('El usuario no ha podido ser habilitado.'));
                }
            }
        }
        $profiles = $this->Users->Profiles->find('list', ['conditions' => ['code <>' => 'GOD']])->order(['name' => 'ASC']);
        $this->set(compact('user', 'profiles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($username = null)
    {
        $this->viewBuilder()->setLayout('system-default');
        $user = $this->Users->find('all', ['conditions' => ['username' => $username]])->contain('Profiles')->first();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            if ($data !== false) {
                $user = $this->Users->patchEntity($user, $data);
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Se han guardado los cambios exitosamente.'));
                    return $this->redirect(['action' => 'index']);
                }
            } else {
                $this->Flash->error(__('No hubo cambios en el registro.'));
            }
        }
        $profiles = $this->Users->Profiles->find('list', ['conditions' => ['code <>' => 'GOD']])->order(['name' => 'ASC']);
        $this->set(compact('user', 'profiles'));
    }

    // Configurar el perfil del usuario

    public function configData($username = null)
    {
        $session = $this->request->session();
        $this->autoRender = false;
        $user = $this->Users->find('all', ['conditions' => ['username' => $username]])->first();
        if ($this->Auth->user('username') !== $username) {
            $this->Flash->error(__('No tiene acceso a la información de otra cuenta.'));
            return $this->redirect(['action' => 'config',$this->Auth->user('username')]);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $data['avatar'] = 'https://ui-avatars.com/api/?size=256&font-size=0.33&background=0D8ABC&color=fff&name='.$data['name'].'+'.$data['surname'];
            $user = $this->Users->patchEntity($user, $data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Se han actualizado los cambios.'));
                return $this->redirect(['action' => 'config',$this->Auth->user('username')]);
            } else {
                $this->Flash->error(__('No se han podido actualizar los cambios.'));
            }
        } 
    }

    // Cambiar la Contraseña

    public function configPass($username = null)
    {
        $session = $this->request->session();
        $this->viewBuilder()->setLayout('system-default');
        $user = $this->Users->find('all', ['conditions' => ['username' => $username]])->first();
        if ($this->Auth->user('username') !== $username) {
            $this->Flash->error(__('No tiene acceso a la información de otra cuenta.'));
            return $this->redirect(['action' => 'config',$this->Auth->user('username')]);
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
                return $this->redirect(['action' => 'configPass',$this->Auth->user('username')]);
            }
            
            if  (!(new DefaultPasswordHasher())->check($data['old_password'], $user->password)) {
           
                $this->Flash->error(__('La contraseña anterior es errónea.'));
                return $this->redirect(['action' => 'configPass',$this->Auth->user('username')]);
               
            }
            
            $user = $this->Users->patchEntity($user, $new_password);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Se ha cambiado la contraseña correctamente.'));
                return $this->redirect(['action' => 'config',$this->Auth->user('username')]);
            } else {
                $this->Flash->error(__('No se ha podido cambiar la contraseña. Por favor conáctese con el administrador del sistema'));
            }
        } 
        $this->set('user', $user);
    }

    // El usuario ve su propia información...

    public function config($username = null)
    {
        $session = $this->request->session();
        $this->viewBuilder()->setLayout('system-default');
        if ($this->Auth->user('username') !== $username) {
            $this->Flash->error(__('No puede editar la información sensible de otro usuario.'));
            return $this->redirect(['action' => 'dashboard']);
        }
        $user = $this->Users->find('all', ['conditions' => ['username' => $username]])->contain('Profiles')->first();
        $this->set('user', $user);
    }

    // Register
    public function register() {
        $this->viewBuilder()->setLayout('login');
        $user = $this->Users->newEntity();
        $profile = TableRegistry::get('profiles')->find('all', ['conditions' => ['code' => 'USER']])->first();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $password = $data['password'];
            $password_validate = $data['password_validation'];
            $data['active'] = 1;
            $data['profile_id'] = $profile->id;         
            $data['avatar'] = 'https://ui-avatars.com/api/?font-size=0.33&background=0D8ABC&color=fff&name='.$data['name'].'+'.$data['surname'];
            if ($password !== $password_validate){
                $this->Flash->error(__('Las contraseñas nuevas no coinciden.'));
                return $this->redirect(['action' => 'register']);
            }
            $user = $this->Users->patchEntity($user, $data);
            if ($this->Users->save($user)) {
                try {
                    $this->getMailer('Users')->send('welcome', [$user]);
                    $this->Flash->success(__('Te has registrado correctamente!'));
                    return $this->redirect(['action' => 'login']);
                } catch (Exception $e) {
                    $this->Flash->error(__('Hubo un error'));
                }
            }
        }
    }

    // LOGIN //
    public function login()
    {
        $this->viewBuilder()->setLayout('login');
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
        $this->viewBuilder()->setLayout('login');
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


    // Activar - Desactivar
    public function toggleActive($username = null)
    {        
        $user = $this->Users->find('all', ['conditions' => ['username' => $username]])->first();
        $deleted = false;

        if ($user->active == 0) {
            $user->active = 1;
        } else {
            $user->active = 0;
        }

        try {
            $deleted = $this->Users->save($user);
        } catch(\Exception $e) {
            
        }

        if ($deleted) {
            if ($user->active == 0) {
                $this->Flash->success(__('El usuario ha sido deshabilitado.'));
            } else {
                $this->Flash->success(__('El usuario ha sido habilitado.'));
            }
        } else {
            if ($user->active == 0) {
                $this->Flash->error(__('El usuario no ha podido ser habilitado. Por favor, intente nuevamente.'));
            } else {
                $this->Flash->error(__('El usuario no ha podido ser deshabilitado. Por favor, intente nuevamente.'));
            }
        }

        return $this->redirect(['action' => 'index']);
    }

    // Generar Contraseña
    private function generate_password($length = 8) {
       $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-?";
       $password = substr(str_shuffle($chars), 0, $length);
       return $password;
    }
}
