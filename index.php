<?php
 
include_once 'Crud.php';

$crud = new Crud();

$query = "Select * from product where product_catagory='Camera'";

$result = $crud->getData($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tech Hub</title>
 
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">	
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="image/favicon.png">
</head>
<body> 

	<!--Top Logo/Search bar/Sign-->
	  <div class="top-nav  -top">
	  	<div class="container">
			<div class="row">
				<div class="col-3">
					<div class="top-logo">
						<a href="#"><img src="images/logo.png" alt=""></a>
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
					 		<ul>
					 			 <li><a href="customer-login.php">Login</a></li>
					 			 <li><a href="customer-registration.php">Registration</a></li>
					 			 <li><a href="">Contact</a></li>
					 	 	</ul>				 
				 	 </div>
				</div>
			</div>
		</div>
	  </div>

<!--Navbar-->


	  <div class="container">
		 <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
		  
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item ">
		        <a class="nav-link" href="#">Mobile & Tabs<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Laptop </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Desktop & PC </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Camera </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">RAM </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Speaker </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Pendrive </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Router </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Software & Antivirus</a>
		      </li>
		      
		    </ul>
		  </div>
		</nav>
	  </div>
		

		<!--Slider-->

		<div class="container">
			<div class="slider-wrapper">
				<div class="row">
					<div class="col-3">
						<div class="row">
							<div class="product-banner">
								<a href="#"><img src="images/mobilebanner.png" alt=""></a>
							</div>							
						</div>
					 
 <div class="m-5"></div>
						 <div class="row">
							<div class="product-banner">
								<a href="#"><img src="images/pcbanner.png" alt=""></a>
							</div>
						</div>
					</div>
					<div class="col-6">
						<!--Carousel-->
						  <div class="carousel slide d-none d-sm-block" data-ride="carousel" id="slide-control"> 
								<ul class="carousel-indicators">
									<li data-target="#slide-control" data-slide-to="0" class="active"></li>
									<li data-target="#slide-control" data-slide-to="1"></li>
									<li data-target="#slide-control" data-slide-to="2"></li>
									<li data-target="#slide-control" data-slide-to="3"></li>
									<li data-target="#slide-control" data-slide-to="4"></li>									 
								</ul>
						  		<!--Carousel_Inner-->
							  	<div class="carousel-inner">
							  		<div class="carousel-item active">
							  			<img src="images/mother.jpg" alt="">
							  			<div class="carousel-caption">
							  				<h2 style="color: black;">Z390 PHANTOM GAMING X</h2>
							  				<p  style="color: black;">OFF to 50%. To get the offer please take a look here. Click here see more details.</p>
							  				<a href="#" class="btn btn-warning btn-sm">Buy Now</a>
							  			</div>
							  		</div>
							  		<div class="carousel-item">
							  			<img src="images/ph.jpg" alt="">
							  			<div class="carousel-caption">
							  				<h2>Mobile & Tablet</h2>
							  				<p>OFF to 50%. To get the offer please take a look here. Click here see more details.</p>
							  				<a href="#" class="btn btn-warning btn-sm">Buy Now</a>
							  			</div>
							  		</div>
							  		<div class="carousel-item">
							  			<img src="images/bkash.jpg" alt="">
							  			<div class="carousel-caption">							  				 
							  			</div>
							  		</div>
							  		<div class="carousel-item">
							  			<img src="images/antiv.jpg" alt="">
							  			<div class="carousel-caption">
							  				<h2>Mobile & Tablet</h2>
							  				<p>OFF to 50%. To get the offer please take a look here. Click here see more details.</p>
							  				<a href="#" class="btn btn-warning btn-sm">Buy Now</a>
							  			</div>
							  		</div>
							  		<div class="carousel-item">
							  			<img src="images/camera.jpg" alt="">
							  			<div class="carousel-caption">
							  				<h2>Mobile & Tablet</h2>
							  				<p>OFF to 50%. To get the offer please take a look here. Click here see more details.</p>
							  				<a href="#" class="btn btn-warning btn-sm">Buy Now</a>
							  			</div>
							  		</div>										  	 
							  	</div> 
							  	<!--Carousel_Inner-->
							  	<!--Carousel_Control-->
									<div class="carousel-control">
										<a href="#slide-control" class="carousel-control-prev" data-slide="prev">
											<span class="carousel-control-prev-icon"></span>
										</a>
										<a href="#slide-control" class="carousel-control-next"
										data-slide="next">
											<span class="carousel-control-next-icon"></span>
										</a>
									</div>


							  	<!--Carousel_Control-->
						  </div>
						 <!--Carousel-->
					</div>
					<div class="col-3">
						<div class="row">
							<div class="product-banner">
							<a href="#"><img src="images/laptopbanner.png" alt=""></a>
						</div>
						</div>
 <div class="m-5"></div>
						<div class="row">
							<div class="product-banner">
							<a href="#"><img src="images/cam.png" alt=""></a>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<!--CPU product view-->
		<div class="container">
			<div class="cpu-product mt-5">
				<div class="row">
					<div class="col">
						<div class="header">
							<h2>Desktop & PC</h2>	
						</div>
						<div class="header-border">
							
						</div>
						
					</div>
				</div>				
				<div class="row">
					<div class="col cpu">
						<div class="product-view mt-4">
							 <ul>
								<li>
									<a href="product_full_view.php">
									<img src="images/cpu1.png" alt="">
									<p>CPU</p>
									<span>TK. 99,000</span>
									</a>
								</li>
								<li>
									<a href="">
									<img src="images/cpu2.jpg" alt="">
									<p>CPU</p>
									<span>TK. 89,000</span>
									</a>
								</li>
								<li>
									<a href="">
									<img src="images/cpu3.jpg" alt="">
									<p>CPU</p>
									<span>TK. 79,000</span>
									</a>
								</li>
								<li>
									<a href="">
									<img src="images/cpu2.jpg" alt="">
									<p>CPU</p>
									<span>TK. 89,000</span>
									</a>
								</li>
								<li>
									<a href="">
									<img src="images/cpu1.png" alt="">
									<p>CPU</p>
									<span>TK. 69,000</span>
									</a>
								</li>							 
							</ul>
						</div>						
					</div>
				</div>
			</div>
		</div>
		<!--Mobile product view-->
		<div class="container">
			<div class="mobile-product mt-5">
				<div class="row">
					<div class="col">
						<div class="header">
							<h2>Mobile & Tablets</h2>	
						</div>
						<div class="header-border">
							
						</div>
						
					</div>
				</div>				
				<div class="row">
					<div class="col">
						<div class="product-view mt-4">
							 <ul>
								<li>
									<a href="">
									<img src="images/mv1.png" alt="">
									<p>Huawei P30 Pro </p>
									<span>TK. 29,000</span>
									</a>
								</li>
								<li>
									<a href="">
									<img src="images/mv2.png" alt="">
									<p>iPhone 10</p>
									<span>TK. 89,000</span>
									</a>
								</li>
								<li>
									<a href="">
									<img src="images/mv1.png" alt="">
									<p>Huawei P30 Pro </p>
									<span>TK. 29,000</span>
									</a>
								</li>
								<li>
									<a href="">
									<img src="images/mv2.png" alt="">
									<p>iPhone 10</p>
									<span>TK. 89,000</span>
									</a>
								</li>
								<li>
									<a href="">
									<img src="images/mv1.png" alt="">
									<p>Huawei P30 Pro </p>
									<span>TK. 29,000</span>
									</a>
								</li>							 
							</ul>
						</div>						
					</div>
				</div>
			</div>
		</div>
		

		<!--Laptop product view-->
		<div class="container">
			<div class="laptop-product mt-5">
				<div class="row">
					<div class="col">
						<div class="header">
							<h2>Laptop</h2>	
						</div>
						<div class="header-border">
							
						</div>
						
					</div>
				</div>				
				<div class="row">
					<div class="col">
						<div class="product-view mt-4">
							 <ul>
								<li>
									<a href="">
									<img src="images/lv1.png" alt="">
									<p>Asus ZenBook</p>
									<span>TK. 80,000</span>
									</a>
								</li>
								<li>
									<a href="">
									<img src="images/lv2.png" alt="">
									<p>HP Pavilion</p>
									<span>TK. 49,000</span>
									</a>
								</li>
								<li>
									<a href="">
									<img src="images/lv1.png" alt="">
									<p>Asus ZenBook </p>
									<span>TK. 80,000</span>
									</a>
								</li>
								<li>
									<a href="">
									<img src="images/lv2.png" alt="">
									<p>HP Pavilion</p>
									<span>TK. 49,000</span>
									</a>
								</li>
								<li>
									<a href="">
									<img src="images/lv1.png" alt="">
									<p>Asus ZenBook </p>
									<span>TK. 80,000</span>
									</a>
								</li>							 
							</ul>
						</div>						
					</div>
				</div>
			</div>
		</div>
		<!--Camera product view-->
		<div class="container">
			<div class="camera-product mt-5">
				<div class="row">
					<div class="col">
						<div class="header">
							<h2>DSLR Camera</h2>	
						</div>
						<div class="header-border">
							
						</div>
						
					</div>
				</div>				
				<div class="row">
					<div class="col">
						<div class="product-view mt-4">
							 
							  <!-- <ul>
								<li>
									<a href="">
									<img src="images/sony.jpg" alt="">
									<p>Sony</p>
									<span>TK. 80,000</span>
									</a>
								</li>
								<li>
									<a href="">
									<img src="images/nikon.png" alt="">
									<p>Nikon</p>
									<span>TK. 49,000</span>
									</a>
								</li>
								<li>
									<a href="">
									<img src="images/sony.jpg" alt="">
									<p>Sony </p>
									<span>TK. 80,000</span>
									</a>
								</li>
								<li>
									<a href="">
									<img src="images/nikon.png" alt="">
									<p>Nikon</p>
									<span>TK. 49,000</span>
									</a>
								</li>
								<li>
									<a href="">
									<img src="images/sony.jpg" alt="">
									<p>Sony </p>
									<span>TK. 80,000</span>
									</a>
								</li>							 
							</ul> 
						 -->

							<?php 

								 foreach($result as $key=>$res){
									echo "<li>";
									echo "<a>";
									echo $res['product_image'];
									echo "<p>".$res['product_name']."</p>";
									echo "<span>".$res['product_price']."<span>";
									echo "</a>";
									echo "</li>";

								}




							?>




						</div>						
					</div>
				</div>
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
 
 
	<!-- JavaScript Files -->
	 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>	

 	<script type="text/Javascript">
 		$('.carousel').carousel({
 			interval: 3000 
 		})
 	</script>



</body>
</html>