<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Register</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<!-- /.login-logo -->
<div class="card col-md-4">
    <div class="card-header login-logo">
        <b>Register Admin</b>ANIME
    </div>
    <div class="card-body login-card-body">
        <form action="/user/toregist" method="post">
            {{csrf_field()}}
            <div class="row">
                <div class="col">
                    <div class="input-group mb-3 has-feedback">
                        <input type="text" class="form-control" placeholder="Full name" name="name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3 has-feedback">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fa fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3 has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fa fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3 has-feedback">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fa fa-lock"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <!-- /.col -->
                <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <p class="text-center">atau</p>
                <a href="/login" class="btn btn-primary btn-block btn-flat">Login</a>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-card-body -->
</div>
<!-- /.login-box -->
<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
</body>
</html>