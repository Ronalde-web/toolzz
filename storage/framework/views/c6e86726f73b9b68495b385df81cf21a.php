<?php $__env->startSection('content'); ?>

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo e(url('/painel')); ?>">Home </a>
            <i class="fa fa-angle-right"></i>
        </li>

        <li>
            <a href="<?php echo e(url('/painel/perfis')); ?>" class="bred">Perfis</a>
            <i class="fa fa-angle-right"></i>
        </li>

        <li>
            <span>User Vinculado</span>
        </li>
    </ul>
</div>

<?php if( Session::has('success') ): ?>
    <div class="alert alert-success hide-msg" style="float: left; width: 100%; margin: 10px 0px;">
        <?php echo e(Session::get('success')); ?>

    </div>
<?php endif; ?>

<div class="row">
    <div class="col-md-12">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <a href="<?php echo e(route('profile.users.add', $profile->id)); ?>" class="btn btn-lg green-meadow ">
                        <i class="fa fa-plus"></i> Vincular  Usuário</a>
                </div>
                <div class="col-md-8 col-md-offset-1">

                    <?php echo Form::open(['route' => ['profile.users.search', $profile->id], 'class' => 'form-horizontal']); ?>

                    <div class="form-group form-md-line-input">
                        <div class="col-md-10">
                            <div class="input-group input-group">

                                <div class="input-group-control">
                                    <?php echo Form::text('key-search', null, ['class' => 'form-control input-lg']); ?>


                                    <div class="form-control-focus"></div>
                                </div>
                                <span class="input-group-btn btn-right">
                        <?php echo Form::button('<i class="fa fa-search"></i> Pesquisar',array('class'=>'btn green', 'type'=>'submit')); ?>

                                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo Form::close(); ?>


                <div class="actions">
                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"
                           data-original-title="" title=""> </a>
                    </div>
                </div>
            </div>


            <div class="portlet-body">

                <table class="table table-hover table-light">
                    <thead>
                    <tr class="uppercase">
                        <th> Nome</th>
                        <th> E-mail</th>
                        <th> Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td>
                                <a href="javascript:;" class="primary-link"><?php echo e($v->name); ?></a>
                            </td>
                            <td><?php echo e($v->email); ?></td>
                            <td>
                                <div class="btn-group ">

                                    <a href="<?php echo e(route('profile.user.delete', [$profile->id, $v->id])); ?>" class="btn btn-xs  red">
                                        <i class="fa fa-trash-o"></i> Deletar</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p>Nenhum Registro Encontrado</p>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="pull-right">
                <?php if( isset($dataForm) ): ?>
                    <?php echo $users->appends($dataForm)->links(); ?>

                <?php else: ?>
                    <?php echo $users->links(); ?>

                <?php endif; ?>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
</div>








<?php $__env->stopSection(); ?>
<?php echo $__env->make('painel.templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projetos/blog/resources/views/painel/profiles/users.blade.php ENDPATH**/ ?>