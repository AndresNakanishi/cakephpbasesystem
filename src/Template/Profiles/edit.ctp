<?php $title = "Editar Perfil"; 
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
                <div class="form-group">
                    <?= $this->Form->control('access_level', [
                        'class' => 'form-control',
                        'type' => 'number',
                        'max' => 9,
                        'min' => 1,
                        'label' => [
                            'class' => 'control-label',
                            'text' => 'Nivel de Acceso:',
                        ],
                        'placeholder' => 'Máximo 9 - Mínimo 1',   
                        'required',
                        'autocomplete' => 'off'
                    ]) ?>
                </div>           
            </div>                            
            <div class="card-footer d-flex justify-content-between">
                <a href="<?= $this->Url->build('/', true) ?><?= strtolower($this->request->controller) ?>/" class="btn btn-fill btn-primary">Volver</a>
                <?= $this->Form->button(__('Guardar'), [
                    'class' => 'btn btn-fill btn-danger'
                ]) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
</div>