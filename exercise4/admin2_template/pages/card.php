<?php 
// Start session 
session_start(); 
// Include required functions file 
require_once('include/functions.inc.php'); 
// Check login status... if not logged in, redirect to login screen 
if (check_login_status() == false) { 
redirect('login.html'); 
} 
?> 


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
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
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="include/logout.inc.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="person.php"><i class="fa fa-bar-chart-o fa-fw"></i> Profile</a>
                        </li>
                        <li>
                            <a href="card.php"><i class="fa fa-table fa-fw"></i> Card Info</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Card Info (Angular)</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Card Statement</a>
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Transactions</a>
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Search News</span>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        </div>-->
            <div id="page-wrapper">
                <!--<div class="row">-->
                <!--      <div class="col-lg-12">-->
         
                <!--        <div class="chat-panel panel panel-default">-->
                <!--                        <div class="panel-heading">-->
                                            
                <!--                            <i class="fa fa-comments fa-fw"></i>Information about <?php echo $no_row; ?> people -->
                <!--                            <div class="btn-group pull-right">-->
                <!--                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">-->
                <!--                                    <i class="fa fa-chevron-down"></i>-->
                <!--                                </button>-->
                <!--                                <ul class="dropdown-menu slidedown">-->
                <!--                                    <li>-->
                <!--                                        <a href="#">-->
                <!--                                            <i class="fa fa-refresh fa-fw"></i> Refresh-->
                <!--                                        </a>-->
                <!--                                    </li>-->
                <!--                                    <li>-->
                <!--                                        <a href="#">-->
                <!--                                            <i class="fa fa-check-circle fa-fw"></i> Available-->
                <!--                                        </a>-->
                <!--                                    </li>-->
                <!--                                    <li>-->
                <!--                                        <a href="#">-->
                <!--                                            <i class="fa fa-times fa-fw"></i> Busy-->
                <!--                                        </a>-->
                <!--                                    </li>-->
                <!--                                    <li>-->
                <!--                                        <a href="#">-->
                <!--                                            <i class="fa fa-clock-o fa-fw"></i> Away-->
                <!--                                        </a>-->
                <!--                                    </li>-->
                <!--                                    <li class="divider"></li>-->
                <!--                                    <li>-->
                <!--                                        <a href="#">-->
                <!--                                            <i class="fa fa-sign-out fa-fw"></i> Sign Out-->
                <!--                                        </a>-->
                <!--                                    </li>-->
                <!--                                </ul>-->
                <!--                            </div>-->
                <!--                        </div>-->
                                        <!-- /.panel-heading -->
                <!--                        <div class="panel-body" ng-app="myApp" ng-controller="CardCtrl">-->
                <!--                            <ul class="chat">-->
                <!--                                <table>-->
                <!--                                    <thead>-->
                <!--                    				<tr>-->
                <!--                    					<th>Name</th>-->
                <!--                    					<th>Number</th>-->
                <!--                    					<th>Issuer</th>-->
                <!--                    					<th>Expire</th>-->
                <!--                    					<th>Limit</th>-->
                <!--                    					<th>Currency</th>-->
                <!--                    				</tr>-->
                <!--                    			</thead>-->
                <!--                    			<tbody>-->
                <!--                    				<tr ng-repeat="i in myData">-->
                <!--                    					<td>{{i.name}}</td>-->
                <!--                    					<td>{{i.number}}</td>-->
                <!--                    					<td>{{i.issuer}}</td>-->
                <!--                    					<td>{{i.exp}}</td>-->
                <!--                    					<td>{{i.limit}}</td>-->
                <!--                    					<td>{{i.currency}}</td>-->
                <!--                    				</tr>-->
                <!--                    			</tbody>-->
                <!--                                </table>-->
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                        <div class="panel-footer">-->
                <!--                            <div class="input-group">-->
                <!--                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />-->
                <!--                                <span class="input-group-btn">-->
                <!--                                    <button class="btn btn-warning btn-sm" id="btn-chat">-->
                <!--                                        Send-->
                <!--                                    </button>-->
                <!--                                </span>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Card Information
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" ng-app="myApp" ng-controller="CardCtrl">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <thead>
                                    		    <tr>
                                    				<th>Name</th>
                                    				<th>Number</th>
                                    				<th>Issuer</th>
                                    				<th>Expire</th>
                                    				<th>Limit</th>
                                    				<th>Currency</th>
                                    			</tr>
                                    		</thead>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<tr ng-repeat="i in myData">
                                    		        <td>{{i.name}}</td>
                                    		        <td>{{i.number}}</td>
                                    				<td>{{i.issuer}}</td>
                                    				<td>{{i.exp}}</td>
                                    				<td>{{i.limit}}</td>
                                    				<td>{{i.currency}}</td>
                                    	</tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                                        
                </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script src="angular.min.js"></script>

    <script>
	//add code here
	var app = angular.module('myApp',[]);
	app.controller('CardCtrl', function($scope,$http){
		$http.get("cardinfojson.php").then(function(response){ 	//or call php file directly
			$scope.myData = response.data;  		//myData can change to any value
		}); 
		
	});
	</script>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../vendor/flot/excanvas.min.js"></script>
    <script src="../vendor/flot/jquery.flot.js"></script>
    <script src="../vendor/flot/jquery.flot.pie.js"></script>
    <script src="../vendor/flot/jquery.flot.resize.js"></script>
    <script src="../vendor/flot/jquery.flot.time.js"></script>
    <script src="../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../data/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>


