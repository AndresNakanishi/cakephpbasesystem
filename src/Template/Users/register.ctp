<?php $title = 'Registro';
$this->assign('title', $title);?>
<div class="page-header-image" style="background-image:url(img/login.jpg)"></div>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mr-auto ml-auto">
                <div class="card card-signup">
                    <div class="card-body">
                        <h4 class="card-title text-center">Registro</h4>

						<?= $this->Form->create(); ?>
                            <?= $this->Form->input('username', [
				                'templates' => [
				                'label' => '',
				                'input' => '<div class="input-group-prepend"><span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span></div><input type="text" class="form-control" name="username" placeholder="Usuario" required/>',
				                'inputContainer' => '<div class="input-group">{{content}}</div>',
				                ],
				            ]);?>
				            <?= $this->Form->input('email', [
				                'templates' => [
				                'label' => '',
				                'input' => '<div class="input-group-prepend"><span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span></div><input type="email" class="form-control" name="email" placeholder="Email" required/>',
				                'inputContainer' => '<div class="input-group">{{content}}</div>',
				                ],
				            ]);?>
				            <?= $this->Form->input('name', [
				                'templates' => [
				                'label' => '',
				                'input' => '<div class="input-group-prepend"><span class="input-group-text"><i class="now-ui-icons text_caps-small"></i></span></div><input type="text" class="form-control" name="name" placeholder="Nombre" required/>',
				                'inputContainer' => '<div class="input-group">{{content}}</div>',
				                ],
				            ]);?>
				            <?= $this->Form->input('surname', [
				                'templates' => [
				                'label' => '',
				                'input' => '<div class="input-group-prepend"><span class="input-group-text"><i class="now-ui-icons text_caps-small"></i></span></div><input type="text" class="form-control" name="surname" placeholder="Apellido" required/>',
				                'inputContainer' => '<div class="input-group">{{content}}</div>',
				                ],
				            ]);?>
				            <?= $this->Form->input('password', [
				                'templates' => [
				                'label' => '',
				                'input' => '<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-lock"></i></span></div><input type="password" class="form-control" name="password" placeholder="Contraseña" required/>',
				                'inputContainer' => '<div class="input-group">{{content}}</div>',
				                ],
				            ]);?>
				            <?= $this->Form->input('password_validation', [
				                'templates' => [
				                'label' => '',
				                'input' => '<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-lock"></i></span></div><input type="password" class="form-control" name="password_validation" placeholder="Confirme la contraseña" required/>',
				                'inputContainer' => '<div class="input-group">{{content}}</div>',
				                ],
				            ]);?>
                            <div class="card-footer text-center d-flex flex-column">
      							<?= $this->Form->submit('Registrarse', ['class' => 'btn btn-primary btn-block btn-round btn-lg']); ?>
      							<div class="text-center">
									<a class="small text-black" href="<?php echo $this->Url->build('/', true) ?>recover-password">¿Olvidaste tu contraseña?</a>
								</div>
                            </div>
                        <?= $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>