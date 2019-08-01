<?php
	session_start();
	if(!isset($_SESSION['customer_email'])){
		header('location:customer-login.php');
	}

	include_once 'Crud.php';
	$crud = new Crud();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">	
	<link rel="stylesheet" href="css/admin-dashboard.css">
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<link rel="icon" href="image/favicon.png">

</head>
<body>
	 
	 <div class="dashboard">
	 	<div class="row">

	 	 
	 			 <div class="col-2 menulist">
		 			<div class="logo text-center">
		 				<a href="index.php">
		 				<img src="images/logo.png" alt="" style="width: 60%;">
		 				</a>
		 			</div>
	 			<div class="menu">
	 				<ul>
	 					<li><a href=""><i class="fas fa-user-shield"></i>Admin</a></li>
	 					<li><a href=""><i class="fas fa-users"></i>Customer</a></li>
	 					<li><a href="" class="dropdown-btn"><i class="fab fa-product-hunt"></i>Product</a>
							<ul class="dropdown-container">
			 					<li><a id="add_product_btn" href=""><i class="fas fa-arrow-alt-circle-down"></i>Add Product</a></li>
			 					<li><a id="product_list_btn" href=""><i class="fas fa-list"></i>Product List</a></li>
			 				</ul>
	 					</li>
	 					<li><a href=""><i class="fas fa-cart-arrow-down"></i>Order</a></li>		
	 					<li><a href=""><i class="fas fa-sign-out-alt"></i>Logout</a></li>
	 				</ul>
	 			</div>
	 		</div> 
	 		 
	 		 <div class="col-10 content">

	 			<div class="head">
	 				<div class="logout float-right">
	 					<a class="btn btn-sm btn-warning" href="customer-logout.php"><i class="fas fa-sign-out-alt"></i>Log out</a>
	 				</div>
	 			</div>
	 			 
	 		</div>
	 		 
	 	
	 	</div>
	 </div>

	<?php 

		$msg="";

		if(isset($_POST['save'])){
			
			//the path to store the uploaded file
			$target = "images/".basename($_FILES['product_image']['name']);
			$p_name = $_POST['product_name'];
			$p_brand = $_POST['product_brand'];
			$p_catgory = $_POST['product_catagory'];
			$p_image =  $_FILES['product_image']['name'];
			$p_price = $_POST['product_price'];

			 


			$result = $crud->execute("Insert into product (product_name,product_brand,product_catagory,product_image,product_price) values ('$p_name','$p_brand','$p_catgory','$p_image','$p_price' )");
			if($result){
				echo "success";
			}else{
				echo "Problem";
			}


			if(move_uploaded_file($_FILES['product_image']['tmp_name'], $target)){
				echo  "Image uploaded";
			}else{
				echo "Image not uploaded";
			}


		}

	 ?>
	 <script type="text/javascript">
	 
		var dropdown = document.getElementsByClassName("dropdown-btn");
		var i;

		for (i = 0; i < dropdown.length; i++) {
		  dropdown[i].addEventListener("click", function() {
		  this.classList.toggle("active");
		  var dropdownContent = this.nextElementSibling;
		  if (dropdownContent.style.display === "block") {
		  dropdownContent.style.display = "none";
		  } else {
		  dropdownContent.style.display = "block";
		  }
		  });
		}

				$(document).ready(function(){
					
						$("#add_product_btn").click(function(){
						
							$(".product_list").css({display:'none'});
						}

					});
							$(document).ready(function(){
					
						$("#product_list_btn").click(function(){
						
							$(".add_product").css({display:'none'});
						}

					});

</script>

</body>
</html>