<div class="page-header navbar navbar-fixed-top">

    <div class="page-header-inner ">

        <div class="page-logo">
            <a href="<?php echo e(url('/painel')); ?>">
                <img src="<?php echo e(url('assets/painel/layouts/layout2/img/logo_fundo.png')); ?>" width="43" alt="logo"
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
                           <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="<?php echo e(route('profile')); ?>">
                                <i class="icon-user"></i> Profile </a>
                        </li>
                        <li class="divider"> </li>
                       
                    </ul>
                </li>

               

            </ul>
        </div>

    </div>

</div>

<div class="clearfix"> </div><?php /**PATH /home/rafael/docker/testy/resources/views/site/templates/header.blade.php ENDPATH**/ ?>