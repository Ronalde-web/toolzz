<?php $__env->startSection('content'); ?>
<div class="bred">
    <a href="<?php echo e(url('/painel')); ?>" class="bred">Home  > </a>
    <a href="<?php echo e(url('/painel/usuarios')); ?>" class="bred">Usuários > Listagem do Usuário <?php echo e($data->name); ?> </a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Usuário: <b><?php echo e($data->name); ?></b></h1>
</div>

<div class="content-din">
    <?php if( isset($errors) && count($errors) > 0 ): ?>
    <div class="alert alert-warning">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
    
    <h2><strong>Nome:</strong> <?php echo e($data->name); ?></h2>
    <h2><strong>Email:</strong> <?php echo e($data->email); ?></h2>
    <h2><strong>Contato:</strong> <?php echo e($data->contato); ?></h2>
    <h2><strong>Telefone:</strong> <?php echo e($data->telefone); ?></h2>
    <h2><strong>Celular:</strong> <?php echo e($data->celular); ?></h2>
       <?php echo Form::open(['route' => ['usuarios.destroy', $data->id], 'class' => 'form form-search form-ds', 'method' => 'DELETE']); ?>

        <div class="form-group">
            <?php echo Form::submit("Deletar Usuário: $data->name", ['class' => 'btn btn-danger']); ?>

        </div>
    <?php echo Form::close(); ?>


</div><!--Content DinÃ¢mico-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('painel.templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rafael/docker/portal pb/resources/views/painel/users/show.blade.php ENDPATH**/ ?>