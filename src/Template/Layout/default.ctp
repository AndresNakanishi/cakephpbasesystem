<?php 

$system = 'System';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $system ?> |
        <?= $this->fetch('title') ?>
    </title>
    <!-- FAVICON -->
    <?= $this->Html->meta('icon', 'img/favicon.png', ['type' => 'image/png']) ?>
    <!-- CSS -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <!-- Javascript -->
    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('popper.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->element('menu') ?>
    <?= $this->Flash->render() ?>
    <main role="main">
        <?= $this->fetch('content') ?>
    </main>
    <?= $this->element('footer') ?>
</body>
</html>