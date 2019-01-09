<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <!-- LOGO -->
    <a class="navbar-brand" href="<?php echo $this->Url->build('/', true) ?>">
      <?= $this->Html->image('logo.png', ['alt' => 'Logo de la Web']); ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-system" aria-controls="navbar-system" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbar-system">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </div>
  </div>
</nav>