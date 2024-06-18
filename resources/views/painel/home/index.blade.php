@extends('painel.templates.template')

@section('content')

@can('veiculos')

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="/">Dashboard</a>
        </li>
    </ul>
    <div class="page-toolbar">          
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <h2>
                {{$totalUser}}
            </h2>
            <h3>
                Total de Usuários
            </h3>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <h2 class="result">
                {{$totalCategories}}
            </h2>
            <h3 class="result-ds">
                Total de Categorias
            </h3>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <i class="fa fa-file-text" aria-hidden="true"></i>
            <h2 class="result">
                {{$totalPosts}}
            </h2>
            <h3 class="result-ds">
                Total de Posts
            </h3>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <i class="fa fa-comments" aria-hidden="true"></i>
            <div class="text-rel">
                <h2 class="result">
                    {{$totalComments}}
                </h2>
                <h3 class="result-ds">
                    Total de Comentários
                </h3>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <i class="fa fa-users" aria-hidden="true"></i>
            <div class="text-rel">
                <h2 class="result">
                    {{$totalProfiles}}
                </h2>
                <h3 class="result-ds">
                    Total de Perfis
                </h3>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
            <div class="text-rel">
                <h2 class="result">
                    {{$totalPermissions}}
                </h2>
                <h3 class="result-ds">
                    Total de Permissões
                </h3>
            </div>
        </div>
    </div>
</div>

@endcan
            <div id='img'class="col-8 gap-3">
                        <img src="{{ url('assets/all/imgs/Logo.png') }}" alt="logo-Empresa">
                    </div>
<br>
    <div class="row">
        <div class="col-12">
            <div class="alert alert-info">
                <h1>Bem-vindo!</h1>
                <p>Você está logado como visitante. Algumas funcionalidades podem estar limitadas.</p>
            </div>
        </div>
    </div>


@endsection
<script>
#img {
    justify-content:center;
}
</script>