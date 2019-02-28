<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
  <div class="container">
    <div class="navbar-translate">
      <a class="navbar-brand" href="<?php echo $this->Url->build('/', true) ?>" rel="tooltip" title="Nakanishi Web" data-placement="bottom">
        Sistema Base
      </a>
      <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar top-bar"></span>
        <span class="navbar-toggler-bar middle-bar"></span>
        <span class="navbar-toggler-bar bottom-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse justify-content-end bg-primary" id="navigation">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
            <i class="fas fa-user"></i>&nbsp;
            <p>Sobre Mi</p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
            <a class="dropdown-item" href="./index.html">
              <i class="now-ui-icons business_chart-pie-36"></i> Mi Historia
            </a>
            <a class="dropdown-item" target="_blank" href="https://demos.creative-tim.com/now-ui-kit/docs/1.0/getting-started/introduction.html">
              <i class="now-ui-icons design_bullet-list-67"></i> Mis Trabajos
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Seguinos en Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
            <i class="fab fa-twitter"></i>
            <p class="d-lg-none d-xl-none">Twitter</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Seguinos en Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
            <i class="fab fa-facebook-square"></i>
            <p class="d-lg-none d-xl-none">Facebook</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Seguinos en Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
            <i class="fab fa-instagram"></i>
            <p class="d-lg-none d-xl-none">Instagram</p>
          </a>
        </li>
        <?php if (isset($authUser)): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $this->Url->build('/', true) ?>users/dashboard">
            <i class="fas fa-sign-in-alt"></i> Dashboard
          </a>
        </li>
        <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Ingresa al sistema" data-placement="bottom" href="<?php echo $this->Url->build('/', true) ?>login">
            <i class="fas fa-sign-in-alt"></i> Login
          </a>
        </li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</nav>