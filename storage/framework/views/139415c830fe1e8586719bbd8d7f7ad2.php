<?php $__env->startSection('content'); ?>
<div class="bred">
    <a href="<?php echo e(url('/painel')); ?>" class="bred">Home  > </a>
    <a href="<?php echo e(url('/painel/usuarios')); ?>" class="bred">Usuários > Meu Perfil</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Meu Perfil</h1>
</div>


<div class="content-din">
    <?php if( isset($errors) && count($errors) > 0 ): ?>
    <div class="alert alert-warning">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
    
    <?php if( Session::has('success') ): ?>
    <div class="alert alert-success hide-msg" style="float: left; width: 100%; margin: 10px 0px;">
        <?php echo e(Session::get('success')); ?>

    </div>
    <?php endif; ?>
    
    
    <?php echo Form::model($data, ['route' => ['profile.update', $data->id], 'class' => 'form form-search form-ds', 'files' => true]); ?>

        <div class="form-group">
            <?php echo Form::text('name', null, ['placeholder' => 'Nome:', 'class' => 'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::hidden('email', null); ?>

        </div>
        <div class="form-group">
            <?php echo Form::password('password', ['placeholder' => 'Senha:', 'class' => 'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::password('password_confirmation', ['placeholder' => 'Confirmar Senha:', 'class' => 'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::text('contato', null, ['placeholder' => 'Contato:', 'class' => 'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::text('telefone', null, ['placeholder' => 'Tlefone:', 'class' => 'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::text('celular', null, ['placeholder' => 'Celular:', 'class' => 'form-control']); ?>

        </div>      

        <div class="form-group">
            <?php echo Form::submit('Enviar', ['class' => 'btn']); ?>

        </div>
    <?php echo Form::close(); ?>


</div><!--Content Dinâmico-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('painel.templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rafael/docker/testy/resources/views/painel/users/profile.blade.php ENDPATH**/ ?>