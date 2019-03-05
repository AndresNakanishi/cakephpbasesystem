<?php 
$system = 'System';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?= $this->Html->charset() ?>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <meta name="description" content="<?= $this->fetch('description') ?>" />
    <meta property="og:locale" content="es_AR" />
    <meta property="og:title" content="<?= $this->fetch('title') ?>" />
    <meta property="og:description" content="<?= $this->fetch('description') ?>" />
    <meta property="og:url" content="<?= $this->fetch('url') ?>" />
    <meta property="og:image" content="<?= $this->fetch('image') ?>" />
    <meta property='og:type' content='article' />
    <meta property='article:author' content='<?= $this->fetch('author') ?>' />
    <!-- FAVICON -->
    <?= $this->Html->meta('icon', 'img/favicon.png', ['type' => 'image/png']) ?>
    <!-- CSS -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <?= $this->Html->css('all.css') ?>
    <?= $this->Html->css('landing.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="index-page sidebar-collapse">
    <?= $this->element('landing-menu') ?>
    <!-- Content -->
    <div class="wrapper">
        <?= $this->fetch('content') ?>
        <?= $this->element('landing-footer') ?>
    </div>
    <!-- Javascript -->
    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>  
    <?= $this->Html->script('bootstrap-switch.js') ?>
    <?= $this->Html->script('nouislider.min.js') ?>  
    <?= $this->Html->script('moment.js') ?>  
    <?= $this->Html->script('bootstrap-notify.js') ?>  
    <?= $this->Html->script('bootstrap-datepicker.js') ?>  
    <?= $this->Html->script('landing.js') ?>
    <?= $this->Flash->render() ?>
</body>
</html>
