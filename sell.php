<?php
 session_start();
 if(!isset($_SESSION['user']))
 {
    header("Location: http://localhost:8080/CBSMS/index.php");
 }
 include "C:/xampp/htdocs/Play/connection/config.php";
 $pid = "";
 $upname = "";
 $upprice = "";
 $updetails = "";

 if(isset($_GET['id']))
 {
     $pid = $_GET['id'];
     $query = "SELECT * FROM product WHERE pid = '$pid'";
     $fire = mysqli_query($con,$query);
     if(mysqli_num_rows($fire)>0)
     {
        $product = mysqli_fetch_assoc($fire);
        $pid = $product['pid'];
        $upname = $product['name'];
        $upprice = $product['price'];
        $updetails = $product['details'];
        
     }

 }
 if(isset($_GET['soid']))
{
    $pid = $_GET['soid'];
    $query = "UPDATE product SET status = 1 WHERE pid = '$pid'";
    $fire = mysqli_query($con,$query);

}
if(isset($_GET['revoke']))
{
    $pid = $_GET['revoke'];
    $query = "UPDATE product SET status = 0 WHERE pid = '$pid'";
    $fire = mysqli_query($con,$query);

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
                
                <li class="active">
                        <a href="sell.php">
                            <i class="pe-7s-cart"></i>
                            <p>SELL</p>
                        </a>
                </li>
                 <li >
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
                    <a class="navbar-brand" href="sell.php">Your Selling Portal</a>
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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Publish Product</h4>
                            </div>
                            <div class="content">
                                <form action=<?php if(isset($_GET['id'])) {echo "validate/update.php";} else {echo "validate/insert.php";} ?> method="post" enctype="multipart/form-data">
                                    <div class="row">
                                      <input type="hidden" id="prodId" name="pid" value="<?php echo $pid; ?>">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Product name</label>
                                                <input type="text" class="form-control" name="name" value="<?php echo  $upname; ?>" placeholder="Product Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Product Price</label>
                                                <input type="number" class="form-control" name="price" value="<?php echo  $upprice; ?>" placeholder="Product Price">
                                            </div>
                                        </div>
                                    </div>

                                   <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Product Details</label>
                                                <textarea rows="3" class="form-control" name="details"  placeholder="Here can be your details about product" ><?php echo  $updetails; ?></textarea></textarea>
                                            </div>
                                        </div>
                                    </div>
                                       
                                        <button type="submit" name="<?php if(isset($_GET['id'])) {echo "update";} else {echo "submit";} ?>" class="btn btn-info btn-fill pull-right"><?php if(isset($_GET['id'])) {echo "Update";} else {echo "Submit";} ?> Product</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/default-avatar.png" alt="..."/>

                                      <h4 class="title">Manas Jain<br />
                                         <small>manasjain689</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"><strong>"Web Developer"</strong></p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
 <?php
    $sid = $_SESSION['user']['id'];
    $query = "SELECT * FROM product WHERE sid = $sid";
    $fire = mysqli_query($con,$query);
    if(mysqli_num_rows($fire)>0)
    {
    ?>
        <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Price</th>
                <th>Detail</th>
                <th></th>
            </tr>
         </thead>
    <tbody>
<?php
   while($user = mysqli_fetch_assoc($fire))
   {
?>

        <tr>
            <td><?php echo $user['name'] ?></td>
            <td><img src="products/<?php echo $user['imageName'] ?>" style="width:100px; height:100px;"></td>
            <td><?php echo $user['price'] ?></td>
            <td><?php echo $user['details'] ?></td>
           

            <?php
                if($user['status']==1)
                {
            ?>
                    <td><input type="button" class="btn btn-info btn-fill btn-xs" value="✓ Sold" disabled/></td>
            <?php
                }
                else
                {
            ?>
                    <td><a href="http://localhost:8080/CBSMS/sell.php?soid=<?php echo $user['pid']; ?>"><button class="btn btn-success btn-fill btn-xs">Sold</button></a></td>
            <?php 
                 
                }
           
                if($user['status']==0)
                {
            ?>
                <td><a href="http://localhost:8080/CBSMS/sell.php?id=<?php echo $user['pid']; ?>"><button class="btn btn-primary btn-fill btn-xs">Update</button></a></td>
           
            <?php
                }
                else
                {
            ?>
                <td><a href="http://localhost:8080/CBSMS/sell.php?revoke=<?php echo $user['pid']; ?>"><button class="btn btn-success btn-fill btn-xs">Revoke</button></a></td>
            <?php
                }
            ?>
            
            <td><a href="http://localhost:8080/CBSMS/validate/delete.php?id=<?php echo $user['pid']; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-danger btn-fill btn-xs">Delete</button></a></td>
            
        </tr>
<?php
   }
?> 
    </tbody>
    </table>
<?php
    }
    else
    {
        echo "No Rows Found";
    }

?>                    

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
