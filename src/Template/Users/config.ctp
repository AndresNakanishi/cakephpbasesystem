<?php $this->assign('title', $user->username);?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
	<div class="row">
		<div class="col-md-8">
			<div class="card">
	            <div class="card-header">
	                <h5 class="title">Edita tu información</h5>
	            </div>
            	<?= $this->Form->create($user, ['url' => ['action' => 'configData',$user->username]]) ?>
	            <div class="card-body">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="form-group">
	                            <label>Perfil</label>
	                            <input type="text" class="form-control" value="<?= $user->profile->name ?>" disabled>
	                        </div>
	                    </div>
	                </div>	                
					<div class="row">
	                    <div class="col-md-12">
	                        <div class="form-group">
	                            <label>Username</label>
	                            <input type="text" class="form-control" value="<?= $user->username ?>" disabled>
	                        </div>
	                    </div>
	                </div>	
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="form-group">
	                            <label>Email</label>
	                            <input type="email" name="email" class="form-control" value="<?= $user->email ?>" placeholder="Ingresa el Email" required>
	                        </div>
	                    </div>
	                </div>	
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="form-group">
	                            <label>Nombres</label>
	                            <input type="text" name="name" class="form-control" value="<?= $user->name ?>" placeholder="Ingresa tu Nombre" required>
	                        </div>
	                    </div>
	                </div>	
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="form-group">
	                            <label>Apellido</label>
	                            <input type="text" name="surname" class="form-control" value="<?= $user->surname ?>" placeholder="Ingresa tu Apellido" required>
	                        </div>
	                    </div>
	                </div>	
	            </div>
	            <div class="card-footer d-flex justify-content-between">
	            	<?= $this->Form->button(__('Cambiar'), [
		                'class' => 'btn btn-danger btn-lg'
		            ]) ?>
	            	<a href="<?= $this->Url->build('/', true) ?>users/configPass/<?= $authUser->username  ?>" class="btn btn-lg btn-primary">Cambiar Contraseña</a>
	            </div>
				<?= $this->Form->end() ?>
	        </div>
		</div>
		<div class="col-md-4">
			<div class="card card-user">
			    <div class="image">
			        <img src="<?= $this->Url->build('/', true) ?>img/header.jpg" alt="...">
			    </div>
			    <div class="card-body">
			        <div class="author">
		            	<img class="avatar border-gray" src="<?= $user->avatar; ?>" alt="User Avatar">
		                <h5 class="title"><?= $authUser->username; ?></h5>
			            <p class="description">
			                <?= $authUser->name; ?> <?= $authUser->surname; ?>
			            </p>
			        </div>
			        <p class="description text-center">
			            "Lamborghini Mercy <br>
			            Your chick she so thirsty <br>
			            I'm in that two seat Lambo"
			        </p>
			    </div>
			    <hr>
			    <div class="button-container">
			        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
			            <i class="fab fa-facebook-square"></i>
			        </button>
			        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
			            <i class="fab fa-twitter"></i>
			        </button>
			        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
			            <i class="fab fa-google-plus-square"></i>
			        </button>
			    </div>
			</div>
		</div>
	</div>
</div>