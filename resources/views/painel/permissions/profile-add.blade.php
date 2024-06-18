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
            <a href="{{url('/painel/permissoes')}}">Permissões</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="{{route('permissao.perfis', $permission->id)}}"> {{$permission->name}}</a>
            <i class="fa fa-angle-right"></i>
        </li>

        <li>
            <span>{{$permission->name}}</span>
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
                    <i class=" icon-layers "></i> <span class="caption-subject sbold uppercase">Adicionar Novos Perfis a Permissão: <b>{{$permission->name}}</b></span>
                </div>
                <div class="actions">   </div>
            </div>
            <div class="portlet-body">
                <div class="form-body">
                   {!! Form::open(['route' => ['permissao.profiles.add', $permission->id], 'class' => 'form form-search form-ds']) !!}
                 <div class="form-group form-md-line-input form-md-floating-label blue-steel ">
                        <div class="md-checkbox-inline">
                            @foreach( $profiles as $profile )
                                <div class="md-checkbox">
                                    {{ Form::checkbox('profiles[]', $profile->id, null,['class' => 'md-check', 'id'=> $profile->id]) }}
                                    <label for="{{$profile->id}}">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span>  {{ $profile->name }}</label>
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