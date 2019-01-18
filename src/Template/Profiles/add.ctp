<?php $title = "Agregar Perfil"; 
$this->assign('title', $title);?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h3><i class="fas fa-plus-circle"></i> <?= $title; ?></h3>
            </div>
        </div>
    </div>
    <hr>
    <?= $this->Flash->render() ?>
    
    <div class="col-lg-12">
        <?= $this->Form->create($profile) ?>        
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

        <div style="float: left;margin: 20px 0 30px;">
            <a href="<?= $this->Url->build('/', true) ?>profiles/" class="btn btn-lg btn-primary">Volver</a>
            <?= $this->Form->button(__('Agregar'), [
                'class' => 'btn btn-danger btn-lg'
            ]) ?>
        </div>
        
        <?= $this->Form->end() ?>
    </div>
</div>