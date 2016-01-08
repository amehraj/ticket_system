<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SCL Home</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href=""><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                        <li>
                            <a href=""><i class="fa fa-table fa-fw"></i> View Tickets</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-edit fa-fw"></i> Create A Ticket</a>
                        </li>
                        
                        
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Search Tickets</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ticket Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="">
                                        <div class="form-group">
                                            <label>Client ID</label>
                                            <input type="text" name="client_id" id="client_id"class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Ticket ID</label>
                                            <input type="text" name="ticket_id" id="ticket_id"class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Client Priority</label>
                                            <select name="problem_cat"id="client_priority"name="client_priority"class="form-control">
                                                <option>VVIP</option>
                                                <option>Category-A</option>
                                                <option>Category-B</option>
                                                <option>Category-C</option>
                                                
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Link Type</label>
                                            <select name="problem_cat"id="link_type"name="link_type"class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Problem Category</label>
                                            <select name="problem_cat"id="problem_cat"class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Problem Source</label>
                                            <select name="problem_src" id="problem_src"class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Region</label>
                                            <select name="region" id="region"class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>District</label>
                                            <select name="district" id="district"class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Reason</label>
                                            <select name="reason" id="reason"class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Problem Source</label>
                                            <select name="problem_src"id="problem_src"class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Event Time</label>
                                            <input type="datetime-local" name="event_time"id="event_time"class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Link Name</label>
                                            <input type="text" name="link_name" id="link_name"class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Client Impact</label>
                                            <textarea class="form-control" name="client_impact"id="client_impact"rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Client Site Count</label>
                                            <input type="text" name="client_site_count" id="client_site_count"class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Vendor Impact</label>
                                            <textarea class="form-control" name="vendor_impact"id="vendor_impact"rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Vendor Site Count</label>
                                            <input type="text" name="vendor_site_count" id="vendor_site_count"class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Responsible Vendor</label>
                                            <input type="text" name="responsible_vendor" id="responsible_vendor"class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Responsible Concern</label>
                                            <input type="text" name="responsible_concern" id="responsible_concern"class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <textarea name="remark"id="remark"class="form-control" rows="5"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Ticket Status</label>
                                            <select name="problem_src"id="problem_src"class="form-control">
                                                <option>Open</option>
                                                <option>Processing</option>
                                                <option>Resolved</option>
                                                <option>Closed</option>
                                              
                                            </select>
                                        </div>
                                        
                                        
        
                                       
                                        <button type="submit" class="btn btn-info">Search Ticket</button>
                                        <button type="reset" class="btn btn-danger">Reset All</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   <!-- jQuery -->
   <script src="{{asset('/bower_components/jquery/dist/jquery.min.js')}}"></script>

   <!-- Bootstrap Core JavaScript -->
   <script src="{{asset('/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

   <!-- Metis Menu Plugin JavaScript -->
   <script src="{{asset('/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

   <!-- Custom Theme JavaScript -->
   <script src="{{asset('/dist/js/sb-admin-2.js')}}"></script>

</body>

</html>
