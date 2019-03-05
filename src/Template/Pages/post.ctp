<?php 
$title = $post->title; 
$description = substr($post->content, 0 , 90); 
$image = $this->Url->build('/', true).$post->img_url;
$author = $post->user->name.' '.$post->user->surname;
$url = $this->Url->build('/', true).$post->slug;

$this->assign('title', $title);
$this->assign('description', $description);
$this->assign('image', $image);
$this->assign('author', $author);
$this->assign('url', $url);
?>
<div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true" style="background-image: url(<?= $image ?>); transform: translate3d(0px, 0px, 0px);">
    </div>
    <div class="content-center">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title" itemprop="name"><?= $post->title ?></h2>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <p class="text-post" itemprop="articleBody"><?= $post->content ?></p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 ml-auto mr-auto">

            <div class="row">
                <div class="col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
                    <div class="blog-tags">
                        Categoría:
                        <span class="badge badge-info"><?= $post->category->name ?></span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
                    <a href="http://www.facebook.com/sharer.php?u=<?= $url ?>" class="btn btn-twitter btn-round pull-right">
                        <i class="fab fa-twitter"></i> Compartir
                    </a>
                    <a href="https://twitter.com/share?url=<?= $url ?>" class="btn btn-facebook btn-round pull-right">
                        <i class="fab fa-facebook-square"></i> Compartir
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
                        <h4 class="card-title text-left" itemprop="author"><?= $author ?></h4>
                        <p class="description text-left">I've been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...I like good music from Youtube.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>