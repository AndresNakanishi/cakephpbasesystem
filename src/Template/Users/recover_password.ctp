<?php $title = 'System | Recuperar Contraseña';
$this->assign('title', $title);?>


<div class="card card-login mx-auto mt-5 col-md-4">
	<div class="card-header"><?= $title; ?></div>
	<div class="card-body">
	  <div class="text-center mb-4">
	    <h4>¿Olvidó su contraseña?</h4>
	    <p>Ingrese su correo y le enviaremos su nueva contraseña.</p>
	  </div>
	  <?= $this->Form->create(); ?>
	    <?= $this->Form->input('email', [
	          'templates' => [
	          'label' => '',
	          'input' => '<div class="form-label-group"><input type="email" class="form-control" name="email" placeholder="Email" required/></div>',
	          'inputContainer' => '<div class="form-group">{{content}}</div>',
	          'inputContainerError' => '<div class="form-group d-flex justify-content-center align-items-center has-error">{{content}}{{error}}</div>',
	          ],
	      ]);?>
      	<?= $this->Form->submit('Recuperar Contraseña', ['class' => 'btn btn-block btn-primary']); ?>
	  <?= $this->Form->end(); ?>
      <?= $this->Flash->render() ?>
	  <div class="text-center">
	    <a class="d-block small mt-3" href="<?php echo $this->Url->build('/', true) ?>register">¿No tiene una cuenta?</a>
	    <a class="d-block small" href="<?php echo $this->Url->build('/', true) ?>login">Ingresar</a>
	  </div>
	</div>
</div>