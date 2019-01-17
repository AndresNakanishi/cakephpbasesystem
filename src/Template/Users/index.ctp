<?php $title = "Usuarios"; 
$this->assign('title', $title);?>

 <div class="container-fluid">
	<h2><i class="fas fa-users"></i> <?= $title; ?></h2>
	<hr>
	<div class="card mt-4">
		<div class="card-header">
		   <strong>Usuarios</strong>
		</div>
		<div class="card-body">
		  <div class="table-responsive">
		    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		      <thead>
		        <tr>
		          <th>Nombre</th>
		          <th>Apellido</th>
		          <th>Email</th>
		          <th class="text-center">Perfil</th>
		          <th class="text-center">Activo</th>
		          <th class="text-center">Acciones</th>
		        </tr>
		      </thead>
		      <tbody>
		        <?php foreach ($users as $user): ?>
		        	<tr>
		        		<td><?= $user->name; ?></td>
		        		<td><?= $user->surname; ?></td>
		        		<td><?= $user->email; ?></td>
		        		<td class="text-center"><?= $user->profile->name; ?></td>
		        		<td class="text-center">
							<?php if ($user->active): ?>
								<span class="badge badge-pill badge-success">Activo <i class="far fa-check-circle"></i></span>
							<?php else: ?>
								<span class="badge badge-pill badge-danger">Inactivo <i class="far fa-times-circle"></i></span>
							<?php endif ?>
		        		</td>
		        		<td class="text-center">Acciones Varias</td>
		        	</tr>
		        <?php endforeach ?>
		      </tbody>
		    </table>
		  </div>
		</div>
	<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
	</div>

</div>