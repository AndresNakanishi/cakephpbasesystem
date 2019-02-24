<?php $title = "Editar Usuario"; 
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
            <?= $this->Form->create($user) ?>
            <div class="card-body">                    
                <div class="form-group">
                    <?= $this->Form->control('username', [
                        'class' => 'form-control',
                        'label' => [
                            'class' => 'control-label',
                            'text' => 'Usuario:',
                        ],
                        'required',
                        'autocomplete' => 'off'
                    ]) ?>
                </div>        
                <div class="form-group">
                    <?= $this->Form->control('name', [
                        'class' => 'form-control',
                        'label' => [
                            'class' => 'control-label',
                            'text' => 'Nombre:',
                        ],
                        'required',
                        'autocomplete' => 'off'
                    ]) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('surname', [
                        'class' => 'form-control',
                        'label' => [
                            'class' => 'control-label',
                            'text' => 'Apellido:',
                        ],
                        'required',
                        'autocomplete' => 'off'
                    ]) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('profile_id', [
                        'options' => $profiles,
                        'empty' => '-',
                        'class' => 'form-control',
                        'label' => [
                            'class' => 'control-label',
                            'text' => 'Perfil:'
                        ],
                        'required',
                        'autocomplete' => 'off',
                        'id' => 'profiles_id'
                    ]) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('email', [
                        'class' => 'form-control',
                        'label' => [
                            'class' => 'control-label',
                            'text' => 'Email:',
                        ],
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