<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="<?php echo $this->Url->build('/', true) ?>">Sistema Base</a>

  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Navbar Search -->
  <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Navbar -->
  <ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <?php if ($Auth->user('avatar') !== null): ?>
        <img class="rounded-circle avatar" src="<?= $Auth->user('avatar'); ?>" alt="User Avatar">
      <?php else: ?>
        <?= $Auth->user('username'); ?> 
      <?php endif ?>
      <i class="fas fa-caret-down"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="<?php echo $this->Url->build('/', true) ?>users/config/<?= $Auth->user('username'); ?>"><i class="fas fa-user-circle"></i> Mi Perfil</a>
        <a class="dropdown-item" href="<?php echo $this->Url->build('/', true) ?>logout"><i class="fas fa-sign-out-alt"></i> Salir</a>
      </div>
    </li>
  </ul>

</nav>