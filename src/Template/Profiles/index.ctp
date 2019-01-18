<?php $title = "Perfiles"; 
$this->assign('title', $title);?>

 <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h3><i class="fas fa-address-card"></i> <?= $title; ?></h3>
            </div>
        </div>
    </div>
    <?= $this->Flash->render() ?>
    <div class="row">
      <div class="card mt-4 col-lg-12">
          <div class="card-header bg-dark text-white">
             <strong>Perfiles</strong>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                  <tr>
                    <th>Perfil</th>
                    <th class="text-center">Código</th>
                    <th class="text-center">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($profiles as $profile): ?>
                      <tr>
                          <td><?= $profile->name; ?></td>
                          <td class="text-center"><?= $profile->code; ?></td>
                          <td class="text-center">
                            <?= $this->Html->link(
                                'Editar', 
                                ['action' => 'edit', $profile->code],
                                ['class' => 'btn btn-sm btn-primary']
                            ) ?>
                          </td>
                      </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 mt-4 mb-4 d-flex justify-content-start">
        <a href="<?= $this->Url->build('/', true) ?>profiles/add" class="btn btn-lg btn-primary"><i class="fas fa-plus-circle"></i> Agregar Perfil</a>
      </div>
    </div>
</div>