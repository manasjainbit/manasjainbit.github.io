<?php
 session_start();
 if(!isset($_SESSION['user']))
 {
    header("Location: http://localhost:8080/CBSMS/index.php");
 }
include "C:/xampp/htdocs/CBSMS/connection/config.php";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Student Management System</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


   
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

   

	
		<style>

        .card .image {
            height: auto;
            }
        .card-text{
            overflow:auto;
            text-align:center;
        }
        </style>


</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php" class="simple-text">
                    Student Management System
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="index.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>USER PROFILE</p>
                    </a>
                </li>
                <li>
                    <a href="studymaterials.php">
                        <i class="pe-7s-note2"></i>
                        <p>STUDY MATERIALS</p>
                    </a>
                </li>
                
                <li class="active">
                        <a href="buy.php">
                            <i class="pe-7s-cart"></i>
                            <p>BUY</p>
                        </a>
                </li>
                
                <li>
                        <a href="sell.php">
                            <i class="pe-7s-cart"></i>
                            <p>SELL</p>
                        </a>
                </li>
                 <li>
                    <a href="notifications.php">
                        <i class="pe-7s-bell"></i>
                        <p>NOTIFICATIONS</p>
                    </a>
                </li>


            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="buy.php">Buy</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
					<?php
					if(isset($_SESSION['user']))
					{
                       
					?>
						<li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<p>
											Howdy <?php echo $_SESSION['user']['username'];?>
											<b class="caret"></b>
										</p>

								  </a>
								  <ul class="dropdown-menu">
									<li><a href="#">Edit Profile</a></li>
									<li><a href="#">Change Password</a></li>
									<li class="divider"></li>
									<li><a href="http://localhost:8080/CBSMS/Logout.php">Log out</a></li>
								  </ul>
						</li>

					<?php
					}
					
					else
					{
					?>
                        <li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<p>
											Login / Signup
											<b class="caret"></b>
										</p>

								  </a>
								  <ul class="dropdown-menu">
									<li><a href="http://localhost:8080/CBSMS/Login.php">Login</a></li>
									<li><a href="http://localhost:8080/CBSMS/Registration.php">Registration</a></li>
								  </ul>
						</li>

					<?php
					}    
					?> 
							
                    </ul>
                </div>
            </div>
        </nav>

         <div class="content">
            <div class="container-fluid">

                <?php

                $query = "SELECT * FROM product WHERE status = 0";
                $fire = mysqli_query($con,$query);
                if(mysqli_num_rows($fire)>0)
                {
                    while($user = mysqli_fetch_assoc($fire))
                        {
                            
                        ?>
                             
                                <div class="col-md-3 ">
                                    <div class="card">
                                       <div class="image">
                                            <img src="products/<?php echo $user['imageName']; ?>?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                                        </div>
                                        <div class="content card-body">

                                            <div class="table-responsive">          
                                                <table class="table table-condensed">
                                                    <tr>
                                                    <td>Name</td>
                                                    <td><?php echo $user['name']; ?></td>
                                                    </tr>
                                                    <tr>
                                                    <td>Price</td>
                                                    <td> <?php echo $user['price']; ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <p class="card-text"><?php echo $user['details']; ?></p>
                                            <button type="button" class="btn btn-primary center-block" data-toggle="popover" title="Contact No:" data-content="08824444709">
                                                Open modal
                                            </button> 
                                        </div>
                                   </div>
                                </div>
          
                            
                <?php
                }
                ?> 

                <?php
                }
                else
                {
                    echo "No Rows Found";
                }

                ?>  
            </div>
        </div>




        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>

                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Manas Jain</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>


    
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	
	<script src="assets/js/chartist.min.js"></script>

   
    <script src="assets/js/bootstrap-notify.js"></script>

    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	
	<script src="assets/js/demo.js"></script>
  
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>

</html>
