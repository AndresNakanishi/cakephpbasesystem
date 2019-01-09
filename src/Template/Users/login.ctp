<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Sign In</h5>

          <?= $this->Form->create(); ?>
          <form class="form-signin">
            <div class="form-label-group">
              <label for="inputEmail">Usuario:</label>
              <?= $this->Form->input('username', ['label' => false]); ?>
            </div>

            <div class="form-label-group">
              <label for="inputPassword">Contraseña: </label>
              <?= $this->Form->input('password',['type' => 'password', 'label' => false]); ?>
            </div>

            <div class="custom-control custom-checkbox mb-3">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">Remember password</label>
            </div>
            <?= $this->Form->submit('Ingresar', ['class' => 'btn btn-primary']); ?>

            <?= $this->Form->end(); ?>
        </div>
      </div>
    </div>
  </div>
</div>