<?php
    session_start();
    if(isset($_SESSION['user']))
    {
            $admin = $_SESSION['user'];
    }

?>
<!Doctype html>
<html>
    <head>
        <title>CBSMS</title>
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
                    <a class="navbar-brand" href="http://localhost:8080/CBSMS/index.php">Welcome</a>
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
                <div class="card">
                    <div class="header">
                        <h4 class="title">Exam Papers and study material (For all B.E. students)</h4>
                    </div>
                     <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><strong>Motivation</strong></h4>
                                <hr>
                                <p>This project was started by Manas Jain and Shubham Gaur during the PG DAC Course. The motivation was to improve the way we share exam papers and study materials during the semesters.<br>
It is no surprise that the same material is provided to every new batch. Lots of emails from the CR (Class Representative) are forwarded and WhatsApp groups are filled with queries like "Please send <subject> paper" during exam time. And the quality of images recieved of papers were very bad (most of the time).<br>
This website aims to remove all those inefficiencies by creating a simple solution to the above problem. Let's not burden CR with all the work. They are not just there to send us all the materials. People should make an effort to get themselves what they want.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h4><strong>Choosing an Online Storage service to store files</strong></h4>
                                <hr>
                                <p>I chose Dropbox to store all the files. One of the main issues was to get enough bandwidth in a free-tier - there is a daily limit to the amount of bandwidth that can be used in free-tier. Even though the storage provided in Dropbox's free-tier was less, the bandwidth limits seemed fine. I decided to put a backup in MediaFire (for progress on this, check Projects tab above) because it does not have bandwidth limitations but it has following disadvantages:</p>
                                <ul>
                                    <li>Contains ads</li>
                                    <li>Every file has to downloaded individually (which can be a pain when anyone has to download multiple files, a general use case scenario). No option to download a folder. Thus, Mediafire could work as a decent backup serivce.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h4><strong>Organising the data</strong></h4>
                                <hr>
                                <p>In a higher level, the data could have been classified on the basis of either Streams or Semesters. </p>
                                <p>In the website, there are three options to download the data.</p>
                                <ul>
                                    <li>A student can download the materials of the whole semester in a single click by choosing Semester and Stream in the index page.</li>
                                    <li>If not the whole package, then the student can go the particular webpage link for the semester and has the option to choose the Subjects in that semester and whether he/she wants to download Midsem, Endsem or Notes of that subject.</li>
                                    <li>The last option is to browse through the Dropbox account and find the exact file to download - an option necessary in case any new file is uploaded during the semester (see Changelog below).</li>
                                </ul>
                                <p>Each semester's webpage will contain a Changelog at the bottom. This will record all the changes made in the databse for that particular semester (with dates and stream) for future reference. This way, students won't have to check the databse each time for any new content uploads. The reviewer(volunteer) has to check for the following things:</p>
                                <ul>
                                    <li>No copyrighted material gets stored in the database.</li>
                                    <li>No redundancy occurs.</li>
                                    <blockquote><p>Note: All files from the website will be downloaded in .zip format. The subject list (Browse Subjects option) will contain both theory and practical subjects. Some practical subjects are omitted if question papers are not available.</p></blockquote>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h4><strong>Contributing to the database</strong></h4>
                                <hr>
                                <p>It would be impractical for a single person to manage all the materials and papers for every semsester and stream. So, three volunteers were choosen from III year - each from a different branch. A volunteer will manage the materials of his/her stream. I & II semester work would be shuffled among them.</p>
                                <p>And to simplify their work, an option to directly upload the materials and papers was added in the website in the Contribute page. The uploaded materials will be reviewed by the volunteers (who are provided access to the database). Thus, any student can now add to the database reducing the legwork for the volunteers.</p>
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
    <?php
    if(!isset($_SESSION['user']))
    {      
    ?>
    <script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Your Own Dashboard</b> - You Have to Login/Register to user the functionality."

            },{
                type: 'info',
                timer: 3
            });

    	});
    </script>
    <?php
    }
    ?>
</html>
