<?php $title = 'Recuperar Contraseña';
$this->assign('title', $title);?>
<div class="page-header-image" style="background-image:url(img/login.jpg)"></div>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mr-auto ml-auto">
            	<div class="card">
					<div class="card-header text-black">
						<h4>¿Olvidó su contraseña?</h4>
					</div>
					<div class="card-body">
					  <div class="text-center text-black mb-4">
					    <h5>Ingrese su correo y le enviaremos su nueva contraseña.</h5>
					  </div>
					<?= $this->Form->create(); ?>
					    <?= $this->Form->input('email', [
			                'templates' => [
			                'label' => '',
			                'input' => '<div class="input-group-prepend"><span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span></div><input type="email" class="form-control" name="email" placeholder="Email" required/>',
			                'inputContainer' => '<div class="input-group">{{content}}</div>',
			                ],
			            ]);?>
				      	<?= $this->Form->submit('Recuperar Contraseña', ['class' => 'btn btn-block btn-primary']); ?>
			  			<?= $this->Form->end(); ?>
						<div class="text-center">
							<a class="small mt-3" href="<?php echo $this->Url->build('/', true) ?>register">¿No tiene una cuenta?</a>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>