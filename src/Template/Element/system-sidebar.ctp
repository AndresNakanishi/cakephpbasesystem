<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="<?php echo $this->Url->build('/', true) ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fab fa-facebook"></i>
      <span>Pages</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Login Screens:</h6>
      <a class="dropdown-item" href="<?php echo $this->Url->build('/', true) ?>">Login</a>
      <a class="dropdown-item" href="<?php echo $this->Url->build('/', true) ?>">Register</a>
      <a class="dropdown-item" href="<?php echo $this->Url->build('/', true) ?>">Forgot Password</a>
      <div class="dropdown-divider"></div>
      <h6 class="dropdown-header">Other Pages:</h6>
      <a class="dropdown-item" href="<?php echo $this->Url->build('/', true) ?>">404 Page</a>
    </div>
  </li>
</ul>