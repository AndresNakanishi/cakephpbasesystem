<?php 
    $title = 'Categoría';
    $this->assign('title', $title);
?>
<div class="page-header page-header-small" filter-color="black-overlay" style="max-height: 20vh;">
    <div class="page-header-image" data-parallax="true" style="background-image: url('../../img/header.jpg');"></div>
    <div class="content-center">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title">Bienvenidos a mi Blog!<br>😊</h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 ml-auto mr-auto">
            <h2 class="title">Mis publicaciones</h2>
            <br>
            <?php foreach ($posts as $post): ?>
            <div class="card card-plain card-blog">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-image">
                            <img class="img img-raised rounded" src="<?= $this->Url->build('/', true) ?><?= $post->img_url ?>" alt="<?= $post->title?>">
                        </div>
                    </div>
                    <div class="col-md-8">                
                        <h3 class="card-title d-flex align-items-center justify-content-between">
                            <a href="<?= $this->Url->build('/', true) ?>blog/<?= $post->slug ?>"><?= $post->title?></a>
                            <span class="badge badge-info" style="font-size:12px;"><a class="link-hover text-white" href="<?= $this->Url->build('/', true) ?>blog/c/<?= $post->category->slug ?>"><?= $post->category->name ?></a></span>
                        </h3>
                        <p class="card-description">
                            <?= substr(strip_tags($post->content),0 , 100) ?><a href="<?= $this->Url->build('/', true) ?>blog/<?= $post->slug ?>"> Leer más</a>
                        </p>
                        <div class="author">
                           <img src="<?= $this->Url->build('/', true) ?><?= $post->user->avatar ?>" alt="<?= $post->user->username ?>" class="avatar img-raised">
                           <span><?= $post->user->username ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>