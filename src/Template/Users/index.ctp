<?php $title = "Usuarios"; 
$this->assign('title', $title);?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
	<div class="card">
		<div class="card-header d-flex justify-content-between">
			<h4 class="card-title">
				<?= $title; ?>
			</h4>
			<a href="<?= $this->Url->build('/', true) ?>users/add" class="btn btn-primary btn-round btn-icon" rel="tooltip" title="Nuevo Usuario" data-placement="left"><i class="fas fa-user-plus"></i></a>
		</div>
		<div class="card-body">
			<div class="toolbar"></div>
			<div id="datatable_wrapper" class="dataTableswrapper dt-bootstrap4">
				<div class="row">
					<div class="col-sm-12">
						<table id="datatable" class="table table-striped table-bordered dataTable dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
							<thead>
								<tr role="row">
									<th>Usuario</th>
									<th>Email</th>
									<th class="text-center">Perfil</th>
									<th class="text-center">Activo</th>
									<th class="disabled-sorting text-right sorting_desc">Acciones</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($users as $user): ?>
						        	<tr role="row">
						        		<td><?= $user->username; ?></td>
						        		<td><?= $user->email; ?></td>
						        		<td class="text-center"><?= $user->profile->name; ?></td>
						        		<td class="text-center">
											<?php if ($user->active): ?>
												<span class="badge badge-pill badge-primary">Activo <i class="far fa-check-circle"></i></span>
											<?php else: ?>
												<span class="badge badge-pill badge-danger">Inactivo <i class="far fa-times-circle"></i></span>
											<?php endif ?>
						        		</td>
						        		<td class="text-right">
					                        <?php if ($user->active): ?>
					                        	<?= $this->Form->postLink(
					                                '<i class="fas fa-ban"></i>', 
					                                ['action' => 'toggleActive', $user->username], 
					                                [
					                                	'rel' => 'tooltip',
					                                	'title' => 'Deshabilitar',
					                                	'data-placement' => 'left',
        												'escape' => false,
					                                    'confirm' => __('¿Está seguro que desea deshabilitar al usuario {0}?', $user->username),
					                                    'class' => 'btn btn-round btn-danger btn-icon btn-sm'
					                                ]
					                            ) ?>
					                       	<?php else: ?>
					                        	<?= $this->Form->postLink(
					                                '<i class="far fa-thumbs-up"></i>', 
					                                ['action' => 'toggleActive', $user->username], 
					                                [
					                                	'rel' => 'tooltip',
					                                	'title' => 'Habilitar',
					                                	'data-placement' => 'left',
        												'escape' => false,
					                                    'confirm' => __('¿Está seguro que desea habilitar al usuario {0}?', $user->username),
					                                    'class' => 'btn btn-round btn-info btn-icon btn-sm'
					                                ]
					                            ) ?>
					                        <?php endif ?>
					                        <a href="<?= $this->Url->build('/', true) ?>users/edit/<?= $user->username; ?>" class="btn btn-round btn-warning btn-icon btn-sm" rel="tooltip" title="Editar" data-placement="left"><i class="fas fa-edit"></i></a>
						        		</td>
						        	</tr>
						        <?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>