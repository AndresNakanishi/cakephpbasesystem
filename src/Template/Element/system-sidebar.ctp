<div class="sidebar" id="sidebar" data-color="orange">
  <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
  <div class="logo">
    <a href="<?php echo $this->Url->build('/', true) ?>" class="simple-text logo-mini">
      SB
    </a>
    <a href="<?php echo $this->Url->build('/', true) ?>" class="simple-text logo-normal">
      Sistema Base
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <div class="user">
        <div class="photo">
          <?php if (strlen($authUser->avatar) > 80): ?>
            <img src="<?= $authUser->avatar ?>" alt="<?= $authUser->username ?>">
          <?php else: ?>
            <img src="<?= $this->Url->build('/', true) ?><?= $authUser->avatar ?>" alt="<?= $authUser->username ?>">
          <?php endif ?>
        </div>
        <div class="info">
            <a data-toggle="collapse" href="#collapseExample" class="collapsed" aria-expanded="false">
                <span>
                    <?= $authUser->username; ?>
                    <b class="caret"></b>
                </span>
            </a>
            <div class="clearfix"></div>
            <div class="collapse" id="collapseExample" style="">
                <ul class="nav">
                    <li>
                        <a href="<?php echo $this->Url->build('/', true) ?>users/config/<?= $authUser->username; ?>">
                            <span class="sidebar-mini-icon"><i class="fas fa-user"></i></span>
                            <span class="sidebar-normal">Mi Perfil</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <ul class="nav">
      <li class="<?php if($this->request->getParam('controller') == 'Users' && $this->request->getParam('action') == 'dashboard'){ echo 'active';} ?>">
        <a href="<?php echo $this->Url->build('/', true) ?>dashboard">
          <i class="now-ui-icons design_app"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li>                 
        <a data-toggle="collapse" href="#blog">
            <i class="fas fa-book"></i>
            <p>
              Blog <b class="caret"></b>
            </p>
        </a>
        <div class="collapse " id="blog">
          <ul class="nav">
            <li class="<?php if($this->request->getParam('controller') == 'Posts' && $this->request->getParam('action') == 'index'){ echo 'active';} ?>">
              <a class="d-flex align-items-center" href="<?php echo $this->Url->build('/', true) ?>posts">
                <i class="far fa-file"></i>
                <p>Posts</p>
              </a>
            </li>
            <li class="<?php if($this->request->getParam('controller') == 'Categories' && $this->request->getParam('action') == 'index'){ echo 'active';} ?>">
              <a class="d-flex align-items-center" href="<?php echo $this->Url->build('/', true) ?>categories">
                <i class="fas fa-th"></i> 
                <p>Categorías</p>
              </a>
            </li>            
          </ul>
        </div>             
      </li>
      <li>                 
        <a data-toggle="collapse" href="#gestion">
          
            <i class="fas fa-cog"></i>
          
            <p>
              Gestión <b class="caret"></b>
            </p>
        </a>
        <div class="collapse " id="gestion">
          <ul class="nav">
            <li class="<?php if($this->request->getParam('controller') == 'Users' && $this->request->getParam('action') == 'index'){ echo 'active';} ?>">
              <a class="d-flex align-items-center" href="<?php echo $this->Url->build('/', true) ?>users">
                <i class="now-ui-icons users_single-02"></i>
                <p>Usuarios</p>
              </a>
            </li>
            <li class="<?php if($this->request->getParam('controller') == 'Profiles'){ echo 'active';} ?>">
              <a class="d-flex align-items-center" href="<?php echo $this->Url->build('/', true) ?>profiles">
                <i class="fas fa-address-card"></i> 
                <p>Perfiles</p>
              </a>
            </li>            
          </ul>
        </div>             
      </li>
      <li>
        <a class="d-flex align-items-center" href="<?php echo $this->Url->build('/', true) ?>logout">
          <i class="fas fa-sign-out-alt"></i>
          <p>Salir</p>
        </a>
      </li>
    </ul>
  </div>
</div>