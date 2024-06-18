<?php $__env->startSection('content'); ?>

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo e(url('/painel')); ?>">Home </a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="<?php echo e(url('/painel/importacoes')); ?>">Importações </a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>

            <?php if( isset($user) ): ?>
                <span>Editar</span>
            <?php else: ?>
                <span>Novo</span>
            <?php endif; ?>

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

                        <i class=" icon-layers "></i>
                        <span class="caption-subject  sbold uppercase">Importação</span>
                  
                </div>
                <div class="actions">

                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->


    <?php echo Form::open(['route' => 'cadGoComissaoVenda', 'class' => 'form form-search form-ds', 'files' => true]); ?>


    <label class="control-label">Arquivo:</label>
    <input name="file" type="file" class="form-control" id="file" required/>
   
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

<?php echo $__env->make('painel.templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rafael/docker/pep/resources/views/painel/importacoes/index.blade.php ENDPATH**/ ?>