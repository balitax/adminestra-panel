<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>{{$title}}</title>
    {{HTML::style('assets/admin/bootstrap/css/bootstrap.min.css')}}
    {{HTML::style('assets/admin/assets/css/main.css')}}
    {{HTML::style('assets/admin/assets/css/plugins.css')}}
    {{HTML::style('assets/admin/assets/css/responsive.css')}}
    {{HTML::style('assets/admin/assets/css/icons.csss')}}
    {{HTML::style('assets/admin/assets/css/login.css')}}
    {{HTML::style('assets/admin/assets/css/fontawesome/font-awesome.min.css')}}
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    {{HTML::script('assets/admin/assets/js/libs/jquery-1.10.2.min.js')}}
    {{HTML::script('assets/admin/bootstrap/js/bootstrap.min.js')}}
</head>

<body class="login">
    <!-- Logo -->
    <div class="logo">
        <img src="{{asset('assets/admin/assets/img/bee.png')}}" alt="logo" />
        <strong>BEE</strong>PANEL
    </div>

    <div class="box">
        @if(Session::has('eror'))
            {{Session::get('eror')}}
        @endif
        @if(Session::has('logout'))
            {{Session::get('logout')}}
        @endif
        <div class="content">
            {{ Form::open(array('url' => 'auth')) }}
                <h3 class="form-title">Sign In to your Account</h3>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <div class="input-icon">
                        <i class="icon-user"></i>
                        <input type="text" name="username" class="form-control" placeholder="Username" autofocus="autofocus" data-rule-required="true" data-msg-required="Please enter your username." />
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <div class="input-icon">
                        <i class="icon-lock"></i>
                        <input type="password" name="password" class="form-control" placeholder="Password" data-rule-required="true" data-msg-required="Please enter your password." />
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="submit btn btn-primary pull-right">
                        Sign In <i class="icon-angle-right"></i>
                    </button>
                </div>
             {{ Form::close() }}

        </div> 
    </div>

    <div class="footer">
        <a href="http://mitradesain.co.id" class="sign-up">Developed by<strong> Mitra Desain</strong></a>
    </div>
    <!-- /Footer -->
</body>
</html>