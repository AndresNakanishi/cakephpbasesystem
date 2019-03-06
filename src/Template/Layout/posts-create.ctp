<!DOCTYPE html>
<html lang="es">
<head>
    <?= $this->Html->charset() ?>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <!-- FAVICON -->
    <?= $this->Html->meta('icon', 'img/favicon.png', ['type' => 'image/png']) ?>
    <!-- CSS -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <?= $this->Html->css('all.css') ?>
    <?= $this->Html->css('system.css') ?>
    <?= $this->Html->css('custom-system.css') ?>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div id="wrapper">
    <?= $this->element('system-sidebar') ?>
        <div class="main-panel" id="main-panel">
            <?= $this->element('system-menu') ?>
            <?= $this->fetch('content') ?>
            <?= $this->element('system-footer') ?>
        </div>
    </div>
    <!-- Javascript -->
    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>
    <?= $this->Html->script('perfect-scrollbar.jquery.min.js') ?>
    <?= $this->Html->script('moment.js') ?>
    <?= $this->Html->script('sweetalert.js') ?>
    <?= $this->Html->script('chartjs.min.js') ?>
    <?= $this->Html->script('bootstrap-notify.js') ?>
    <?= $this->Html->script('jasny.js') ?>
    <?= $this->Html->script('ckeditor/ckeditor.js') ?>
    <?= $this->Html->script('system.js') ?>
    <?= $this->Html->script('custom-system.js') ?>
    <?= $this->Flash->render() ?>   
    <script type="text/javascript">
        $(document).ready(function() {
            //  Activate the Tooltips
            $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();
        });
        CKEDITOR.replace( 'editor' );
    </script>
</body>
</html>