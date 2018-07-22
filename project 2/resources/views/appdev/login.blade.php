<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="plugins/images/bewelllogo.ico">
<title>Bewell</title>
<!-- Bootstrap Core CSS -->
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="css/colors/blue.css" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- Preloader -->

<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
  <div class="login-box animated fadeInUp">
    <div class="white-box" style="height: auto; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);  border-radius: 2px; position:relative;">
      {{--  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />  --}}
      {!! Form::open(array('route'=>'login.store','class'=>'form-horizontal form-material','id'=>'loginform'))!!}
      {{--  <form class="form-horizontal" id="loginform" action="login">  --}}
        <h3 class="box-title m-b-20" style="text-align:center;"><img src="plugins/images/bewell.jpg" alt="user-img" width="170"></h3>
        @if(Session::has('failed'))
          <div class="alert alert-danger"> {{Session::get('failed')}} </div>

        
        @endif
        
        <div class="form-group">
            <div class="col-xs-12">
                {{--  <label for="username">User Name</label>  --}}
                <div class="input-group">
                    <div class="input-group-addon"><i class="ti-user"></i></div>
                    {{--  <div class="form-group">  --}}
                        {{--  {!! Form::label('title','Enter Title') !!}  --}}
                    {{--  </div>

                    <div class="form-group">
                        {!! Form::label('body','Enter Body') !!}
                        {!! Form::textarea('body',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary']) !!}
                    </div>  --}}
                      {{--  {!! Form::text('username',null,['class'=>'form-control','placeholder'=>'username','required'=>'','id'=>'username']) !!}  --}}
                    <input style="margin-left:5px;" type="text" required="" class="form-control" name="username" id="username" placeholder="Username"> </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            {{--  <label for="password">Password</label>  --}}
            <div class="input-group">
                <div class="input-group-addon"><i class="ti-lock"></i></div>
                  {{--  {!! Form::password('password',array('class'=>'form-control','placeholder'=>'password','required'=>'','id'=>'password')) !!}  --}}
                <input style="margin-left:5px;" type="password" required="" class="form-control" name="password" id="password" placeholder="Password"> </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-primary pull-left p-t-0">
              <input id="checkbox-signup" type="checkbox">
              <label for="checkbox-signup"> Remember me </label>
            </div>
            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot password</a> </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12"> 
              {{--  {!! Form::button('Log In',['type'=>'submit','class'=>'btn btn-danger btn-lg btn-block text-uppercase waves-effect waves-light']) !!}  --}}
            <button class="btn btn-danger btn-lg btn-block text-uppercase waves-effect waves-light" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="submit">Sign In</button>
          </div>
          <div class="col-xs-12" style="margin-top:10px; margin-bottom:0px;"> 
            {{--  {!! Form::button('Log In',['type'=>'submit','class'=>'btn btn-danger btn-lg btn-block text-uppercase waves-effect waves-light']) !!}  --}}
            <h6 style="font-family:Helvetica,Arial,sans-serif;">2018 © Bewell Nutraceutical Corporation</h6>
          </div>
        </div>
        {!! Form::close() !!}
             
        {{--  <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
            <div class="social"><a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip"  title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a> <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip"  title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a> </div>
          </div>
        </div>  --}}
        {{--  <div class="form-group m-b-0">
          <div class="col-sm-12 text-center">
            <p><a href="register.html" class="text-primary m-l-5"></a></p>
          </div>
        </div>  --}}
      {!! Form::open(array('route'=>'login.store','class'=>'form-horizontal','id'=>'recoverform'))!!}
        <div class="form-group">
          <div class="col-xs-12">
            <h3>Recover Password</h3>
            <p class="text-muted">Enter your company email and instructions will be sent to you! </p>
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Email">
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-danger btn-lg btn-block text-uppercase waves-effect waves-light" style="background-color:#4c87ed;" type="submit">Reset</button>
          </div>
        </div>
      {{--  </form>  --}}
      {!! Form::close() !!}
    </div>
  </div>
</section>
<!-- jQuery -->
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.min.js"></script>
<!--Style Switcher -->
<script src="/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
