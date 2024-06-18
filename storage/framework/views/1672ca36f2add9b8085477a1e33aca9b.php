<?php $__env->startSection('content-login'); ?>

<?php echo Form::open(['url' => '/login', 'class' => 'login-form']); ?>

<h3 class="form-title font-green">Login</h3>
<div class="alert alert-danger display-hide">
    <button class="close" data-close="alert"></button>
    <span> Enter any username and password. </span>
</div>
<div class="form-group">
    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
    <?php echo Form::email('email', null, ['placeholder' => 'E-mail:', 'class'=>'form-control form-control-solid placeholder-no-fix']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::password('password', ['placeholder' => 'Senha:', 'class'=>'form-control form-control-solid placeholder-no-fix']); ?>

    </div>
    <div class="form-actions">
        <?php echo Form::submit('Acessar', ['class' => 'btn green uppercase']); ?>


    <a href="<?php echo e(url('/password/reset')); ?>"  class="forget-password">Recuperar Senha?</a>
    </div>
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rafael/docker/portal pb/resources/views/auth/login.blade.php ENDPATH**/ ?>