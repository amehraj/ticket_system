<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <title>SCL Ticketing System</title>
</head>
   <body>
   <div class="container">
       <div class="row">
        <h2><center>Welcome to SCL Ticketing System</center></h2>
           <div class="col-md-4 col-md-offset-4">
               <div class="login-panel panel panel-default">
                   <div class="panel-heading">
                       <h3 class="panel-title">Please Sign In</h3>
                   </div>
                   <div class="panel-body">
                       <form role="form" action="{{ url('authenticate_login') }}" method="POST">
                           <fieldset>
                               <div class="form-group">
                                   <input class="form-control" placeholder="User ID" name="user_id" type="text" autofocus>
                               </div>
                               <div class="form-group">
                                   <input class="form-control" placeholder="Password" name="user_password" type="password" value="">
                               </div>
                               <div class="checkbox">
                                   <label>
                                       <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                   </label>
                               </div>
                               <input type="hidden" value="{{csrf_token()}}" name="_token">
                               <!-- Change this to a button or input when using this as a form -->
                               <input type="submit"class="btn btn-lg btn-success btn-block" value="Login">
                               <!-- <a href="" class="btn btn-lg btn-success btn-block">Login</a> -->
                           </fieldset>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <!-- jQuery -->
   <script src="{{asset('/bower_components/jquery/dist/jquery.min.js')}}"></script>

   <!-- Bootstrap Core JavaScript -->
   <script src="{{asset('/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

   <!-- Metis Menu Plugin JavaScript -->
   <script src="{{asset('/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

   <!-- Custom Theme JavaScript -->
   <script src="{{asset('/dist/js/sb-admin-2.js')}}"></script>








   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
   </body>
</html>