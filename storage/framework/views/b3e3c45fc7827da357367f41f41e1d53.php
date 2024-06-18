<div class="page-header navbar navbar-fixed-top">

    <div class="page-header-inner ">

        <div class="page-logo">
            <a href="<?php echo e(url('/painel')); ?>">
                <img src="<?php echo e(url('assets/painel/layouts/layout2/img/logo_fundo.png')); ?>" width="100" alt="logo"
                     class="logo-default"/> </a>
            <div class="menu-toggler sidebar-toggler">
                <span></span>
            </div>
        </div>

        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
        </a>

        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">


                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <?php if( auth()->user()->image != '' && file_exists(public_path('assets/uploads/users/'.auth()->user()->image)) ): ?>
                            <img src="<?php echo e(url('assets/uploads/users/'.auth()->user()->image)); ?>"
                                 alt="<?php echo e(auth()->user()->name); ?>" class="img-circle">
                        <?php else: ?>
                            <img src="<?php echo e(url('assets/painel/imgs/no-image.png')); ?>" alt="<?php echo e(auth()->user()->name); ?>"
                                 class="img-circle">
                        <?php endif; ?>
                        <span class="username username-hide-on-mobile"><?php echo e(auth()->user()->name); ?></span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="<?php echo e(route('profile')); ?>">
                                <i class="icon-user"></i> Profile </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="<?php echo e(route('logout')); ?>">
                                <i class="icon-key"></i> Sair</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a href="<?php echo e(route('logout')); ?>" class="dropdown-toggle">
                        <i class="icon-logout"></i>
                    </a>
                </li>

            </ul>
        </div>

    </div>

</div>

<div class="clearfix"> </div><?php /**PATH /home/rafael/docker/portal pb/resources/views/painel/templates/header.blade.php ENDPATH**/ ?>