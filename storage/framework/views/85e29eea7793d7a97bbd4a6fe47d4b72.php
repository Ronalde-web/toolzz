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

    <div class="row d-flex justify-content-center align-items-center">

        <div class="col-sm-6">
            <label class="control-label">Arquivo:</label>
            <input name="file" type="file" class="form-control" id="file" required/>
        </div>
    
        <div class="col-sm-4">
            <label class="control-label">Mês</label>
            <select name="mes" class="form-control  col-md-12" required>
                <option value=""> </option>
                <option value="01"><?php echo e(('Janeiro')); ?></option>
                <option value="02"><?php echo e(('Fevereiro')); ?></option>
                <option value=<?php echo e($mes['mes'] ?? '3'); ?>><?php echo e(('Março')); ?></option>
                <option value=<?php echo e($mes['mes'] ?? '4'); ?>><?php echo e(('Abril')); ?></option>
                <option value=<?php echo e($mes['mes'] ?? '5'); ?>><?php echo e(('Maio')); ?></option>
                <option value=<?php echo e($mes['mes'] ?? '6'); ?>><?php echo e(('Junho')); ?></option>
                <option value=<?php echo e($mes['mes'] ?? '7'); ?>><?php echo e(('Julho')); ?></option>
                <option value=<?php echo e($mes['mes'] ?? '8'); ?>><?php echo e(('Agosto')); ?></option>
                <option value=<?php echo e($mes['mes'] ?? '9'); ?>><?php echo e(('Setembro')); ?></option>
                <option value=<?php echo e($mes['mes'] ?? '10'); ?>><?php echo e(('Outubro')); ?></option>
                <option value=<?php echo e($mes['mes'] ?? '11'); ?>><?php echo e(('Novembro')); ?></option>
                <option value="12"><?php echo e(('Dezembro')); ?></option>
            </select>
        </div>

        <?php $current_year = 2020; ?>
        <div class="col-sm-2">
            <label class="control-label">Ano</label>
            <select name="ano" class="form-control col-md-12" required>
                <option value=""> </option>
                <?php for ($i = 0; $i < 6; $i++) { ?> <option
                    value="<?php echo $current_year + $i; ?>"> <?php echo
                    $current_year + $i; ?>
                    </option>
                    <?php } ?>
            </select>
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

<?php echo $__env->make('painel.templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cristiliano/dev/stdef/resources/views/painel/importacoes/index.blade.php ENDPATH**/ ?>