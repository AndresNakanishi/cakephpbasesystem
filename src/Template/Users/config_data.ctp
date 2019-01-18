<?php $title = "Usuarios"; 
$this->assign('title', $title . ' | ' . $user->username);?>

 <div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12">
	        <div class="page-header">
	        	<h3><i class="fas fa-user-circle"></i> Cambiar Información - <?= $user->username; ?></h3>
	        </div>
	    </div>
	</div>
	<?= $this->Flash->render() ?>

    <div class="col-lg-12">

        <?= $this->Form->create($user) ?>
		
		<div class="form-group">
            <?= $this->Form->control('username', [
                'class' => 'form-control',
                'label' => [
                    'class' => 'control-label',
                    'text' => 'Usuario:'
                ],
                'required',
                'autocomplete' => 'off',
                'value' => $user->username,
                'readonly'
            ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('name', [
                'class' => 'form-control',
                'label' => [
                    'class' => 'control-label',
                    'text' => 'Nombre:'
                ],
                'required',
                'autocomplete' => 'off',
                'value' => $user->name
            ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('surname', [
                'class' => 'form-control',
                'label' => [
                    'class' => 'control-label',
                    'text' => 'Apellido:'
                ],
                'required',
                'autocomplete' => 'off',
                'value' => $user->surname
            ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('email', [
                'class' => 'form-control',
                'label' => [
                    'class' => 'control-label',
                    'text' => 'Email:'
                ],
                'required',
                'autocomplete' => 'off',
                'type' => 'email',
                'value' => $user->email
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