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
                <a href="{{url('/painel/posts')}}">Post </a>
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
        {!! Form::model($data, ['route' => ['posts.update', $data->id], 'class' => 'form form-search form-ds', 'files' => true, 'method' => 'PUT']) !!}
    @else
        {!! Form::open(['route' => 'posts.store', 'class' => 'form form-search form-ds', 'files' => true]) !!}
    @endif

        <div class="row">
            <div class="col-md-4">
                <div class="form-group form-md-line-input form-md-floating-label ">
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    <label>Título</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group form-md-line-input form-md-floating-label ">
                    {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
                    <label>Sub-Título</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group form-md-line-input form-md-floating-label">
                    {!! Form::text('url', null, [ 'class' => 'form-control']) !!}
                    <label>Url</label>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="form-group form-md-line-input form-md-floating-label blue-steel ">
                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control edited']) !!}
                    <label for="form_control_1">Categoria</label>
                </div>
            </div>



            <div class="col-md-4">
                <div class="form-group form-md-line-input blue-steel">
                    {!! Form::date('date', null, ['class' => 'form-control']) !!}
                    <label>Data</label>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group form-md-line-input  blue-steel ">
                    {!! Form::time('hour', null, ['class' => 'form-control']) !!}
                    <label>Hora</label>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="form-group form-md-line-input blue-steel">

                    {!! Form::select('status', ['A' => 'Ativo', 'R' => 'Rascunho'], null, ['class' => 'form-control']) !!}
                    <label>Status</label>
                </div>
            </div>



            <div class="col-md-4">
                <div class="md-checkbox-inline">
                    <div class="md-checkbox">
                       <!-- <input type="checkbox" id="checkbox1_3" name="checkboxes2[]" value="1" class="md-check"> -->

                        {{ Form::checkbox('featured',1, null, ['class' => 'md-check', 'id'=>'checkbox1_1' ]) }}
                        <label for="checkbox1_1">
                            <span class="inc"></span>
                            <span class="check"></span>
                            <span class="box"></span> Destaque? </label>
                    </div>

                </div>
            </div>

        </div>


        <div class="form-group form-md-line-input form-md-floating-label blue-steel ">
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            <label>Descrição</label>


        </div>
        <div class="form-group form-md-line-input form-md-floating-label blue-steel ">
            {!! Form::file('image', ['class' => 'form-control']) !!}
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

@push('scripts')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
@endpush