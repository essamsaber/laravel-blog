
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>تسجيل دخول المدير</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{url('back/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>

  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('back/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{url('back/dist/css/custom.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('back/plugins/iCheck/square/blue.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{url('/admin')}}"><b>لوحة التحكم</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">تسجيل الدخول للوحة التحكم</p>

    <form action="{{url('/login')}}" method="POST">
    {{csrf_field()}}
      <div class="form-group has-feedback">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <input name="email" type="email" class="form-control" placeholder="البريد الإلكتروني">
      </div>
      <div class="form-group has-feedback">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <input name="password" type="password" class="form-control" placeholder="كلمة المرور">
      </div>
      <div class="row">
        <div class="col-xs-8 pull-right logininput">
          <div class="checkbox icheck">
            <label>
             تذكرني <input type="checkbox" name="remember_me"> 
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4 pull-left">
          <button type="submit" class="btn btn-primary btn-flat">تسجيل الدخول</button>
        </div>
        <!-- /.col -->
      </div>
      <div class="form-group">
        @include('errors.form-errors')
      </div>
    </form>

    <div class="pull-right">
      
    <a href="#">نسيت كلمة المرور؟</a><br>
    </div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="{{url('back/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{url('back/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{url('back/plugins/iCheck/icheck.min.js')}}"></script>
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
