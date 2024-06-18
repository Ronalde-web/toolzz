<?php $__env->startSection('content'); ?>
<div class="portlet-title">
<div class="page-bar">
    <ul class="page-breadcrumb">
  
        <li>
            <span>Folha</span>
        </li>
    </ul>
</div>
</div>
<div class="content-wrapper">
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
      </div>
   </div>
   <div class="content-body">
      <div class="col-12">
         <div class="card">
            <div class="card-header">
               <div class="card-header">
                  <?php echo Form::open(['route' => 'relatorios.pesquisar']); ?>

                  <?php echo e(csrf_field()); ?>

                  <div class="row">
                    <div class="portlet-title">
                        <div class="caption">                           

                            <div class="col-sm-4">
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
                                <select name="ano" class="form-control col-md-12" required>
                                    <option value=""> </option>
                                    <?php for ($i = 0; $i < 6; $i++) { ?> <option
                                        value="<?php echo $current_year + $i; ?>"> <?php echo
                                        $current_year + $i; ?>
                                        </option>
                                        <?php } ?>
                                </select>
                            </div>
                     <div class="col-md-1" >
                        <span class="input-group-btn btn-right">
                            <?php echo Form::button('<i class="fa fa-search"></i> Pesquisar',array('class'=>'btn green', 'type'=>'submit')); ?>

                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php echo Form::close(); ?>

                  </div>
                     
                  <div class="portlet-body">

                        <br/>
                        <strong>Mês: </strong>
                                         
                        <table class="table table-hover table-light">
                            <thead>
                            <tr>                            
                                <th width="15">Matricula</th>
                                <th width="15">Nome</th>
                                <th width="25">Cargo</th>
                                <th width="25">Mês</th>
                                <th width="25">Ano</th>
                                <th width="25">Total bruto</th>                                                  
                                <th width="25">Total desconto</th>
                                <th width="25">Total liquido</th>
                         
                            </tr>
                            
                            <?php $__currentLoopData = $itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>                                                                
                                    <td width="15"><?php echo e($iten->matricula); ?></td>
                                    <td width="15"><?php echo e($iten->nome); ?></td>
                                    <td width="25"><?php echo e($iten->cargo); ?></td>
                                    <td width="25"><?php echo e($iten->mes); ?></td>
                                    <td width="25"><?php echo e($iten->ano); ?></td>
                                    <td width="25">
                                        R$ <?php echo e(number_format($iten->total_bruto, 2, ',', '.')); ?>

                                    </td>                                
                                    <td width="25">
                                        R$ <?php echo e(number_format($iten->total_desconto, 2, ',', '.')); ?>

                                    </td>            
                                    <td width="25">
                                        R$ <?php echo e(number_format($iten->total_liquido, 2, ',', '.')); ?>

                                    </td>
                                </tr>       
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </table>
                        <?php echo e($itens->links()); ?>

                        <div class="total">
                            
                        </div>

                
            
                           </div>
                        </div>
                     </div>
                 </div>
            </div>
         </div>
     </div>
 </div>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rafael/docker/testy/resources/views/site/relatorios/index.blade.php ENDPATH**/ ?>