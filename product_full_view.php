<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tech Hub</title>
 
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">	
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/product_full_view.css">
	<link rel="icon" href="image/favicon.png">
</head>
<body> 

	<!--Top Logo/Search bar/Sign-->
	  <div class="top-nav ">
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
					 		<ul>
					 			 <li><a href="">Login</a></li>
					 			 <li><a href="">Registration</a></li>
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
		

	 

	 	<div class="container mt-5">
	 		<div class="row">
	 			<div class="col-5">
	 				<div class="product-img">
	 					<span><img style="width: 100%" src="images/casing.jpg" alt=""></span>
	 				</div>
	 			</div>
	 			<div class="col-7">
	 				
						
						<table >
		  
							 
							 <?php 

								 include_once 'Crud.php';							 

								$crud = new Crud();

								$query = "select * from  product";
								$result = $crud->getData($query);
					   		 ?>

							 
							 <tr><th>Product Name</th>
								 
							 <?php 

								 include_once 'Crud.php';							 

								$crud = new Crud();

								$query = "select * from  product";
								$result = $crud->getData($query);

						        foreach($result as $key=>$res){
						           
						            echo"<td>".$res['product_name']."</td>";
						            
						          
						        }
					   		 ?> 		
					   		 </tr>							
								 <tr><th>Product Brand</th>
								 
							 <?php 

								 include_once 'Crud.php';							 

								$crud = new Crud();

								$query = "select * from  product";
								$result = $crud->getData($query);

						        foreach($result as $key=>$res){
						           
						            echo"<td>".$res['product_brand']."</td>";
						            
						          
						        }
					   		 ?> 		
					   		 </tr>		
								 <tr><th>Product Catagory</th>
								 
							 <?php 

								 include_once 'Crud.php';							 

								$crud = new Crud();

								$query = "select * from  product";
								$result = $crud->getData($query);

						        foreach($result as $key=>$res){
						           
						            echo"<td>".$res['product_catagory']."</td>";
						            
						          
						        }
					   		 ?> 		
					   		 </tr>		
								  <tr><th>Product Price</th>
								 
							 <?php 

								 include_once 'Crud.php';							 

								$crud = new Crud();

								$query = "select * from  product";
								$result = $crud->getData($query);

						        foreach($result as $key=>$res){
						           
						            echo"<td>".$res['product_price']."</td>";
						            
						          
						        }
					   		 ?> 		
					   		 </tr>		
			 
						</table>



	 				
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