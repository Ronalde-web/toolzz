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
                <span>Usuários</span>
            </li>
        </ul>
    </div>

    @if( Session::has('success') )
        <div class="alert alert-success hide-msg" style="float: left; width: 100%; margin: 10px 0px;">
            {{Session::get('success')}}
        </div>
    @endif



    <div class="row">
        <div class="col-md-12">
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption">
                        <a href="{{route('usuarios.create')}}" class="btn btn-lg green-meadow ">
                            <i class="fa fa-plus"></i> Adicionar</a>
                    </div>
                    <div class="col-md-8 col-md-offset-1">
                        {!! Form::open(['route' => 'usuarios.search', 'class'=>'form-horizontal']) !!}
                        <div class="form-group form-md-line-input">
                            <div class="col-md-10">
                                <div class="input-group input-group">

                                    <div class="input-group-control">
                                        {!! Form::text('key-search', null, ['class' => 'form-control input-lg']) !!}

                                        <div class="form-control-focus"></div>
                                    </div>
                                    <span class="input-group-btn btn-right">
                        {!! Form::button('<i class="fa fa-search"></i> Pesquisar',array('class'=>'btn green', 'type'=>'submit')) !!}
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}

                    <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"
                               data-original-title="" title=""> </a>
                        </div>
                    </div>
                </div>


                <div class="portlet-body">

                    <table class="table table-hover table-light">
                        <thead>
                        <tr class="uppercase">
                            <th colspan="2"> Nome</th>
                            <th> Contato</th>
                            <th> Email</th>                            
                            <th> Telefone</th>
                            <th> Celular</th>                           
                            <th> Ações</th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($data as $v)
                            <tr>
                                <td>{{$v->name}}</td>
                                <td>{{$v->contato}}</td>
                                <td>{{$v->email}}</td>
                                <td>{{$v->telefone}}</td>
                                <td>{{$v->celular}}</td>                             
                                <td>
                                    <div class="btn-group ">
                                        <a href='{{route('usuarios.edit', $v->id)}}' class="btn  btn-xs  blue">
                                            <i class="fa fa-edit"></i> Editar</a>
                                        <a href="{{route('usuarios.show', $v->id)}}" class="btn btn-xs  red">
                                            <i class="fa fa-trash-o"></i> Deletar</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <p>Nenhum Registro Encontrado</p>
                        @endforelse


                        </tbody>
                    </table>
                </div>
                <div class="pull-right">
                @if( isset($dataForm) )
                    {!! $data->appends($dataForm)->links() !!}
                @else
                    {!! $data->links() !!}
                @endif
                    </div>

                <div class="clearfix"></div>

            </div>


        </div>
    </div>


@endsection