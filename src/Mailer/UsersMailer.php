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

    public function welcome($user, $newpassword){
    	//envío el mail
        $this->to($user->email)
        ->transport('mailjet')
        ->emailFormat('html')
        ->template('recovery_password')
        ->viewVars(['password' => $newpassword])
        ->viewVars(['username' => $user->username])
        ->viewVars(['name' => $user->name])
        ->subject('SAEC - Recuperar Contraseña');
    }
}
