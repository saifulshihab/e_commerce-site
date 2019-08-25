<?php
 
include_once 'Crud.php';

$crud = new Crud();

$cameraQuery = "Select * from product where product_catagory='Camera'";
$cameraResult = $crud->getData($cameraQuery);

$watchQuery = "Select * from product where product_catagory='Watch'";
$watchResult = $crud->getData($watchQuery);

$mobileQuery = "Select * from product where product_catagory='Mobile & Tabs'";
$mobileResult = $crud->getData($mobileQuery);

$laptopQuery = "Select * from product where product_catagory='Laptop'";
$laptopResult = $crud->getData($laptopQuery);

$cpuQuery = "Select * from product where product_catagory='Desktop & PC'";
$cpuResult = $crud->getData($cpuQuery);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tech Hub</title>
 
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">	
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/style.css">
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
						<form action="search_result_show.php" method="POST">
							<input type="text" name="serch-item" id="serch-item" placeholder="What are you looking for?" required>
							 <button class="button" type="submit" name="submit" title="search">
							 	<span><img src="images/src.png" alt=""></span>
							 </button>
						 </form>
					</div>
					<div class="list-group" id="show_search_list">						
					</div>
				</div>
				<div class="col-3">
					 <div class="top-login-reg float-left">
					 	<a href="main_cart.php" title="Your shopping cart" data-toggle="tooltip" data-placement="left"><i class="fas fa-cart-plus"></i></a>
					 		<ul>
					 			 <li><a href="customer-login.php">Login</a></li>
					 			 <li><a href="customer-registration.php">Registration</a></li>
					 			 <li><a href="">Contact</a></li>
					 	 	</ul>
					 	 	<div class="dropdown">
					 	 		<a class="ma drpbtn" href="customer-dashboard.php"><i class="fas fa-user-circle text-secondary"></i></a>
					 	 		<div class="dropdown-content">
								    <a href="customer-dashboard.php">My Account</a>
								    <a href="#">Settings</a>
								    <a href="#">Help & Support</a>
								    <a href="customer-logout.php">Logout</a>
							    </div>
					 	 	</div>			 
				 	 </div>
				</div>
			</div>
		</div>
	  
<!--Navbar-->

	 
	  
		 <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
		  <div class="container">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item ">
		        <a class="nav-link" href="#mobile">Mobile & Tabs<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#laptop">Laptop </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#cpu">Desktop & PC </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#camera">Camera </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#watch">Watch</a>
		      </li>		      
		      <li class="nav-item">
		        <a class="nav-link" href="#">Speaker </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">RAM </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Router </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Software & Antivirus</a>
		      </li>
		      
		    </ul>
		  </div>
		  </div>
		</nav>
	   
	</div>	
