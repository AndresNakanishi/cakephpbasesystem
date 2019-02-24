<?php $title = "Cambiar Contraseña"; 
$this->assign('title', $title . ' | ' . $user->username);?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Cambiar tu contraseña</h5>
                </div>
                <?= $this->Form->create($user) ?>
                <div class="card-body">
                    <div class="form-group">
                        <?= $this->Form->control('old_password', [
                            'class' => 'form-control',
                            'label' => [
                                'class' => 'control-label',
                                'text' => 'Contraseña Anterior:'
                            ],
                            'required',
                            'autocomplete' => 'off',
                            'type' => 'password'
                        ]) ?>
                    </div>
                    

                    <div class="form-group">
                        <?= $this->Form->control('new_password', [
                            'class' => 'form-control',
                            'label' => [
                                'class' => 'control-label',
                                'text' => 'Contraseña Nueva:'
                            ],
                            'required',
                            'autocomplete' => 'off',
                            'type' => 'password'
                        ]) ?>
                    </div>

                    <div class="form-group">
                        <?= $this->Form->control('new_password_validation', [
                            'class' => 'form-control',
                            'label' => [
                                'class' => 'control-label',
                                'text' => 'Repetir la Contraseña Nueva:'
                            ],
                            'required',
                            'autocomplete' => 'off',
                            'type' => 'password'
                        ]) ?>
                    </div> 
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="<?= $this->Url->build('/', true) ?>users/config/<?= $authUser->username ?>" class="btn btn-lg btn-primary">Volver</a>
                    <?= $this->Form->button(__('Cambiar'), [
                        'class' => 'btn btn-danger btn-lg'
                    ]) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
