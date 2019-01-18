<?php $title = "Usuarios"; 
$this->assign('title', $title . ' | ' . $user->username);?>

 <div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12">
	        <div class="page-header">
	        	<h3><i class="fas fa-address-card"></i> Cambiar Información - <?= $user->username; ?></h3>
	        </div>
	    </div>
	</div>
	<?= $this->Flash->render() ?>
	
	<div class="col-lg-12">
        <?= $this->Form->create($user) ?>
          
        <div class="form-group">
            <?= $this->Form->control('old_password', [
                'class' => 'form-control',
                'label' => [
                    'class' => 'control-label',
                    'text' => 'Contraseña Anterior:'
                ],
                'required',
                'autocomplete' => 'off',
                'type' => 'password'
            ]) ?>
        </div>
        

        <div class="form-group">
            <?= $this->Form->control('new_password', [
                'class' => 'form-control',
                'label' => [
                    'class' => 'control-label',
                    'text' => 'Contraseña Nueva:'
                ],
                'required',
                'autocomplete' => 'off',
                'type' => 'password'
            ]) ?>
        </div>

        <div class="form-group">
            <?= $this->Form->control('new_password_validation', [
                'class' => 'form-control',
                'label' => [
                    'class' => 'control-label',
                    'text' => 'Repetir la Contraseña Nueva:'
                ],
                'required',
                'autocomplete' => 'off',
                'type' => 'password'
            ]) ?>
        </div>

        <div style="float: left;margin: 20px 0 30px;">
        	<a href="<?= $this->Url->build('/', true) ?>users/config/<?= $this->request->session()->read('Auth.User.username')?>" class="btn btn-lg btn-primary">Volver</a>
            <?= $this->Form->button(__('Guardar'), [
                'class' => 'btn btn-danger btn-lg'
            ]) ?>
        </div>
        
        <?= $this->Form->end() ?>
    </div>
</div>