<div class="clearfix"></div>
		<!--Slider-->
		
		<div id="slider">
		<div class="container">
			<div class="slider-wrapper">
				<div class="row">
					<div class="col-3">
						<div class="row">
							<div class="product-banner">
								<a href="mobile_product_view.php" target="_blank"><img src="images/mobilebanner.png" alt=""></a>
							</div>							
						</div>
					 
 							<div class="m-5"></div>
						 <div class="row">
							<div class="product-banner">
								<a href="cpu_product_view.php" target="_blank"><img src="images/pcbanner.png" alt=""></a>
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
							<a href="laptop_product_view.php" target="_blank"><img src="images/laptopbanner.png" alt=""></a>
						</div>
						</div>
 <div class="m-5"></div>
						<div class="row">
							<div class="product-banner">
							<a href="camera_product_view.php" target="_blank"><img src="images/cam.png" alt=""></a>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="clearfix"></div>

		 <!--Mobile product view-->
	<div id="product_wrapper">
		<div class="container">
			<div id="mobile" style="width:100%;height: 100px"></div>
			<div class="mt-5" id="mobile-product">
				<div class="row mb-3">
					<div class="col">
						<div class="header">
							<h2>Mobile & Tablets</h2>	
						</div>
						<div class="header-border"></div>						
					</div>
				</div>				
				<div class="row">
					<div class="col">
						<div class="product-view mt-4">							
							<ul style="width:1000%;height:315px">
							<?php 
								 foreach($mobileResult as $key=>$res){	 
									echo "<li style='list-style:none;display:block;width:204px;float:left;margin-right:10px'>";
									echo "<div style='height:315px'>";
								    echo "<div style='height:217px;margin-bottom:10px'>";
								    echo "<td><img width='100%' src='".$res['product_image']."'/></td>";
								    echo "</div>";
								    echo "<a href='product_full_view.php?id=".$res['id']."'>";
								    echo "<div style='height:63px;overflow:hidden;margin-bottom:5px'>"; 
									echo "<p style='color:black;text-align:center;margin-top:-3px'>".$res['product_name']."</p>";
									echo "</div>";
									echo "</a>";
									echo "<div style='height:30px'>";
									echo "<p style='color:red;text-align:center'>BDT.  ".$res['product_price']."</p>";
									echo "</div>";
									echo "</div>";
									echo "</li>";	 
								}
							?>
							</ul>
						</div>						
					</div>
				</div>
			</div>
		</div>
		<!--Watch Product view-->
		<div class="container">
			<div id="watch" style="width:100%;height: 100px"></div>
			<div class="mt-5" id="watch-product">
				<div class="row mb-3">
					<div class="col">
						<div class="header">
							<h2>Watches</h2>	
						</div>
						<div class="header-border">
							
						</div>
						
					</div>
				</div>				
				<div class="row">
					<div class="col cpu">
						<div class="product-view mt-4">							
							<ul style="width:1000%;height:315px">
							<?php 
								 foreach($watchResult as $key=>$res){	 
									echo "<li style='list-style:none;display:block;width:204px;float:left;margin-right:10px'>";
									echo "<div style='height:315px'>";
								     echo "<div style='height:217px;margin-bottom:10px'>";
								    echo "<td><img width='100%' src='".$res['product_image']."'/></td>";
								    echo "</div>";
								     echo "<a href='product_full_view.php?id=".$res['id']."'>";
								    echo "<div style='height:63px;overflow:hidden;margin-bottom:5px'>";
									echo "<p style='color:black;text-align:center;margin-top:-3px'>".$res['product_name']."</p>";
									echo "</div>";
									echo "</a>";
									echo "<div style='height:30px'>";
									echo "<p style='color:red;text-align:center'>BDT.  ".$res['product_price']."</p>";
									echo "</div>";
									echo "</div>";
									echo "</li>";	 
								}
							?>
							</ul>
						</div>						
					</div>
				</div>
			</div>
		</div>
	
		

		<!--Laptop product view-->
		<div class="container">
			<div id="laptop" style="width:100%;height: 100px"></div>
			<div class="laptop-product mt-5">
				<div class="row mb-3">
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
							<ul style="width:1000%;height:315px">
							<?php 
								 foreach($laptopResult as $key=>$res){	 
									echo "<li style='list-style:none;display:block;width:204px;float:left;margin-right:10px'>";
									echo "<div style='height:315px'>";
								    echo "<div style='height:217px;margin-bottom:10px'>";
								    echo "<td><img width='100%' src='".$res['product_image']."'/></td>";
								    echo "</div>";
								     echo "<a href='product_full_view.php?id=".$res['id']."'>";
								    echo "<div style='height:63px;overflow:hidden;margin-bottom:5px'>"; 
									echo "<p style='color:black;text-align:center;margin-top:-3px'>".$res['product_name']."</p>";
									echo "</div>";
									echo "</a>";
									echo "<div style='height:30px'>";
									echo "<p style='color:red;text-align:center'>BDT.  ".$res['product_price']."</p>";
									echo "</div>";
									echo "</div>";
									echo "</li>";	 
								}
							?>
							</ul>
						
						</div>						
					</div>
				</div>
			</div>
		</div>
		<!--Camera product view-->
		<div class="container">
			<div id="camera" style="width:100%;height: 100px"></div>
			<div class="camera-product mt-5">
				<div class="row mb-3">
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
						   <div class="flexslider">
							<ul class="slides" style="width:1000%;height:315px">
							<?php 
								 foreach($cameraResult as $key=>$res){	 
								 	echo "<li>";
									echo "<div class='flex_li' style='list-style:none;display:block;width:204px;float:left;margin-right:10px'>";


									echo "<div style='height:315px'>";
								     echo "<div style='height:217px;margin-bottom:10px'>";
								    echo "<td><img width='100%' src='".$res['product_image']."'/></td>";
								    echo "</div>";
								     echo "<a href='product_full_view.php?id=".$res['id']."'>";
								    echo "<div style='height:63px;overflow:hidden;margin-bottom:5px'>";
									echo "<p style='color:black;text-align:center;margin-top:-3px'>".$res['product_name']."</p>";
									echo "</div>";
									echo "</a>";
									echo "<div style='height:30px'>";
									echo "<p style='color:red;text-align:center'>BDT.  ".$res['product_price']."</p>";
									echo "</div>";
									echo "</div>";


									echo "</div>";
									echo "</li>";	 
								}
							?>
							</ul>
						</div>
						</div>						
					</div>
				</div>
			</div>
		</div>

		<!--CPU Product view-->
		<div class="container">
			<div id="cpu" style="width:100%;height: 100px"></div>
			<div class="mt-5" id="cpu-product">
				<div class="row mb-3">
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
						<div class="flexslider">					
							<ul class="slides" style="width:1000%;height:315px">
							<?php 
								 foreach($cpuResult as $key=>$res){	 
								 	echo "<li>";
									echo "<div class='flex_li' style='list-style:none;display:block;width:204px;float:left;margin-right:10px'>";
									echo "<div style='height:315px'>";
								     echo "<div style='height:217px;margin-bottom:10px'>";
								    echo "<td><img width='100%' src='".$res['product_image']."'/></td>";
								    echo "</div>";
								     echo "<a href='product_full_view.php?id=".$res['id']."'>";
								    echo "<div style='height:63px;overflow:hidden;margin-bottom:5px'>";
									echo "<p style='color:black;text-align:center;margin-top:-3px'>".$res['product_name']."</p>";
									echo "</div>";
									echo "</a>";
									echo "<div style='height:30px'>";
									echo "<p style='color:red;text-align:center'>BDT.  ".$res['product_price']."</p>";
									echo "</div>";
									echo "</div>";


									echo "</div>";
									echo "</li>";	 
								}
							?>
							</ul>
						</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
 	</div>
		<!--Footer-->
		
		<footer class="bg-dark mt-5" style="height: auto;">
			
			<div class="footer-control p-5">
				<div class="container">
				<div class="row mb-3">
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
							<span style="color: #ddd">mdshihab856@gmail.com</span>
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
								<li><a href="https://www.facebook.com/isishihab" target="_blank"><i class="fab fa-facebook"></i></a></li>
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
	 <script src="js/jquery-3.4.1.min.js"></script>
	  <!-- Flexslider jQuery -->
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
	  <script defer src="js/jquery.flexslider.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>	

 	<script type="text/javascript">
 		$(document).ready(function(){

 			//Search Code
 			$("#serch-item").keyup(function(){
 				var searchText = $(this).val();
 				if(searchText != ''){
 					$.ajax({
 						url:'get_search_result.php',
 						type:'post',
 						data:{srctxt:searchText},
 						success:function(response){
 						 	$('#show_search_list').html(response)
 						}
 					})
 				}else{
 					$('#show_search_list').html('');
 				}
 			})
 			$(document).on('click','a',function(){
 				$("#serch-item").val($(this).text()); 				 
 			});

		//Search Code


	 		$('.carousel').carousel({
	 			interval: 3000 
	 		})

	 		$("[data-toggle='tooltip']").tooltip();
 		})	
	  $(function(){
	      SyntaxHighlighter.all();
	    });
	    $(window).load(function(){
	      $('.flexslider').flexslider({
	        animation: "slide",
	        slideshowSpeed: 100000,
	        start: function(slider){
	          $('body').removeClass('loading');
	        }
      });
    });
 		

 	</script>




</body>
</html>