<?php
 
include_once 'Crud.php';

$crud = new Crud();
 
 session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tech Hub</title>
 
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">	
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/main_cart.css">
	<link rel="icon" href="images/favicon.png">
</head>
<body> 

	<!--Top Logo/Search bar/Sign-->
	  <div class="top-nav fixed-top bg-light">
	  	<div class="container">
			<div class="row">
				<div class="col-3">
					<div class="top-logo">
						<a href="index.php"><img src="images/logo.png" alt=""></a>
					</div>
				</div>
				<div class="col-6 text-center">
					<div class="top-search-box">
						<input type="text" name="serch-item" placeholder="What are you looking for?" >
						 <button class="button" type="submit" title="search">
						 	<span><img src="images/src.png" alt=""></span>
						 </button>
					</div>
				</div>
				<div class="col-3">
					 <div class="top-login-reg float-left">					 
					 	 	<a href="main_cart.php" title="Your shopping cart" data-toggle="tooltip" data-placement="left"><i class="fas fa-cart-plus"></i></a>
					 		<ul>
					 			 <li><a style="cursor: pointer;color: 
					 			 black" data-toggle="modal" data-target="#customer_login">Login</a></li>
					 			 <li><a href="customer-registration.php">Registration</a></li>
					 			 <li><a href="">Contact</a></li>
					 	 	</ul>
					 	 	 <div class="dropdown">
					 	 		<a class="ma drpbtn" href="customer-dashboard.php"><i class="fas fa-user-circle text-secondary"></i></a>
					 	 		<div class="dropdown-content">
								    <a href="customer-dashboard.php">My Account</a>
								    <a href="#">Settings</a>
								    <a href="#">Help & Support</a>
								    <a href="customer-logout-mc.php">Logout</a>
							    </div>
					 	 	</div>
				 	 </div>
				</div>
			</div>
		</div>

		<!--custoer login modal--> 
		
<!--Navbar-->

		
	  
		 <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
		  <div class="container">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item ">
		        <a class="nav-link" href="index.php#mobile">Mobile & Tabs<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php#laptop">Laptop </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php#cpu">Desktop & PC </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php#camera">Camera </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php#watch">Watch</a>
		      </li>		      
		      <li class="nav-item">
		        <a class="nav-link" href="index.php#">Speaker </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php#">RAM </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php#">Router </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php#">Software & Antivirus</a>
		      </li>
		      
		    </ul>
		  </div>
		  </div>
		</nav>
	   
	</div>	


	<!--Content-->
	
	<div class="content_wrapper"> 
		<div class="container">
		<div class="maincart_data_wrapper" style="margin-top:150px"> 	 
		<div class="title text-center" >
			 <h3>Your Shopping Cart</h3>
		</div> 
		</div>  
			<div id="main_cart_data_show"></div>
		</div>
	</div>
	
	




		<!--Footer-->
		
		<footer class="bg-dark mt-5" style="height: auto;">
			
			<div class="footer-control p-5">
				<div class="container">
				<div class="row">
					<div class="col-4">
						 <div class="general">
						 	<h5>General</h5>
						 	<div class="g-list">
						 		<ul>
						 		<li><a href="#">Home</a></li>
						 		<li><a href="#">Blog</a></li>
						 		<li><a href="#">FAQ</a></li>
						 		<li><a href="#">Portfolio</a></li>
						 		<li><a href="#">Contact Us</a></li>
						 	</ul>
						 	</div>
						 	
						 </div>   
					</div>
					<div class="col-4">
						 <div class="general">
						 	<h5 style="color: white;margin-left: 39px">Knows Us</h5>
						 	<div class="g-list">
						 		<ul>
						 		<li><a href="#">About Us</a></li>
						 		<li><a href="#">Disclaimer</a></li>
						 		<li><a href="#">Privacy & Policy</a></li>
						 		<li><a href="#">Terms & Condition</a></li>						 		
						 	</ul>
						 	</div>
						 	
						 </div>  
					</div>
					<div class="col-4">
						<div class="devhire">
							<h5 style="color: white">Hire Web Developer</h5>
							<p style="color: #ddd">Saiful Islam</p><br>
							<span style="color: #ddd">+8801782455150</span><br>
							<span style="color: #ddd">shihab@gmail.com</span>
						</div>
					</div>
				</div>	
				</div>	
			</div>
		

		 
							
			 <div class="footer-bottom p-1">
			 	<div class="container">		
				 <div class="row">
					<div class="col pt-2 text-right" style="border-right: 1px solid #597179"> 
						<div class="logo">
							<img style="width: 250px" src="images/logo.png" alt="">
						</div>						
					</div>
					<div class="col pt-1 text-left" style="border-left: 1px solid #0d161a">
						<div class="social-icon">
							<ul class="fa-stack fa-4x">
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			 </div>
			 <div class="copyright text-center pt-2 ">
			 	<p>Copyright 2019 &copy; All Rights Reserved By <a href="https://www.sites.google.com/diu.edu.bd/saifulshihab" target="_blank">sites.google.com/diu.edu.bd/saifulshihab</a></p>
			 </div>
			 </div>
			 
			 </footer>			

	 		<div class="modal fade" id="customer_login">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4>Customer Login</h4>
						</div>
						<div class="modal-body">
							<form action="main_cart.php" method="POST">
							<div class="form-group">
								<input class="form-control" type="text" name="email" placeholder="Your email" required>
							</div>
							<div class="form-group">
								<input class="form-control" type="password" name="password" placeholder="Your password" required>
							</div>
							<input type="submit" name="customer_login" class="btn btn-sm btn-info float-right" value="Login" >
							<input type="button" class="btn btn-sm btn-danger float-right" data-dismiss="modal" value="Close" style="margin-right: 5px">											
							
						</form>						
						</div>
					</div>
				</div>
			</div>
	  
 
	<!-- JavaScript Files -->
	 <script src="js/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>	

 	<script type="text/javascript">
 		 $(document).ready(function(){
			 $.get('main_cart_view.php',function(data){
					$("#main_cart_data_show").html(data);
			 })
			 
		 })
 	</script>
<?php 
	if(isset($_POST['customer_login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		 $query = "select * from customer_registration where customer_email='$email' AND customer_password='$password'";
		$result= $crud->getData($query);
		
		if($result) {
			foreach($result as $res){
				$email = $res['customer_email'];
				$name = $res['customer_name'];
			}
			$_SESSION['customer_email'] = $email;
			$_SESSION['customer_name'] = $name;
			header("Location:main_cart.php");
		}else{
			echo '<script type="text/javascript">';
			echo 'alert("Incorrect email or password! Try again.")';
			echo '</script>';
		}
	}

?>


</body>
</html>