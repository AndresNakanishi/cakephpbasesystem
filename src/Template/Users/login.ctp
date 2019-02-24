<?php $title = 'Login';
$this->assign('title', $title);?>
<div class="page-header-image" style="background-image:url(img/login.jpg)"></div>
<div class="content">
  <div class="container">
    <div class="col-md-4 ml-auto mr-auto">
      <div class="card card-login card-plain">
        <?= $this->Form->create(); ?>
          <div class="card-header text-center">
            <div class="logo-container">
              <img src="img/now-logo.png" alt="">
            </div>
          </div>
          <div class="card-body">
            <?= $this->Form->input('username', [
                'templates' => [
                'label' => '',
                'input' => '<div class="input-group-prepend"><span style="height:38px" class="input-group-text"><i class="fas fa-user"></i></span></div><input type="text" class="form-control" name="username" placeholder="Usuario" required/>',
                'inputContainer' => '<div class="input-group no-border input-lg">{{content}}</div>',
                ],
            ]);?>
            <?= $this->Form->input('username', [
                'templates' => [
                'label' => '',
                'input' => '<div class="input-group-prepend"><span style="height:38px" class="input-group-text"><i class="fas fa-lock"></i></span></div><input type="password" class="form-control" name="password" placeholder="Contraseña" required/>',
                'inputContainer' => '<div class="input-group no-border input-lg">{{content}}</div>',
                ],
            ]);?>
          </div>
          <div class="card-footer text-center">
            <?= $this->Form->submit('Ingresar', ['class' => 'btn btn-info btn-round btn-lg btn-block']); ?>
            <div class="pull-left">
              <h6>
                <a class="link" href="<?php echo $this->Url->build('/', true) ?>register">Crea una cuenta</a>
              </h6>
            </div>
            <div class="pull-right">
              <h6>
                <a class="link" href="<?php echo $this->Url->build('/', true) ?>recover-password">¿Olvidaste tu contraseña?</a>
              </h6>
            </div>
        <?= $this->Form->end(); ?>
        </div>
      </div>
    </div>
  </div>
</div>



