<!DOCTYPE html>
<html lang="es">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->fetch('title') ?></title>
    <!-- FAVICON -->
    <?= $this->Html->meta('icon', 'img/favicon.png', ['type' => 'image/png']) ?>
    <!-- CSS -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="bg-dark">
    <?= $this->Flash->render() ?>
    <!-- Content -->
    <?= $this->fetch('content') ?>
    <!-- Javascript -->
    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>  
    <?= $this->Html->script('bootstrap-switch.js') ?>  
    <?= $this->Html->script('nouislider.min.js') ?>  
    <?= $this->Html->script('bootstrap-datepicker.js') ?>  
    <?= $this->Html->script('landing.js') ?>
</body>
</html>