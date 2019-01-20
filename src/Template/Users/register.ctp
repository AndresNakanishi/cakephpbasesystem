<?php $title = 'System | Registrarse';
$this->assign('title', $title);?>

<div class="card card-register mx-auto mt-5 col-md-6">
  <div class="card-header"><?= $title; ?></div>
  <div class="card-body">
	<?= $this->Form->create(); ?>
		<?= $this->Form->input('username', [
		  'templates' => [
		  'label' => '',
		  'input' => '<div class="form-label-group"><input type="text" class="form-control" name="username" placeholder="Usuario" required/></div>',
		  'inputContainer' => '<div class="form-group">{{content}}</div>',
		  'inputContainerError' => '<div class="form-group d-flex justify-content-center align-items-center has-error">{{content}}{{error}}</div>',
		  ],
		]);?>
		<?= $this->Form->input('email', [
		  'templates' => [
		  'label' => '',
		  'input' => '<div class="form-label-group"><input type="email" class="form-control" name="email" placeholder="Email" required/></div>',
		  'inputContainer' => '<div class="form-group">{{content}}</div>',
		  'inputContainerError' => '<div class="form-group d-flex justify-content-center align-items-center has-error">{{content}}{{error}}</div>',
		  ],
		]);?>
		<?= $this->Form->input('name', [
		  'templates' => [
		  'label' => '',
		  'input' => '<div class="form-label-group"><input type="text" class="form-control" name="name" placeholder="Nombres" required/></div>',
		  'inputContainer' => '<div class="form-group">{{content}}</div>',
		  'inputContainerError' => '<div class="form-group d-flex justify-content-center align-items-center has-error">{{content}}{{error}}</div>',
		  ],
		]);?>
		<?= $this->Form->input('surname', [
		  'templates' => [
		  'label' => '',
		  'input' => '<div class="form-label-group"><input type="text" class="form-control" name="surname" placeholder="Apellido" required/></div>',
		  'inputContainer' => '<div class="form-group">{{content}}</div>',
		  'inputContainerError' => '<div class="form-group d-flex justify-content-center align-items-center has-error">{{content}}{{error}}</div>',
		  ],
		]);?>
		<?= $this->Form->input('password', [
		  'templates' => [
		  'label' => '',
		  'input' => '<div class="form-label-group"><input type="password" class="form-control" name="password" placeholder="Contraseña" required/></div>',
		  'inputContainer' => '<div class="form-group">{{content}}</div>',
		  'inputContainerError' => '<div class="form-group d-flex justify-content-center align-items-center has-error">{{content}}{{error}}</div>',
		  ],
		]);?>
		<?= $this->Form->input('password_validation', [
		  'templates' => [
		  'label' => '',
		  'input' => '<div class="form-label-group"><input type="password" class="form-control" name="password_validation" placeholder="Repita su Contraseña" required/></div>',
		  'inputContainer' => '<div class="form-group">{{content}}</div>',
		  'inputContainerError' => '<div class="form-group d-flex justify-content-center align-items-center has-error">{{content}}{{error}}</div>',
		  ],
		]);?>
      	<?= $this->Form->submit('Registrarse', ['class' => 'btn btn-block btn-primary']); ?>
  	<?= $this->Form->end(); ?>
	<?= $this->Flash->render() ?>
    <div class="text-center">
      <a class="d-block small mt-3" href="<?php echo $this->Url->build('/', true) ?>recover-password">¿Olvidaste tu contraseña?</a>
      <a class="d-block small" href="<?php echo $this->Url->build('/', true) ?>login">Ingresar</a>
    </div>
  </div>
</div>