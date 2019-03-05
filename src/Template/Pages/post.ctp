<?php 
$title = $post->title; 

$this->assign('title', $title);

?>
<div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true" style="background-image: url(<?= $this->Url->build('/', true) ?><?= $post->img_url ?>); transform: translate3d(0px, 0px, 0px);">
    </div>
    <div class="content-center">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title"><?= $post->title ?></h2>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <p class="text-post"><?= $post->content ?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 ml-auto mr-auto">

            <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-between">
                    <div class="blog-tags">
                        Categoría:
                        <span class="badge badge-info"><?= $post->category->name ?></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="#pablo" class="btn btn-google btn-round pull-right">
                        <i class="fab fa-google"></i> 232
                    </a>
                    <a href="#pablo" class="btn btn-twitter btn-round pull-right">
                        <i class="fab fa-twitter"></i> 910
                    </a>
                    <a href="#pablo" class="btn btn-facebook btn-round pull-right">
                        <i class="fab fa-facebook-square"></i> 872
                    </a>

                </div>
            </div>

            <hr>

            <div class="card card-profile card-plain">
                <div class="row">
                    <div class="col-md-2 ml-auto">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img img-raised" src="<?= $this->Url->build('/', true) ?><?= $post->user->avatar ?>" alt="<?= $post->user->username ?>">
                            </a>
                        <div class="ripple-container"></div></div>
                    </div>
                    <div class="col-md-8 mr-auto">
                        <h4 class="card-title text-left"><?= $post->user->name ?>&nbsp;<?= $post->user->surname ?></h4>
                        <p class="description text-left">I've been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...I like good music from Youtube.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>