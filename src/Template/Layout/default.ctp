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
    <?= $this->Html->script('jquery.js', ['block' => 'scriptBottom']) ?>
    <?= $this->Html->script('bootstrap.min.js', ['block' => 'scriptBottom']) ?>
    <?= $this->Html->script('popper.js', ['block' => 'scriptBottom']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->element('menu') ?>
    <?= $this->Flash->render() ?>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
    <?= $this->element('footer') ?>
</body>
</html>