<?php $__env->startSection('content'); ?>


<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('veiculos')): ?>


    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="/">Dashboard</a>
            </li>
        </ul>
        <div class="page-toolbar">
            adsfafasdfsdf
        </div>
    </div>

<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <h2>
                <?php echo e($totalUser); ?>

            </h2>
            <h3>
                Total de Usuários
            </h3>

        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <i class="fa fa-cubes" aria-hidden="true"></i>
                <h2 class="result">
                    <?php echo e($totalCategories); ?>

                </h2>
                <h3 class="result-ds">
                    Total de Categorias
                </h3>
        </div>
    </div>


    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <i class="fa fa-file-text" aria-hidden="true"></i>
                <h2 class="result">
                    <?php echo e($totalPosts); ?>

                </h2>
                <h3 class="result-ds">
                    Total de Posts
                </h3>
        </div>
    </div>


    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <i class="fa fa-comments" aria-hidden="true"></i>
            <div class="text-rel">
                <h2 class="result">
                    <?php echo e($totalComments); ?>

                </h2>
                <h3 class="result-ds">
                    Total de Comentários
                </h3>
            </div>
        </div>
    </div>



    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <i class="fa fa-users" aria-hidden="true"></i>
            <div class="text-rel">
                <h2 class="result">
                    <?php echo e($totalProfiles); ?>

                </h2>
                <h3 class="result-ds">
                    Total de Perfis
                </h3>
            </div>
        </div>
    </div>


    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
            <div class="text-rel">
                <h2 class="result">
                    <?php echo e($totalPermissions); ?>

                </h2>
                <h3 class="result-ds">
                    Total de Permissões
                </h3>
            </div>
        </div>
    </div>

    <?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('painel.templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rafael/docker/pep/resources/views/painel/home/index.blade.php ENDPATH**/ ?>