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

    public function recover($user, $newpassword){
    	//envío el mail
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
