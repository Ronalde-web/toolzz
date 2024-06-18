
@include('painel.templates.head')

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed page-md">

@include('painel.templates.header')


<div class="clearfix"></div>

<div class="page-container">

    @include('painel.templates.siderbar')

    <div class="page-content-wrapper">
        <div class="page-content">
            @yield('content')

        </div>

    </div>

</div>

@include('painel.templates.footer')