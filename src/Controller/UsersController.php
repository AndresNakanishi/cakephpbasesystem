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
        $this->viewBuilder()->setLayout('default');
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
                        //envío el mail
                        $email = new Email();
                        $email->viewVars(['password' => $newpassword]);
                        $email->viewVars(['username' => $user->username]);
                        $email->viewVars(['name' => $user->name]);
                        $email->profile('default');
                        $email->template('recovery_password')
                            ->emailFormat('html')
                            ->to($user->email)
                            ->subject('SAEC - Recuperar Contraseña')
                            ->send();
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


    private function generate_password($length = 8) {
       $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-?";
       $password = substr(str_shuffle($chars), 0, $length);
       return $password;
    }
}
