<?php $title = "Editar tu publicación"; 
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
            <div class="card-body">                    
            <?= $this->Form->create($post, ['type' => 'file', 'id' => 'form']) ?>
                <div class="row">
                    <div class="col-md-12 d-flex flex-column align-items-center">
                      <label class="card-title">Avatar</label>
                      <div class="fileinput text-center fileinput-new" data-provides="fileinput">
                          <div class="fileinput-new thumbnail">
                            <img src="<?= $this->Url->build('/', true) ?><?= $post->img_url ?>" alt="<?= $post->title ?>">
                            </div>
                          <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                          <div>
                              <span class="btn btn-rose btn-round btn-file">
                                  <span class="fileinput-new">Subir Foto</span>
                                  <span class="fileinput-exists">Cambiarla</span>
                                  <input type="file" name="img_url">
                              </span>
                              <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Eliminarla</a>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <?= $this->Form->control('category_id', [
                                'options' => $categories,
                                'empty' => 'Seleccione una categoría',
                                'class' => 'form-control',
                                'label' => [
                                    'class' => 'control-label',
                                    'text' => 'Categorías:'
                                ],
                                'required'
                            ]) ?>
                        </div>
                        <div class="form-group">
                            <label>Título:</label>
                            <input type="text" name="title" placeholder="Título de tu Publicación" class="form-control" value="<?= $post->title ?>">
                        </div>
                        <div class="form-group">
                            <label>Artículo:</label>
                            <textarea type="text" id="editor" name="content" class="form-control"><?= $post->content ?></textarea>
                        </div>
                    </div>
                </div>           
            <?= $this->Form->end() ?>
            </div>                            
            <div class="card-footer d-flex justify-content-between">
                <a href="<?= $this->Url->build('/', true) ?><?= strtolower($this->request->getParam('controller')) ?>/" class="btn btn-fill btn-primary">Volver</a>
                <div>
                    <?= $this->Form->button(__('Guardar'), [
                        'class' => 'btn btn-fill btn-danger',
                        'name' => 'save',
                        'value' => 'save',
                        'form' => 'form'
                    ]) ?>
                    <?= $this->Form->button(__('Publicar'), [
                        'class' => 'btn btn-fill btn-info',
                        'name' => 'publish',
                        'value' => 'publish',
                        'form' => 'form'
                    ]) ?>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>