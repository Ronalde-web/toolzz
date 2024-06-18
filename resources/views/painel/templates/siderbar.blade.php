


<div class="page-sidebar-wrapper">

    <div class="page-sidebar navbar-collapse collapse">

        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            @can('veiculos')
            <li class="nav-item start ">
                <a href="{{url('/painel')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="arrow"></span>
                </a>
            </li>
            @endcan

            @can('veiculos')
            <li>
                <a href="{{url('/painel/relatorios')}}" class="nav-link nav-toggle">
                    <i class="fa fa-cubes"></i>
                    <span class="title">Relatorio</span>
                    <span class="arrow"></span>
                </a>
            </li>
            @endcan
         
            @can('veiculos')
            <li>
                <a href="{{url('/painel/importacoes')}}" class="nav-link nav-toggle">
                    <i class="fa fa-upload"></i>
                    <span class="title">Importar</span>
                    <span class="arrow"></span>
                </a>
            </li>
            @endcan
       

            @can('clientes')
               <!--
            <li>
                <a href="{{url('/painel/clientes')}}" class="nav-link nav-toggle">
                    <i class="fa fa-car"></i>
                    <span class="title">Coletas</span>
                    <span class="arrow"></span>
                </a>
            </li>
              -->
            @endcan

            @can('veiculos')
            <!--
            <li>
                <a href="{{url('/painel/veiculos')}}" class="nav-link nav-toggle">
                    <i class="fa fa-car"></i>
                    <span class="title">Veículos</span>
                    <span class="arrow"></span>
                </a>
            </li>
            -->
            @endcan

            @can('produtos')
            <!--
            <li>
                <a href="{{url('/painel/produtos')}}" class="nav-link nav-toggle">
                    <i class="fa fa-file-text-o"></i>
                    <span class="title">Produtos</span>
                    <span class="arrow"></span>
                </a>
            </li>
            -->
            @endcan

            @can('coletas')
            <!--
            <li>
                <a href="{{url('/painel/coletas')}}" class="nav-link nav-toggle">
                    <i class="fa fa-trash-o"></i>
                    <span class="title">Agendar Coletas</span>
                    <span class="arrow"></span>
                </a>
            </li>
            -->
            @endcan

            @can('users')
                <li>
                    <a href="{{url('/painel/usuarios')}}" class="nav-link nav-toggle">
                        <i class="fa fa-users"></i>
                        <span class="title">Usuarios</span>
                        <span class="arrow"></span>
                    </a>
                </li>
            @endcan

            @can('categorias')
                <!--
                <li>
                    <a href="{{url('/painel/categorias')}}" class="nav-link nav-toggle">
                        <i class="fa fa-cubes"></i>
                        <span class="title">Categorias</span>
                        <span class="arrow"></span>
                    </a>
                </li>
                -->
            @endcan

            @can('posts')
              <!--
                <li>
                    <a href="{{url('/painel/posts')}}" class="nav-link nav-toggle">
                        <i class="fa fa-file-text-o"></i>
                        <span class="title">Post</span>
                        <span class="arrow"></span>
                    </a>
                </li>
                  -->
            @endcan
     
            @can('comments')
                <!--
                <li>
                    <a href="{{url('/painel/comentarios')}}" class="nav-link nav-toggle">
                        <i class="fa fa-commenting-o"></i>
                        <span class="title">Comentários</span>
                        <span class="arrow"></span>
                    </a>
                </li>
                -->
            @endcan

            @can('perfis')
                <li>
                    <a href="{{url('/painel/perfis')}}" class="nav-link nav-toggle">
                        <i class="fa fa-sitemap"></i>
                        <span class="title">Perfil</span>
                        <span class="arrow"></span>
                    </a>
                </li>
            @endcan

            @can('permissions')
                <li>
                    <a href="{{url('/painel/permissoes')}}" class="nav-link nav-toggle">
                        <i class="fa fa-sitemap"></i>
                        <span class="title">Permissoes</span>
                        <span class="arrow"></span>
                    </a>
                </li>
            @endcan


        </ul>

    </div>

</div>