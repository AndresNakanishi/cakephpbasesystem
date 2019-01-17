<?php $title = "Usuarios"; 
$this->assign('title', $title);?>

 <div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12">
	        <div class="page-header">
	        	<h3><i class="fas fa-users"></i> <?= $title; ?></h3>
	        </div>
	    </div>
	</div>
	<div class="card mt-4">
		<div class="card-header bg-dark text-white">
		   <strong>Usuarios</strong>
		</div>
		<div class="card-body">
		  <div class="table-responsive">
		    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
		      <thead class="thead-dark">
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
	</div>

</div>