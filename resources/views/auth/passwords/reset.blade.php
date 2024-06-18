@extends('auth.templates.template')

@section('content-login')

    {!! Form::open(['url' => '/password/reset', 'class' => 'login-form']) !!}
    <h3 class="font-green">Recuperar Senha ?</h3>
    <p> Digite seu e-mail cadastrado</p>

    {!! Form::hidden('token', $token) !!}
    <div class="form-group">
        {!! Form::email('email', null, ['placeholder' => 'E-mail:', 'class'=>'form-control placeholder-no-fix']) !!}
    </div>
    {!! Form::password('password', ['placeholder' => 'Senha:', 'class'=>'form-control placeholder-no-fix']) !!}
    {!! Form::password('password_confirmation', ['placeholder' => 'Senha:', 'class'=>'form-control placeholder-no-fix']) !!}
    <div class="form-actions">
        {!! Form::submit('Resetar', ['class' => 'tn btn-success uppercase pull-right']) !!}

        <a href="{{ url('/login') }}" id="back-btn" class="btn green btn-outlines">Login?</a>
    </div>

    {!! Form::close() !!}

@endsection
