@extends('painel.templates.template')

@section('content')
<div class="bred">
    <a href="{{url('/painel')}}" class="bred">Home  > </a>
    <a href="{{url('/painel/usuarios')}}" class="bred">Usuários > Listagem do Usuário {{$data->name}} </a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Usuário: <b>{{$data->name}}</b></h1>
</div>

<div class="content-din">
    @if( isset($errors) && count($errors) > 0 )
    <div class="alert alert-warning">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>
    @endif
    
    <h2><strong>Nome:</strong> {{$data->name}}</h2>
    <h2><strong>Email:</strong> {{$data->email}}</h2>
    <h2><strong>Contato:</strong> {{$data->contato}}</h2>
    <h2><strong>Telefone:</strong> {{$data->telefone}}</h2>
    <h2><strong>Celular:</strong> {{$data->celular}}</h2>
       {!! Form::open(['route' => ['usuarios.destroy', $data->id], 'class' => 'form form-search form-ds', 'method' => 'DELETE']) !!}
        <div class="form-group">
            {!! Form::submit("Deletar Usuário: $data->name", ['class' => 'btn btn-danger']) !!}
        </div>
    {!! Form::close() !!}

</div><!--Content DinÃ¢mico-->

@endsection