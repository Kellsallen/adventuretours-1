<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adventurous | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('dist/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('plugins/iCheck/square/blue.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="#"><b>Administrator Registration</b></a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Create an Account</p>

        <form action="/account" method="post">
            {{csrf_field()}}
            <div class="form-group">
                @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{Session::get('error')}}
                    </div>
                @endif
              
            </div>
            <div class="form-group has-feedback {{$errors->has('name') ? 'has-error':''}}">
                <input type="text" class="form-control" name="name" placeholder="Full name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                               @if($errors->has('name'))
<span class="help-block">{{$errors->first('name')}}</span>
@endif
            </div>
            <div class="form-group has-feedback {{$errors->has('email') ? 'has-error':''}}">
                <input type="email" class="form-control" name="email" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                               @if($errors->has('email'))
<span class="help-block">{{$errors->first('email')}}</span>
@endif
            </div>
            <div class="form-group has-feedback {{$errors->has('password') ? 'has-error':''}}">
                <input type="password" class="form-control"  name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                               @if($errors->has('password'))
<span class="help-block">{{$errors->first('password')}}</span>
@endif
            </div>
            <div class="form-group has-feedback {{$errors->has('password_confirmation') ? 'has-error':''}}">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                               @if($errors->has('password_confirmation'))
<span class="help-block">{{$errors->first('password_confirmation')}}</span>
@endif
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-6">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Create Account</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
                Facebook</a>

        </div>
<hr>
        <a href="{{url('/owner')}}" class="text-center">I already have an account</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="{{url('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{url('plugins/iCheck/icheck.min.js')}}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>