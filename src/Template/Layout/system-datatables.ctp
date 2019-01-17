<!DOCTYPE html>
<html lang="es">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <!-- FAVICON -->
    <?= $this->Html->meta('icon', 'img/favicon.png', ['type' => 'image/png']) ?>
    <!-- CSS -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('all.css') ?>
    <?= $this->Html->css('datatables.css') ?>
    <?= $this->Html->css('system.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body id="page-top">
    <?= $this->element('system-menu') ?>
    <div id="wrapper">
    <?= $this->element('system-sidebar') ?>
        <div id="content-wrapper">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
            <?= $this->element('system-footer') ?>
        </div>
    </div>
    <!-- /#wrapper -->
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>
    <!-- Core plugin JavaScript-->
    <?= $this->Html->script('jquery.easing.js') ?>
    <!-- Page level plugin JavaScript-->
    <?= $this->Html->script('jquery.datatables.js') ?>
    <?= $this->Html->script('datatables.js') ?>
    <!-- Custom scripts for all pages-->
    <?= $this->Html->script('admin.js') ?>
    <?= $this->Html->script('datatables.system.js') ?>
</body>
</html>