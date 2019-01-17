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
    <?= $this->Html->css('all.css') ?>
    <?= $this->Html->css('datatables.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="bg-dark">
    <?= $this->Flash->render() ?>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
    <!-- Javascript -->
    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>
    <?= $this->Html->script('jquery.easing.js') ?>
    <?= $this->Html->script('popper.js') ?>
    <?= $this->Html->script('admin.js') ?>
</body>
</html>