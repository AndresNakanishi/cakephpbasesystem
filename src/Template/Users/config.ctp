<?php $this->assign('title', $user->username);?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
	<div class="row d-flex justify-content-center">
		<div class="col-md-8">
			<div class="card">
	            <div class="card-header">
	                <h5 class="title">Edita tu información</h5>
	            </div>
            	<?= $this->Form->create($user, ['type' => 'file', 'url' => ['action' => 'configData',$user->username]]) ?>
	            <div class="card-body">
	            	<div class="row">
		            	<div class="col-md-6 d-flex flex-column align-items-center">
	                      <label class="card-title">Avatar</label>
	                      <div class="fileinput text-center fileinput-new" data-provides="fileinput">
	                          <div class="fileinput-new thumbnail">
	                              <img src="<?= $user->avatar ?>" alt="...">
	                          </div>
	                          <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
	                          <div>
	                              <span class="btn btn-rose btn-round btn-file">
	                                  <span class="fileinput-new">Subir Foto</span>
	                                  <span class="fileinput-exists">Cambiarla</span>
	                                  <input type="file" name="avatar">
	                              </span>
	                              <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Eliminarla</a>
	                          </div>
	                      </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <label>Perfil</label>
	                            <input type="text" class="form-control" value="<?= $user->profile->name ?>" disabled>
	                        </div>
	                        <div class="form-group">
	                            <label>Username</label>
	                            <input type="text" class="form-control" value="<?= $user->username ?>" disabled>
	                        </div>
	                        <div class="form-group">
	                            <label>Email</label>
	                            <input type="email" name="email" class="form-control" value="<?= $user->email ?>" placeholder="Ingresa el Email" required>
	                        </div>
	                        <div class="form-group">
	                            <label>Nombres</label>
	                            <input type="text" name="name" class="form-control" value="<?= $user->name ?>" placeholder="Ingresa tu Nombre" required>
	                        </div>
	                        <div class="form-group">
	                            <label>Apellido</label>
	                            <input type="text" name="surname" class="form-control" value="<?= $user->surname ?>" placeholder="Ingresa tu Apellido" required>
	                        </div>
	                    </div>
	                </div>	
	            </div>
	            <div class="card-footer d-flex justify-content-between">
	            	<?= $this->Form->button(__('Cambiar'), [
		                'class' => 'btn btn-sm btn-danger btn-lg'
		            ]) ?>
	            	<a href="<?= $this->Url->build('/', true) ?>users/configPass/<?= $authUser->username  ?>" class="btn btn-sm btn-primary">Cambiar Contraseña</a>
	            </div>
				<?= $this->Form->end() ?>
	        </div>
		</div>
	</div>
</div>