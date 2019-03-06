<?php $title = "Publicaciones"; 
$this->assign('title', $title);?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="card">
    <div class="card-header d-flex justify-content-between">
      <h4 class="card-title">
        <?= $title; ?>
      </h4>
      <a href="<?= $this->Url->build('/', true) ?><?= strtolower($this->request->controller) ?>/add" class="btn btn-primary btn-round btn-icon" rel="tooltip" title="Escribe una nueva publicación" data-placement="left"><i class="fas fa-plus"></i></a>
    </div>
    <div class="card-body">
      <div class="toolbar"></div>
      <div id="datatable_wrapper" class="dataTableswrapper dt-bootstrap4">
        <div class="row">
          <div class="col-sm-12">
            <table id="datatable" class="table table-striped table-bordered dataTable dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
              <thead>
                <tr role="row">
                    <th>Título</th>
                    <th>Categoría</th>
                    <th>Publicado</th>
                    <th>Autor</th>
                    <th>Estado</th>
                  <th class="disabled-sorting text-right sorting_desc">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($posts as $post): ?>
                  <tr role="row">
                    <td><?= $post->title; ?></td>
                    <td><?= $post->category->name; ?></td>
                    <td><?= date('Y-m-d',strtotime($post->published_at)); ?></td>
                    <td><?= $post->user->username; ?></td>
                    <td><?= $post->state; ?></td>
                    <td class="text-right">
                      <a href="<?= $this->Url->build('/', true) ?><?= $post->url ?>" class="btn btn-round btn-info btn-icon btn-sm text-white" rel="tooltip" title="Ver Publicación" data-placement="left" target="_blank"><i class="fas fa-eye"></i></a>
                      <a href="<?= $this->Url->build('/', true) ?><?= strtolower($this->request->controller) ?>/edit/<?= $post->id; ?>" class="btn btn-round btn-warning btn-icon btn-sm" rel="tooltip" title="Editar" data-placement="left"><i class="fas fa-edit"></i></a>
                      <a onclick="system.showSwal('Eliminar','¿Eliminar la publicación '+'<?= $post->title ?>'+' ?','delete', '<?= $this->Url->build('/', true) ?><?= strtolower($this->request->controller) ?>/delete/<?= $post->id; ?>')" class="btn btn-round btn-danger btn-icon btn-sm text-white" rel="tooltip" title="Eliminar" data-placement="left"><i class="fas fa-trash"></i></a>
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