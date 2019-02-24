<?php $title = "Agregar Perfil"; 
$this->assign('title', $title);?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?= $title; ?></h4>
            </div>            
            <?= $this->Form->create($profile) ?>
            <div class="card-body">                    
                <div class="form-group">
                    <?= $this->Form->control('code', [
                        'class' => 'form-control',
                        'label' => [
                            'class' => 'control-label',
                            'text' => 'Código:'
                        ],
                        'placeholder' => 'Máximo de 8 Letras',   
                        'required',
                        'autocomplete' => 'off'
                    ]) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('name', [
                        'class' => 'form-control',
                        'label' => [
                            'class' => 'control-label',
                            'text' => 'Nombre del Perfil:',
                        ],
                        'placeholder' => 'Ingrese el nombre del perfil',   
                        'required',
                        'autocomplete' => 'off'
                    ]) ?>
                </div>           
            </div>                            
            <div class="card-footer d-flex justify-content-between">
                <a href="<?= $this->Url->build('/', true) ?><?= strtolower($this->request->controller) ?>/" class="btn btn-fill btn-primary">Volver</a>
                <?= $this->Form->button(__('Agregar'), [
                    'class' => 'btn btn-fill btn-danger'
                ]) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
</div>