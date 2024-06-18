@include('painel.templates.head')


<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
<div class="page-wrapper">

    @include('painel.templates.header')

    <div class="page-container">

        @include('painel.templates.siderbar')

        <div class="page-content-wrapper">

            <div class="page-content">
                @yield('content')


            </div>

        </div>



    </div>

@include('painel.templates.footer')