<?php $__env->startSection('content'); ?>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo e(url('/painel')); ?>">Home </a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="<?php echo e(url('/painel/perfis')); ?>">Perfil</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="<?php echo e(route('profile.users', $profile->id)); ?>">  Usuários Vinculados </a>
            <i class="fa fa-angle-right"></i>
        </li>

        <li>
            <span><?php echo e($profile->name); ?></span>
        </li>
    </ul>
</div>

<div class="content-din">
    <?php if( isset($errors) && count($errors) > 0 ): ?>
        <div class="alert alert-warning">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($error); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit portlet-form ">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers "></i> <span class="caption-subject sbold uppercase">  Adicionar Novos Usuários ao Perfil: <b><?php echo e($profile->name); ?></b></span>
                </div>
                <div class="actions">   </div>
            </div>
            <div class="portlet-body">
                <div class="form-body">
                        <?php echo Form::open(['route' => ['profile.users.add', $profile->id], 'class' => 'form form-search form-ds']); ?>

                    <div class="form-group form-md-line-input form-md-floating-label blue-steel ">
                            <div class="md-checkbox-inline">
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="md-checkbox">
                                    <?php echo e(Form::checkbox('users[]', $user->id, null,['class' => 'md-check', 'id'=> $user->id])); ?>

                                    <label for="<?php echo e($user->id); ?>">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span>  <?php echo e($user->name); ?></label>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                    </div>
                    <div class="form-actions right">
                        <?php echo Form::button('<i class="fa fa-check"></i> Registrar',array('class'=>'btn btn-primary', 'type'=>'submit')); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('painel.templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projetos/blog/resources/views/painel/profiles/users-add.blade.php ENDPATH**/ ?>