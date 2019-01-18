<?php $title = "Editar Usuario"; 
$this->assign('title', $title);?>

 <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h3><i class="fas fa-user-edit"></i> <?= $title; ?></h3>
            </div>
        </div>
    </div>
    <hr>
    <?= $this->Flash->render() ?>
    
    <div class="col-lg-12">

        <?= $this->Form->create($user) ?>        
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

        <div style="float: left;margin: 20px 0 30px;">
            <a href="<?= $this->Url->build('/', true) ?>users/" class="btn btn-lg btn-primary">Volver</a>
            <?= $this->Form->button(__('Guardar'), [
                'class' => 'btn btn-danger btn-lg'
            ]) ?>
        </div>
        
        <?= $this->Form->end() ?>
    </div>    

</div>