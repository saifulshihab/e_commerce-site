<?php
	
	session_start();
	include_once 'Crud.php';
	$crud = new Crud();
	$id = $_GET['id'];
	$idr = $id;
	$query = "Select * from product where id=$idr";
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
	<link rel="stylesheet" href="css/product_full_view.css">
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
		        <a class="nav-link" href="index.php">RAM </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Speaker </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php#watch">Watch</a>
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
<div class="clearfix"></div>
	 
 		<div class="product-full-view p-5">
 			 
 				<div class="row">
 					<div class="col-4">
 						<div class="product-img">
		 					<?php 
		 						foreach($result as $res){
		 							echo '<div class="img-zoom-container">';
									echo "<td><img id='myimage' width='70%' src='".$res['product_image']."'/></td>";
									
									echo "</div>";
								}
		 					 ?> 					
 						</div>
 					</div>
 					<div class="col-4 mt-5">
 						<div class="row pb-3">
 						
 							<div class="col">
 								<?php 
		 							foreach($result as $res){
										echo "<h2>".$res['product_name']."</h2>";
									}
		 					 	?>
 							</div>
 						</div>
 						<table>
 							<tr>
 								<th>Brand</th>
								<?php 
		 							foreach($result as $res){
										echo "<td>".$res['product_brand']."</td>";
									}
		 					 	?> 
 							</tr>
 							<tr>
 								<th>Catagory</th>
								<?php 
		 							foreach($result as $res){
										echo "<td>".$res['product_catagory']."</td>";
									}
		 					 	?> 
 							</tr>
 							<tr>
 								<th>Price</th>
								<?php 
		 							foreach($result as $res){
										echo "<td>".$res['product_price']."</td>";
									}
		 					 	?> 
 							</tr>
 						</table>
 
 						<div class="buy_now mt-5">
 							<?php 
 								foreach ($result as $key => $res) {
 									echo "<button id=".$_GET['id']." class='btn btn-sm btn-primary add_cart_btn' style='margin-right:3px'><i class='fas fa-cart-plus' style='margin-right: 4px'></i>Add Cart</button>";
 									echo "<button id=".$_GET['id']." class='btn btn-sm btn-success buy_now_btn' style='margin-right: 3px' data-toggle='modal' data-target='#buynowmodal' ><i class='fas fa-shopping-bag'></i>Buy Now</button>";
 									echo '<button id='.$_GET['id'].' class="btn btn-sm btn-dark wishlist_btn" title="Login Required" data-toggle="popover" data-content="You have to login to your account for add anything to your wishlist."><i class="fas fa-heart" style="color:#ff65df"></i>Add Wishlist</button>';
 								}
 							?>
 		
 						</div>
 					</div>
 					<div class="col-4">
 						<div id="myresult" class="img-zoom-result"></div>
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
			  <div class="modal fade" id="buynowmodal">
				<div class="modal-dialog modal-xl modal-dialog-centered">
					<div class="modal-content justify-content-center">
						<div class="modal-header">
							<h2>Buy Now</h2>
						 <button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">							
							<div id="buynow_product_show" class="text-center justify-content-center"></div>
							<div id="congomsgshow" class="text-center"><div class="bg-success text-light"><p style="font-weight: bold" class="p-5"><span style="color: red">Congratulations!</span> Your order is successfully received! Will send a message very soon. Thank you:)</p></div></div>
						</div>
																							
					</div>
				</div>
			</div>

			 	<div class="modal fade" id="customer_login">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4>Customer Login</h4>
							</div>
							<div class="modal-body">
							<form action="" method="POST">
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
 			$('.add_cart_btn').click(function(){
 				var id = $(this).attr('id');
 				$.ajax({
 					url:"customer_cart.php",
 					type:"POST",
 					data:{id:id},
 					success:function(data){
 						 if(data=="success"){
 						 	alert("Added to Cart Successfully.");
 						 } 					
 					}
 				})
 			})

 			$('.wishlist_btn').click(function(){
 				var id = $(this).attr('id');
 				$.ajax({
 					url: "wishlist_add.php",
 					type: "POST",
 					data : {id:id},
 					success:function(data){
 						 if(data=="success"){
 						 	alert("Added to Wishlist");
 						 }
 						 if(data=="notlogin"){
	 					    alert("Please login!");
 						 }
 					}
 				})
 			})

 			$('.buy_now_btn').click(function(){ 				
 				var id = $(this).attr('id');

 				$.ajax({
 					url:"buy_now.php",
 					type:"POST",
 				 
 					data:{id:id},
 					success:function(data){
 						$('#congomsgshow').hide();
						$('#buynow_product_show').html(data);	
					 }
					
 				})					
 			})


 			$('[data-toggle="popover"]').popover({
 				trigger:'hover'
 			});
 		})
function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /*create lens:*/
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  /*insert lens:*/
  img.parentElement.insertBefore(lens, img);
  /*calculate the ratio between result DIV and lens:*/
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /*set background properties for the result DIV:*/
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /*execute a function when someone moves the cursor over the image, or the lens:*/
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /*and also for touch screens:*/
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image:*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    /*calculate the position of the lens:*/
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /*prevent the lens from being positioned outside the image:*/
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /*set the position of the lens:*/
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /*display what the lens "sees":*/
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}

imageZoom("myimage", "myresult");


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
			
		}else{
			echo '<script type="text/javascript">';
			echo 'alert("Incorrect email or password! Try again.")';
			echo '</script>';
		}
	}

?>

</body>
</html>