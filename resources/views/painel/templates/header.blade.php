<div class="page-header navbar navbar-fixed-top">

    <div class="page-header-inner ">

        <div class="page-logo">
            <a href="{{url('/painel')}}">
                <img src="{{ url('assets/all/imgs/Logo.png') }}"width="100" alt="logo"
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
                        @if( auth()->user()->image != '' && file_exists(public_path('assets/uploads/users/'.auth()->user()->image)) )
                            <img src="{{url('assets/uploads/users/'.auth()->user()->image)}}"
                                 alt="{{auth()->user()->name}}" class="img-circle">
                       
                        @endif
                        <span class="username username-hide-on-mobile">{{auth()->user()->name}}</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="{{route('logout')}}">
                                <i class="icon-key"></i> Sair</a>
                        </li>
                    </ul>
                </li>
                
                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a href="{{route('logout')}}" class="dropdown-toggle">
                        <i class="icon-logout"></i>
                    </a>
                </li>
                
            </ul>
        </div>
        
    </div>

</div>

<div class="clearfix"> </div>