<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Painel Administrativo</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
    <meta content="" name="author" />

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('assets/painel/global/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('assets/painel/global/plugins/simple-line-icons/simple-line-icons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('assets/painel/global/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('assets/painel/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')); ?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo e(url('assets/painel/global/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('assets/painel/global/plugins/select2/css/select2-bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo e(url('assets/painel/global/css/components-md.min.css')); ?>" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?php echo e(url('assets/painel/global/css/plugins-md.min.css')); ?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo e(url('assets/painel/pages/css/login.min.css')); ?>" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="<?php echo e(url('assets/all/imgs/favicon.jpeg')); ?>" /> </head>


<body class=" login">

<div class="logo">
    <a href="index.html">
        <img src="<?php echo e(url('assets/painel/pages/img/logo_fundo.png')); ?>" width="230" /> </a>
</div>

<div class="content">


    <?php if( isset($errors) && count($errors) > 0 ): ?>
        <div class="alert alert-warning">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($error); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>

    <?php echo $__env->yieldContent('content-login'); ?>





</div>
<div class="copyright"> 2024 © defensoria.pb.def.br </div>
<!--[if lt IE 9]>
<script src="<?php echo e(url('assets/painel/global/plugins/respond.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/painel/global/plugins/excanvas.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/painel/global/plugins/ie8.fix.min.js')); ?>"></script>
<![endif]-->
<script src="<?php echo e(url('assets/painel/global/plugins/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('assets/painel/global/plugins/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('assets/painel/global/plugins/js.cookie.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('assets/painel/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('assets/painel/global/plugins/jquery.blockui.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('assets/painel/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('assets/painel/global/plugins/jquery-validation/js/jquery.validate.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('assets/painel/global/plugins/jquery-validation/js/additional-methods.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('assets/painel/global/plugins/select2/js/select2.full.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('assets/painel/global/scripts/app.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('assets/painel/pages/scripts/login.min.js')); ?>" type="text/javascript"></script>

</body>

</html><?php /**PATH /home/rafael/docker/testy/resources/views/auth/templates/template.blade.php ENDPATH**/ ?>