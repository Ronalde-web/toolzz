<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Registro</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
   

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/painel/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/painel/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/painel/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/painel/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{url('assets/painel/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/painel/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{url('assets/painel/global/css/components-md.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{url('assets/painel/global/css/plugins-md.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{url('assets/painel/pages/css/login.min.css')}}" rel="stylesheet" type="text/css" />

</head>
<body class=" login">

<div class="logo">
   
    <img id="logo" src="{{ url('assets/all/imgs/Logo.png') }}" alt="logo-Empresa">
</div>

<div class="content">


    @if( isset($errors) && count($errors) > 0 )
        <div class="alert alert-warning">
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif

    @yield('content-login')





</div>
<div class="copyright"> 2024 © www.Toolzz.com.br </div>
<!--[if lt IE 9]>
<script src="{{url('assets/painel/global/plugins/respond.min.js')}}"></script>
<script src="{{url('assets/painel/global/plugins/excanvas.min.js')}}"></script>
<script src="{{url('assets/painel/global/plugins/ie8.fix.min.js')}}"></script>
<![endif]-->
<script src="{{url('assets/painel/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/painel/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/painel/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/painel/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/painel/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/painel/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/painel/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/painel/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/painel/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/painel/global/scripts/app.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/painel/pages/scripts/login.min.js')}}" type="text/javascript"></script>

</body>

</html>