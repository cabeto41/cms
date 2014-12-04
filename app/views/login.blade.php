<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Webarch - Responsive Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN CORE CSS FRAMEWORK -->
    {{ HTML::style('assets/dashboard/plugins/pace/pace-theme-flash.css') }}
    {{ HTML::style('assets/dashboard/plugins/boostrapv3/css/bootstrap.min.css') }}
    {{ HTML::style('assets/dashboard/plugins/boostrapv3/css/bootstrap-theme.min.css') }}
    {{ HTML::style('assets/dashboard/plugins/font-awesome/css/font-awesome.css') }}
    {{ HTML::style('assets/dashboard/css/animate.min.css') }}
    <!-- END CORE CSS FRAMEWORK -->
    <!-- BEGIN CSS TEMPLATE -->
    {{ HTML::style('assets/dashboard/css/style.css') }}
    {{ HTML::style('assets/dashboard/css/responsive.css') }}
    {{ HTML::style('assets/dashboard/css/custom-icon-set.css') }}

    <!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="error-body no-top lazy" data-original="assets/dashboard/img/work.jpg"  style="background-image: url('assets/dashboard/img/work.jpg')">
<div class="container">
{{ Form::open(['url' => 'login', 'autocomplete' => 'off', 'class' => 'animated fadeIn', 'role' => 'form']) }}
    <div class="row login-container animated fadeInUp">
        <div class="col-md-7 col-md-offset-2 tiles white no-padding">
            <div class="p-t-30 p-r-20 p-l-20 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10">
                <h2 class="normal">Sign in to CMS - Caboose Lake</h2>
                <p>LogIn to Content Manager System for site Caboose Lake<br></p>
                @if(Session::has('error_message'))
                <div class="alert alert-error">
                    <button class="close" data-dismiss="alert"></button>
                    {{ Session::get('error_message') }}
                </div>
                @endif
            </div>
            <div class="tiles grey p-t-20 p-b-20 text-black">
                <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                    <div class="col-md-6 col-sm-6 ">
                        {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username', 'autofocus' => '']) }}
                    </div>
                    <div class="col-md-6 col-sm-6">
                        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                    </div>
                </div>
                <div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                    <div class="control-group  col-md-10">
                        {{ Form::submit('Log in', ['class' => 'btn btn-primary btn-cons']) }}
                        <a href = "{{ route('index') }}" class="btn btn-info btn-cons">Back</a>
                        <div class="checkbox checkbox check-success">
                            <label>
                                {{ Form::checkbox('remember', true) }} Remember me
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{ Form::close() }}
</div>
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/dashboard/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/dashboard/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/dashboard/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/dashboard/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/dashboard/plugins/jquery-lazyload/jquery.lazyload.min.js" type="text/javascript"></script>
<script src="assets/dashboard/js/login_v2.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<!-- END CORE TEMPLATE JS -->
</body>

</html>
