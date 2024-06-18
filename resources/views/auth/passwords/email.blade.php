@extends('auth.templates.template')

@section('content-login')

    {!! Form::open(['url' => '/password/email', 'class' => 'login-form']) !!}
    <h3 class="font-green">Recuperar Senha ?</h3>
    <p> Digite seu e-mail cadastrado</p>
    <div class="form-group">
        {!! Form::email('email', null, ['placeholder' => 'E-mail:', 'class'=>'form-control placeholder-no-fix']) !!}
    </div>

    <div class="form-actions">
        <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
        {!! Form::submit('Recuperar', ['class' => 'btn btn-success uppercase pull-right']) !!}
    </div>

    {!! Form::close() !!}


@endsection
