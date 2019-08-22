<?php
	session_start();
	if(!isset($_SESSION['customer_email'])){
		header('location:customer-login.php');
	}

	include_once 'Crud.php';
	$crud = new Crud();

	$email = $_SESSION['customer_email'];

	$query = "select * from customer_registration where customer_email='$email'";
	$result = $crud->getData($query);

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Customer Dashboard | Techhub</title>
</head>
<body>
	
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Customer Dashboard</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">	
	<link rel="stylesheet" href="css/admin-dashboard.css">
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" href="css/customer-dashboard.css">
	<link rel="icon" href="images/favicon.png">
 
</head>
<body>
	 
	 <div class="dashboard">
		
		<!--Navbar-->
		<div class="row head head2 fixed-top">
			 
				<div class="col-3">
					<div class="logo">
		 				<a href="index.php">
		 				<img src="images/logo.png" alt="" style="width: 230px;">
		 				</a>
		 			</div>
		 		</div>
				<div class="col-6 text-center">
		 			<!--<div class="title">
		 				<h1>Admin Dashboard</h1>
		 			</div>-->
				</div>
				<div class="col-3">
	 				<div class="logout float-right">
	 					<a class="btn btn-sm btn-warning" href="customer-logout.php"><i class="fas fa-sign-out-alt"></i>Log out</a>
	 				</div>
	 			 </div>
			 
		</div>

		<div class="clearfix"></div>

	 	<!--Content Manage-->
	 	<div class="row content">
	 			 <div class="col-2">
	 			 	<div class="sidebar">

		 			 <div id="main-menu" class="list-group pt">
	 				 
	 				 
	 		 		 <a href="#myaccount" class="list-group-item"><i class="fas fa-user-circle"></i>My Account</a> 	 
	 				 <a href="#wishlist"class="list-group-item"><i class="fas fa-heart"></i>Wishlist</a>
	 				 <a href="#order"class="list-group-item"><i class="fas fa-cart-arrow-down"></i>Order</a> 	
	 				 <a href="customer-logout.php"class="list-group-item"><i class="fas fa-sign-out-alt"></i>Logout</a>
	 				 <a href="index.php"class="list-group-item"><i class="fas fa-home"></i>Go To Home</a> 
	 				 </div>
	 			</div>
	 		</div> 

	 		
	 		 
	 		 <div class="col-10 content">

	 			<div class="clearfix"></div>
	 			<div class="content_manage">
	 				 
				<!--Welcome Message-->	

				<section id="Welcome" class="wlc content-section-section">
					<center> <h1>Welcome <span style="color: #38d"><?php echo $_SESSION['customer_name'];?></span> </h1> </center>
				</section>
				 
					<div class="clearfix"></div>
 					<section id="myaccount" class="content-section-section">
 						<h3 id="content-header">My Account</h3>

 						<table>
 							<tr>
 								<th>Name</th>
 									<?php 
			 						foreach($result as $res){
									 echo "<td>".$res['customer_name']."</td>";
								}
		 					 ?> 
 							</tr>
 							<tr>
 								<th>Email</th>
 									<?php 
 										foreach ($result as $res) {
											echo "<td>".$res['customer_email']."</td>";
 										}
 									?>
 							</tr>
 							<tr>
 								<th>Phone</th>
 									<?php 
 										foreach ($result as $res) {
											echo "<td>".$res['country_code'].$res['customer_phone']."</td>";
 										}
 									?>
 							</tr>
 							 
 						</table>

 					</section>

 					<div id="wishlist" class="content-section-section">
 						<h3 id="content-header">Your Wishlist</h3>
 						<div id="customer_wishlist_show"></div>	 						
 					</div>

 					<section id="order" class="content-section-section">
 						<h3 id="content-header">Your Order</h3>
	 					 <div id="customer_order_show"></div>
 					</section>

	 			</div>

	 		</div>
	 		 
	 	
	 	</div>
	 </div>

 
<!-- JavaScript Files -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js/app.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$.get('customer-order-show.php', function(data){
				$('#customer_order_show').html(data);
			})
			$.get('customer_wishlist_show.php', function(data){
				$('#customer_wishlist_show').html(data);
			})			
		})
		
	</script>

</body>
</html>