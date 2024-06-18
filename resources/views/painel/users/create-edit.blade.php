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
                <a href="{{url('/painel/usuarios')}}">Usuários </a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>

                @if( isset($user) )
                    <span>Editar</span>
                @else
                    <span>Novo</span>
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


    </div><!--Content DinÃ¢mico-->


    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
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
                            {!! Form::model($data, ['route' => ['usuarios.update', $data->id], 'class' => '', 'files' => true, 'method' => 'PUT']) !!}
                        @else
                            {!! Form::open(['route' => 'usuarios.store', 'class' => '', 'files' => true]) !!}
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
                                    <div class="input-group">
                                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                                        <span class="input-group-addon">
                                  <i class="fa fa-envelope"></i>
                                </span>
                                        <label>Email</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input form-md-floating-label blue-steel ">
                                    {!! Form::password('password', [ 'class' => 'form-control']) !!}
                                    <label>Senha</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input form-md-floating-label blue-steel ">
                                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                                    <label>Confirmar Senha</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-md-line-input form-md-floating-label blue-steel ">
                                    {!! Form::text('contato', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <label>Contato</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-md-line-input form-md-floating-label blue-steel ">
                                    {!! Form::text('telefone', null, ['class' => 'telefone form-control']) !!}
                                    <label>Telefone</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group form-md-line-input form-md-floating-label blue-steel ">
                                    {!! Form::text('celular', null, ['class' => 'telefone form-control']) !!}
                                    <label>Celular</label>
                                </div>
                            </div>                           
                        </div>
                        
                        <div class="row">

                        <div class="form-actions right">
                            {!! Form::button('<i class="fa fa-check"></i> Registrar',array('class'=>'btn btn-primary', 'type'=>'submit')) !!}
                        </div>
                        {!! Form::close() !!}

                    </div>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>


@endsection


<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>



<script>
  $('.cpf').mask('000.000.000-00', {reverse: true});
  $('.telefone').mask('(00)00000-0000');
  $('.cep').mask('00000-000');
  $('.date').mask('0000/00/00');
</script>