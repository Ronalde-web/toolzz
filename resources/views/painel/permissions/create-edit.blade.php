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
            <a href="{{url('/painel/permissoes')}}">Permissões </a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>

            @if( isset($data) )
                <span>Editar</span>
            @else
                <span>Nova</span>
            @endif

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

                    @if( isset($data) )
                        <i class=" icon-layers"></i>
                        <span class="caption-subject sbold uppercase">Editar</span>
                    @else
                        <i class=" icon-layers "></i>
                        <span class="caption-subject  sbold uppercase">Novo</span>
                    @endif
                </div>
                <div class="actions">

                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->

                <div class="form-body">
                    @if( isset($data) )
                        {!! Form::model($data, ['route' => ['permissoes.update', $data->id], 'class' => 'form form-search form-ds', 'files' => true, 'method' => 'PUT']) !!}
                    @else
                        {!! Form::open(['route' => 'permissoes.store', 'class' => 'form form-search form-ds', 'files' => true]) !!}
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label blue-steel ">
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                <label>Nome</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">

                                {!! Form::text('label', null, [ 'class' => 'form-control']) !!}
                                <label>Descrição</label>

                            </div>
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