<div class="sidebar" data-color="orange">
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
            <img src="<?= $authUser->avatar; ?>" alt="User Avatar">
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
      <li class="<?php if($this->request->controller == 'Users' && $this->request->action == 'dashboard'){ echo 'active';} ?>">
        <a href="<?php echo $this->Url->build('/', true) ?>dashboard">
          <i class="now-ui-icons design_app"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="<?php if($this->request->controller == 'Users' && $this->request->action == 'index'){ echo 'active';} ?>">
        <a href="<?php echo $this->Url->build('/', true) ?>users">
          <i class="now-ui-icons users_single-02"></i>
          <p>Usuarios</p>
        </a>
      </li>
      <li class="<?php if($this->request->controller == 'Profiles'){ echo 'active';} ?>">
        <a href="<?php echo $this->Url->build('/', true) ?>profiles">
          <i class="fas fa-address-card"></i> 
          <p>Perfiles</p>
        </a>
      </li>
      <li>
        <a href="<?php echo $this->Url->build('/', true) ?>logout">
          <i class="fas fa-sign-out-alt"></i>
          <p>Salir</p>
        </a>
      </li>
    </ul>
  </div>
</div>