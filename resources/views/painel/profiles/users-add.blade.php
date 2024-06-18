@extends('painel.templates.template')

@section('content')
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{url('/painel')}}">Home </a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="{{url('/painel/perfis')}}">Perfil</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="{{route('profile.users', $profile->id)}}">  Usuários Vinculados </a>
            <i class="fa fa-angle-right"></i>
        </li>

        <li>
            <span>{{$profile->name}}</span>
        </li>
    </ul>
</div>

<div class="content-din">
    @if( isset($errors) && count($errors) > 0 )
        <div class="alert alert-warning">
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif
</div>

<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit portlet-form ">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers "></i> <span class="caption-subject sbold uppercase">  Adicionar Novos Usuários ao Perfil: <b>{{$profile->name}}</b></span>
                </div>
                <div class="actions">   </div>
            </div>
            <div class="portlet-body">
                <div class="form-body">
                        {!! Form::open(['route' => ['profile.users.add', $profile->id], 'class' => 'form form-search form-ds']) !!}
                    <div class="form-group form-md-line-input form-md-floating-label blue-steel ">
                            <div class="md-checkbox-inline">
                                @foreach( $users as $user )
                                <div class="md-checkbox">
                                    {{ Form::checkbox('users[]', $user->id, null,['class' => 'md-check', 'id'=> $user->id]) }}
                                    <label for="{{$user->id}}">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span>  {{ $user->name }}</label>
                                </div>
                                @endforeach
                            </div>
                    </div>
                    <div class="form-actions right">
                        {!! Form::button('<i class="fa fa-check"></i> Registrar',array('class'=>'btn btn-primary', 'type'=>'submit')) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>



@endsection