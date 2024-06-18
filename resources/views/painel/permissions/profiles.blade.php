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
            <a href="{{url('/painel/permissoes')}}" class="bred">Permissões</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>Perfis da Permissão</span>
            <i class="fa fa-angle-right"></i>
            <span> {{$permission->name}}</span>
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
                    <a href="{{route('permissao.profiles.add', $permission->id)}}" class="btn btn-lg green-meadow ">
                        <i class="fa fa-plus"></i> Adicionar</a>
                </div>
                <div class="col-md-8 col-md-offset-1">


                    {!! Form::open(['route' => ['permissao.profiles.search', $permission->id], 'class'=>'form-horizontal']) !!}
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
                        <th> Nome</th>
                        <th> Label</th>
                        <th> Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($profiles as $profile)
                        <tr>
                            <td>
                                {{$profile->name}}
                            </td>
                            <td>{{$profile->label}}</td>
                            <td>
                                <div class="btn-group ">
                                    <a href="{{route('permissao.profile.delete', [$permission->id, $profile->id])}}" class="btn btn-xs  red">
                                        <i class="fa fa-trash-o"></i> Deletar</a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <p>Nenhum Registro Encontrado</p>
                    @endforelse


                    <div class="modal" id="confirm">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">Delete Confirmation</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you, want to delete?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-primary" id="delete-btn">Delete</button>
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    </tbody>
                </table>
            </div>
            <div class="pull-right">
                @if( isset($dataForm) )
                    {!! $profiles->appends($dataForm)->links() !!}
                @else
                    {!! $profiles->links() !!}
                @endif
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
</div>




@endsection