<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Authentication &middot; Gazzete CMS</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href='{!! url("vendor/admin-lte/bootstrap/css/bootstrap.min.css") !!}' rel='stylesheet' type='text/css'/>
    <link href='{!! url("vendor/fontawesome/css/font-awesome.min.css") !!}' rel='stylesheet' type='text/css'/>
    <link href='{!! url("vendor/admin-lte/dist/css/AdminLTE.min.css") !!}' rel='stylesheet' type='text/css'/>
    <link href='{!! url("vendor/admin-lte/plugins/iCheck/square/blue.css") !!}' rel='stylesheet' type='text/css'/>

    <!--[if lt IE 9]>
    <script src='{!! url("vendor/html5shiv/dist/html5shiv.min.js") !!}'></script>
    <script src='{!! url("vendor/respond/dest/respond.min.js") !!}'></script><![endif]-->

</head>
<body class="login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="../../index2.html" method="post">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label> <input type="checkbox"> Remember Me </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src='{!! url("vendor/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js") !!}'></script>
<script src='{!! url("vendor/admin-lte/bootstrap/js/bootstrap.min.js") !!}'></script>
<script src='{!! url("vendor/admin-lte/plugins/iCheck/icheck.min.js") !!}'></script>
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
