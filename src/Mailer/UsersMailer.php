<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * Users mailer.
 */
class UsersMailer extends Mailer
{

    /**
     * Mailer's name.
     *
     * @var string
     */
    static public $name = 'Users';

    public function welcome($user, $password){
        $this->to($user->email)
        ->profile('mailer')
        ->emailFormat('html')
        ->template('welcome')
        ->layout('default')
        ->viewVars(['user' => $user])
        ->viewVars(['password' => $password])
        ->subject('¡Bienvenido al Sistema!');
    }

    public function recover($user, $newpassword){
        $this->to($user->email)
        ->profile('mailer')
        ->emailFormat('html')
        ->template('recovery_password')
        ->layout('default')
        ->viewVars(['password' => $newpassword])
        ->viewVars(['username' => $user->username])
        ->viewVars(['name' => $user->name])
        ->subject('Recuperar Contraseña');
    }
}
