<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{asset('public/admin/')}}/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="{{asset('public/admin/')}}/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{asset('public/admin/')}}/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="{{asset('public/admin/')}}/assets/css/style.css" rel="stylesheet" />
      <link href="{{asset('public/admin/')}}/assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
             <!--  <img src="{{asset('public/admin/')}}/assets/img/logo.png" alt=""/> -->
             <h3>Admin Login</h3>
                    <div style="color: yellow">
                        <h4>
                        <?php
                        $exceotion = Session::get('exception');

                        if($exceotion)
                        {
                            echo $exceotion;
                            Session::put('exception','');
                        }

                          ?>
                          </h4>
                        
                    </div>
                    <div style="color: green">
                        <h3>
                        <?php
                        $message = Session::get('message');

                        if($message)
                        {
                            echo $message;
                            Session::put('message','');
                        }

                          ?>
                          </h3>
                        
                    </div>
                </div>

       
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                       
                             {!! Form::open(['url' => '/admin-login-check' ,'method' => 'post']) !!}
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email_address" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                
                 <button type="submit" class="btn btn-lg btn-success btn-block">
                    Login
                    <i class=" icon-long-arrow-right"></i>
                </button>


                            </fieldset>
                       {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="{{asset('public/admin/')}}/assets/plugins/jquery-1.10.2.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
