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
    <div class="card mt-4">
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
                        <td class="text-center">Acciones Varias</td>
                    </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>

</div>