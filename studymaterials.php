<?php
 session_start();
 if(!isset($_SESSION['user']))
 {
    header("Location: http://localhost:8080/CBSMS/index.php");
 }
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
                <li >
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>USER PROFILE</p>
                    </a>
                </li>
                <li class="active">
                    <a href="studymaterials.php">
                        <i class="pe-7s-note2"></i>
                        <p>STUDY MATERIALS</p>
                    </a>
                </li>
                <li>
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
                    <a class="navbar-brand" href="studymaterials.php">Papers and Notes</a>
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
                <div class="row">
                   <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Exam Papers and Study Materials</h4>
                                <p class="category">Upload Question papers and Study Notes <a href="https://www.dropbox.com/request/AzMUp160X0AefWhOQlz4">here.</a></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Semester</th>
                                    	<th>Download Link</th>
                                    	<th>Browse Subjects</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                            <td><a href="https://www.dropbox.com/sh/54elpzz0000rdmm/AAAWsw-_yfqXFiZt2kfTwP3ca?dl=1""><i class="fa fa-download" aria-hidden="true"></i>click here</a></td>
                                        	<td><a href="http://localhost:8080/CBSMS/git/i.html"><i class="fa fa-download" aria-hidden="true"></i>here</a></td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td><a href="https://www.dropbox.com/sh/qa2ascf27rb35ko/AACK8RD1xcJheWQD1YfDXkora?dl=1"><i class="fa fa-download" aria-hidden="true"></i>click here</a></td>
                                        	<td><a href="http://localhost:8080/CBSMS/git/ii.html"><i class="fa fa-download" aria-hidden="true"></i>here</a></td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>
                                                <div class="legend">
                                                    <a href="https://www.dropbox.com/sh/85gjmtr94y357dr/AABbHR63LtPhvsVGm092PeTTa?dl=1"><i class="fa fa-circle text-info"></i> CSE</a>
                                                    <a href="https://www.dropbox.com/sh/n0kkl0ijljnjpm8/AABaH8ZAvQ7Z7w4aRxVULPdga?dl=1"><i class="fa fa-circle text-danger"></i> ECE</a>
                                                    <a href="https://www.dropbox.com/sh/gqx4i8znoqvijmo/AAAjp1ZBMppBu3ESLeT_TbOua?dl=1"><i class="fa fa-circle text-warning"></i> EEE</a>
                                                </div>
                                            </td>
                                        	<td><a href="http://localhost:8080/CBSMS/git/iii.html"><i class="fa fa-download" aria-hidden="true"></i>here</a></td>
                                        </tr>
                                         <tr>
                                        	<td>4</td>
                                        	<td>
                                                <div class="legend">
                                                    <a href="https://www.dropbox.com/sh/fz1obgz8ds11c9v/AABPr6KZzg5QBuAL7DAQPEula?dl=1"><i class="fa fa-circle text-info"></i> CSE</a>
                                                    <a href="https://www.dropbox.com/sh/35gf8cwfi0zq5ok/AABgUtyMSVxAvy6P93q5m-jKa?dl=1"><i class="fa fa-circle text-danger"></i> ECE</a>
                                                    <a href="https://www.dropbox.com/sh/9rhtd9nb37eq3sb/AAC93fWRqR1o4pObHTSafplva?dl=1"><i class="fa fa-circle text-warning"></i> EEE</a>
                                                </div>
                                            </td>
                                        	<td><a href="http://localhost:8080/CBSMS/git/iv.html"><i class="fa fa-download" aria-hidden="true"></i>here</a></td>
                                        </tr>
                                         <tr>
                                        	<td>5</td>
                                        	<td>
                                                <div class="legend">
                                                    <a href="https://www.dropbox.com/sh/r87kstkk5jkbi0r/AABIUc_w3GpyT-DDGxAT7jUNa?dl=1"><i class="fa fa-circle text-info"></i> CSE</a>
                                                    <a href="https://www.dropbox.com/sh/e4qvlzocr5c6tmn/AAB0qSVDygGPRl1OgOrLtsCya?dl=1"><i class="fa fa-circle text-danger"></i> ECE</a>
                                                    <a href="https://www.dropbox.com/sh/o4arpzvyrksd71v/AAC3BAS_rUZUntf58yqKXWbOa?dl=1"><i class="fa fa-circle text-warning"></i> EEE</a>
                                                </div>
                                            </td>
                                        	<td><a href="http://localhost:8080/CBSMS/git/v.html"><i class="fa fa-download" aria-hidden="true"></i>here</a></td>
                                        </tr>
                                         <tr>
                                        	<td>6</td>
                                        	<td>
                                                <div class="legend">
                                                    <a href="https://www.dropbox.com/sh/4aba231ahv8h5w7/AABTl-EwvUpamwDJF_KUJhCYa?dl=1"><i class="fa fa-circle text-info"></i> CSE</a>
                                                    <a href="https://www.dropbox.com/sh/2kz6vck986rblsn/AAAqzbbFTzlRk9QKcxeavlpea?dl=1"><i class="fa fa-circle text-danger"></i> ECE</a>
                                                    <a href="https://www.dropbox.com/sh/5o6mhgx8gssxaed/AADl2gxGPz8Egv8xwDE-tHdDa?dl=1"><i class="fa fa-circle text-warning"></i> EEE</a>
                                                </div>
                                            </td>
                                        	<td><a href="http://localhost:8080/CBSMS/git/vi.html"><i class="fa fa-download" aria-hidden="true"></i>here</a></td>
                                        </tr>
                                        <tr>
                                        	<td>7</td>
                                        	<td>
                                                <div class="legend">
                                                    <a href="https://www.dropbox.com/sh/7jzwuqklu1ccw1r/AABwQtndjnSGX7BZtmCexAuxa?dl=1"><i class="fa fa-circle text-info"></i> CSE</a>
                                                    <a href="https://www.dropbox.com/sh/csu40umw4cmmvrm/AABD2JdObIFiKf7p0GsOypWPa?dl=1"><i class="fa fa-circle text-danger"></i> ECE</a>
                                                    <a href="https://www.dropbox.com/sh/jabveu6gzuolhpa/AADiRN6HDaYkJh_T9-ZcJ1W9a?dl=1"><i class="fa fa-circle text-warning"></i> EEE</a>
                                                </div>
                                            </td>
                                        	<td><a href="http://localhost:8080/CBSMS/git/vii.html"><i class="fa fa-download" aria-hidden="true"></i>here</a></td>
                                        </tr>
                                        <tr>
                                        	<td>8</td>
                                        	<td>
                                                <div class="legend">
                                                    <a href="https://www.dropbox.com/sh/cyw15exuq4e1ytt/AACoBh4iHUXZCeCxLMcjtx4Ha?dl=1"><i class="fa fa-circle text-info"></i> CSE</a>
                                                    <a href="https://www.dropbox.com/sh/gr1yuqsuck1mqv1/AABHn_MQC35buj2tRwiKu-9da?dl=1"><i class="fa fa-circle text-danger"></i> ECE</a>
                                                    <a href="https://www.dropbox.com/sh/gvbodtwhs2k9trj/AADd6i304hjuerzh4XiWNp32a?dl=1"><i class="fa fa-circle text-warning"></i> EEE</a>
                                                </div>
                                            </td>
                                        	<td><a href="http://localhost:8080/CBSMS/git/viii.html"><i class="fa fa-download" aria-hidden="true"></i>here</a></td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
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

</html>
