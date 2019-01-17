<?php $title = "Usuarios"; 
$this->assign('title', $title . ' | ' . $user->username);?>

 <div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12">
	        <div class="page-header">
	        	<h3><i class="fas fa-address-card"></i> Perfil - <?= $user->username; ?></h3>
	        </div>
	    </div>
	</div>
	<?= $this->Flash->render() ?>
	<div class="row">
	    <div class="col-lg-12" style="display:flex; justify-content: flex-end;">
	        <a href="<?= $this->Url->build('/', true) ?>users/configData/<?= $this->request->session()->read('Auth.User.id')?>" class="btn btn-lg btn-primary" style="margin-right: 10px;">Cambiar Mi Información</a>
	        <a href="<?= $this->Url->build('/', true) ?>users/configPass/<?= $this->request->session()->read('Auth.User.id')?>" class="btn btn-lg btn-primary">Cambiar Contraseña</a>
	    </div>
	</div>
	<br>
	<div class="row">
	    <div class="col-lg-12">
	        <table class="table table-bordered">
	            <thead class="bg-primary text-white">
	                <th colspan="2">Tu Información</th>
	            </thead>
	            <tbody>
	                <tr>
	                    <th>Perfil:</th>
	                    <td><?= $user->profile->name ?></td>
	                </tr>
	                <tr>
	                    <th>Usuario:</th>
	                    <td><?= $user->username ?></td>
	                </tr>
	                <tr>
	                    <th>Nombre:</th>
	                    <td><?= $user->name ?></td>
	                </tr>
	                <tr>
	                    <th>Apellido:</th>
	                    <td><?= $user->surname ?></td>
	                </tr>
	                <tr>
	                    <th>Email:</th>
	                    <td><?= $user->email ?></td>
	                </tr>
	            </tbody>
	        </table>
	    </div>
	</div>
</div>