


<div class="page-sidebar-wrapper">

    <div class="page-sidebar navbar-collapse collapse">

        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('veiculos')): ?>
            <li class="nav-item start ">
                <a href="<?php echo e(url('/painel')); ?>" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="arrow"></span>
                </a>
            </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('veiculos')): ?>
            <li>
                <a href="<?php echo e(url('/painel/relatorios')); ?>" class="nav-link nav-toggle">
                    <i class="fa fa-cubes"></i>
                    <span class="title">Relatorio</span>
                    <span class="arrow"></span>
                </a>
            </li>
            <?php endif; ?>
         
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('veiculos')): ?>
            <li>
                <a href="<?php echo e(url('/painel/importacoes')); ?>" class="nav-link nav-toggle">
                    <i class="fa fa-upload"></i>
                    <span class="title">Importar</span>
                    <span class="arrow"></span>
                </a>
            </li>
            <?php endif; ?>
       

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('clientes')): ?>
               <!--
            <li>
                <a href="<?php echo e(url('/painel/clientes')); ?>" class="nav-link nav-toggle">
                    <i class="fa fa-car"></i>
                    <span class="title">Coletas</span>
                    <span class="arrow"></span>
                </a>
            </li>
              -->
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('veiculos')): ?>
            <!--
            <li>
                <a href="<?php echo e(url('/painel/veiculos')); ?>" class="nav-link nav-toggle">
                    <i class="fa fa-car"></i>
                    <span class="title">Veículos</span>
                    <span class="arrow"></span>
                </a>
            </li>
            -->
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('produtos')): ?>
            <!--
            <li>
                <a href="<?php echo e(url('/painel/produtos')); ?>" class="nav-link nav-toggle">
                    <i class="fa fa-file-text-o"></i>
                    <span class="title">Produtos</span>
                    <span class="arrow"></span>
                </a>
            </li>
            -->
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('coletas')): ?>
            <!--
            <li>
                <a href="<?php echo e(url('/painel/coletas')); ?>" class="nav-link nav-toggle">
                    <i class="fa fa-trash-o"></i>
                    <span class="title">Agendar Coletas</span>
                    <span class="arrow"></span>
                </a>
            </li>
            -->
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users')): ?>
                <li>
                    <a href="<?php echo e(url('/painel/usuarios')); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-users"></i>
                        <span class="title">Usuarios</span>
                        <span class="arrow"></span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('categorias')): ?>
                <!--
                <li>
                    <a href="<?php echo e(url('/painel/categorias')); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-cubes"></i>
                        <span class="title">Categorias</span>
                        <span class="arrow"></span>
                    </a>
                </li>
                -->
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('posts')): ?>
              <!--
                <li>
                    <a href="<?php echo e(url('/painel/posts')); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-file-text-o"></i>
                        <span class="title">Post</span>
                        <span class="arrow"></span>
                    </a>
                </li>
                  -->
            <?php endif; ?>
     
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('comments')): ?>
                <!--
                <li>
                    <a href="<?php echo e(url('/painel/comentarios')); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-commenting-o"></i>
                        <span class="title">Comentários</span>
                        <span class="arrow"></span>
                    </a>
                </li>
                -->
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('perfis')): ?>
                <li>
                    <a href="<?php echo e(url('/painel/perfis')); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-sitemap"></i>
                        <span class="title">Perfil</span>
                        <span class="arrow"></span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permissions')): ?>
                <li>
                    <a href="<?php echo e(url('/painel/permissoes')); ?>" class="nav-link nav-toggle">
                        <i class="fa fa-sitemap"></i>
                        <span class="title">Permissoes</span>
                        <span class="arrow"></span>
                    </a>
                </li>
            <?php endif; ?>


        </ul>

    </div>

</div><?php /**PATH /var/www/projetos/blog/resources/views/painel/templates/siderbar.blade.php ENDPATH**/ ?>