<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item <?php if($this->request->action == 'dashboard'){ echo 'active';} ?>">
    <a class="nav-link" href="<?php echo $this->Url->build('/', true) ?>dashboard">
      <i class="fas fa-columns"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-cogs"></i>
      <span>Gestión</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Gestión de Usuarios:</h6>
      <a class="dropdown-item" href="<?php echo $this->Url->build('/', true) ?>users"><i class="fas fa-users"></i> Usuarios</a>
      <a class="dropdown-item" href="<?php echo $this->Url->build('/', true) ?>profiles"><i class="fas fa-address-card"></i> Perfiles</a>
      <div class="dropdown-divider"></div>
      <h6 class="dropdown-header">Other Pages:</h6>
      <a class="dropdown-item" href="<?php echo $this->Url->build('/', true) ?>">404 Page</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo $this->Url->build('/', true) ?>logout">
      <i class="fas fa-sign-out-alt"></i>
      <span>Salir</span>
    </a>
  </li>
</ul>