<?php
error_reporting(0);
session_start();
$title="";

if($_REQUEST['a'] == 2 )
{
    echo"<script>alert('Already Exist')</script>";
  
}
if($_REQUEST['a'] == 1)
{
    echo"<script>alert('Insert Succesfully')</script>";
  
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>College Voting</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="../common/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

<style type="text/css">
    
</style>


</head>
<body>

<div class="wrapper">

<div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-4.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                
                  <span style="font-size:20px;color:#FFF;margin-top:12px;text-transform:capitalize;"> GROUP TUTOR <br><span style="font-size:12px;color:#111;">
                </span>
                </span>
               
            </div>

            <ul class="nav" id="menu">
                
                
                <li class="active">
                    <a href="../grouptutor_dashboard/dashboard.php">
                        <i class="pe-7s-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                   

                      <li class="active">
                    <a href="../Profile/profile.php">
                        <i class='far fa-user-circle' style='font-size:24px'></i>
                        <p>MY PROFILE</p>
                    </a>
                </li>


  
                    <li class="active">
                    <a href="../student/select.php">
                        <i class="pe-7s-note2"></i>
                        <p>Students</p>
                    </a>
                </li>


                    <li class="active">
                    <a href="../election/electiondetails.php">
                        <i class="pe-7s-date"></i>
                        <p>Election</p>
                    </a>
                </li>

                  <li class="active">
                    <a href="../nomination/attendence_percentage.php">
                        <i class="pe-7s-add-user"></i>
                        <p>Nominations</p>
                    </a>
                </li>
    <li class="active">
                    <a href="../nomination/publication_home.php">
                        <i class="pe-7s-add-user"></i>
                        <p>Candidate LIST</p>
                    </a>
                </li>
                      <li class="active">
                    <a href="">
                        <i class="pe-7s-cup"></i>
                        <p>Result</p>
                    </a>
                </li>
                       <li class="active">
                    <a href="">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>


             
              <!--    <li>
                    <a href="../login/login.php?logout=1">
                        <i class="pe-7s-bell"></i>
                        <p>Log Out</p>
                    </a>
                </li> -->
               
            	
            </ul>
    	</div>
    </div>
    <div class="main-panel">
    
    
    
    <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <br>
                  
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            
                               
								
                            
                        </li>
                        <!--<li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>-->
                    <!--    <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>-->
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                      
                       
                        <li>
                            <a href="../login/login.php?logout=1">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>