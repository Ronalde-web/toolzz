<?php echo $__env->make('painel.templates.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
<div class="page-wrapper">

    <?php echo $__env->make('painel.templates.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="page-container">

        <?php echo $__env->make('painel.templates.siderbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="page-content-wrapper">

            <div class="page-content">
                <?php echo $__env->yieldContent('content'); ?>


            </div>

        </div>



    </div>

<?php echo $__env->make('painel.templates.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projetos/blog/resources/views/painel/templates/template.blade.php ENDPATH**/ ?>