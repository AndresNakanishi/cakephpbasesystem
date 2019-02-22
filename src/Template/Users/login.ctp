<?php $title = 'System | Login';
$this->assign('title', $title);?>
<div class="card card-login mx-auto mt-5 col-md-4">
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
      <?= $this->Form->input('password', [
          'templates' => [
          'label' => '',
          'input' => '<div class="form-label-group"><input type="password" class="form-control" name="password" placeholder="Contraseña" required/></div>',
          'inputContainer' => '<div class="form-group">{{content}}</div>',
          'inputContainerError' => '<div class="form-group d-flex justify-content-center align-items-center has-error">{{content}}{{error}}</div>',
          ],
      ]);?>
      <?= $this->Flash->render() ?>
      <div class="form-group">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me">
            Recordar Contraseña
          </label>
        </div>
      </div>
      <?= $this->Form->submit('Ingresar', ['class' => 'btn btn-block btn-primary']); ?>
    <?= $this->Form->end(); ?>
    <div class="text-center">
      <a class="d-block small mt-3" href="<?php echo $this->Url->build('/', true) ?>register">Crea una cuenta</a>
      <a class="d-block small" href="<?php echo $this->Url->build('/', true) ?>recover-password">¿Olvidaste tu contraseña?</a>
    </div>
  </div>
</div>