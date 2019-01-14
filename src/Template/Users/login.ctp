<div class="row d-flex justify-content-center align-items-center" style="min-height: 100vh;">
      <div class="col-md-6">
          <?= $this->Flash->render() ?>
          <div class="card">
              <div class="card-header">Login</div>

              <div class="card-body">
                <?= $this->Form->create(); ?>
                  <?= $this->Form->input('username', [
                      'label' => ['text' => 'Usuario','class' => 'col-md-4'],
                      'templates' => [
                      'label' => '<label class="col-md-4 control-label text-right mb-0" for="username">Usuario:</label>',
                      'input' => '<div class="col-md-6"><input type="text" class="form-control" name="username" placeholder="Usuario" required/></div>',
                      'inputContainer' => '<div class="form-group d-flex justify-content-center align-items-center">{{content}}</div>',
                      'inputContainerError' => '<div class="form-group d-flex justify-content-center align-items-center has-error">{{content}}{{error}}</div>',
                      ],
                  ]);?>
                  <?= $this->Form->input('password', [
                      'label' => ['text' => 'Contraseña','class' => 'col-md-4'],
                      'templates' => [
                      'label' => '<label class="col-md-4 control-label text-right mb-0" for="password">Contraseña:</label>',
                      'input' => '<div class="col-md-6"><input type="password" class="form-control" name="password" placeholder="Contraseña" required/></div>',
                      'inputContainer' => '<div class="form-group d-flex justify-content-center align-items-center">{{content}}</div>',
                      'inputContainerError' => '<div class="form-group d-flex justify-content-center align-items-center has-error">{{content}}{{error}}</div>',
                      ],
                  ]);?>
                  <div class="form-group">
                    <div class="col-md-8 offset-md-5">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Recuerdame
                            </label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <div class="col-md-8 offset-md-2">
                          <?= $this->Form->submit('Ingresar', ['class' => 'btn btn-block btn-primary']); ?>
                      </div>
                  </div>

                  <?= $this->Form->end(); ?>

              </div>

          </div>
      </div>
  </div>