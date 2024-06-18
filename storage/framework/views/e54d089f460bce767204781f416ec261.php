<?php $__env->startSection('content-login'); ?>

    <?php echo Form::open(['url' => '/password/email', 'class' => 'login-form']); ?>

    <h3 class="font-green">Recuperar Senha ?</h3>
    <p> Digite seu e-mail cadastrado</p>
    <div class="form-group">
        <?php echo Form::email('email', null, ['placeholder' => 'E-mail:', 'class'=>'form-control placeholder-no-fix']); ?>

    </div>

    <div class="form-actions">
        <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
        <?php echo Form::submit('Recuperar', ['class' => 'btn btn-success uppercase pull-right']); ?>

    </div>

    <?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projetos/blog/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>