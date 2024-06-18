<?php $__env->startSection('content'); ?>

    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="<?php echo e(url('/painel')); ?>">Home </a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Usuários</span>
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
                        <a href="<?php echo e(route('usuarios.create')); ?>" class="btn btn-lg green-meadow ">
                            <i class="fa fa-plus"></i> Adicionar</a>
                    </div>
                    <div class="col-md-8 col-md-offset-1">
                        <?php echo Form::open(['route' => 'usuarios.search', 'class'=>'form-horizontal']); ?>

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
                            <th colspan="2"> Nome</th>
                            <th> Contato</th>
                            <th> Email</th>                            
                            <th> Telefone</th>
                            <th> Celular</th>
                            <th> Código do Cliente</th>
                            <th> Ações</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="fit">
                                    <?php if( auth()->user()->image != '' && file_exists(public_path('assets/uploads/users/'.$v->image)) ): ?>
                                        <img class="user-pic rounded" src="<?php echo e(url('../assets/portal/imgs/logo.jpeg')); ?>"
                                             alt="<?php echo e($v->name); ?>" class="img-circle">
                                    <?php else: ?>
                                        <img class="user-pic rounded" src="<?php echo e(url('assets/painel/imgs/no-image.png')); ?>" alt="<?php echo e($v->name); ?>"
                                             class="img-circle">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($v->name); ?></td>
                                <td><?php echo e($v->contato); ?></td>
                                <td><?php echo e($v->email); ?></td>
                                <td><?php echo e($v->telefone); ?></td>
                                <td><?php echo e($v->celular); ?></td>
                                <td><?php echo e($v->codigo_cliente); ?></td>
                                <td>
                                    <div class="btn-group ">
                                        <a href='<?php echo e(route('usuarios.edit', $v->id)); ?>' class="btn  btn-xs  blue">
                                            <i class="fa fa-edit"></i> Editar</a>
                                        <a href="<?php echo e(route('usuarios.show', $v->id)); ?>" class="btn btn-xs  red">
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
                    <?php echo $data->appends($dataForm)->links(); ?>

                <?php else: ?>
                    <?php echo $data->links(); ?>

                <?php endif; ?>
                    </div>

                <div class="clearfix"></div>

            </div>


        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('painel.templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cristiliano/dev/stdef/resources/views/painel/users/index.blade.php ENDPATH**/ ?>