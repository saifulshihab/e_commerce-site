<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header('location:admin-login.php');
	}

	include_once 'Crud.php';
	$crud = new Crud();


	$query = "Select * from brand order by brand_name";
	$brand_name_result = $crud->getData($query);
 

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
		
		<!--Navbar-->
		<div class="row head fixed-top">
			<div class="col ">
					<div class="logo">
		 				<a href="index.php">
		 				<img src="images/logo.png" alt="" style="width: 230px;">
		 				</a>
		 			</div>

	 				<div class="logout float-right">
	 					<a class="btn btn-sm btn-warning" href="admin-logout.php"><i class="fas fa-sign-out-alt"></i>Log out</a>
	 				</div>
	 			 
			</div>
		</div>

		<div class="clearfix"></div>

	 	<!--Content Manage-->
	 	<div class="row content">
	 			 <div class="col-2">
	 			 	<div class="sidebar">

		 			 <div id="main-menu" class="list-group pt">
	 				 
	 				 <a href="" class="list-group-item"><i class="fas fa-user-shield"></i>Admin</a> 
	 		 		 <a href="#customer-list" class="list-group-item"><i class="fas fa-users"></i>Customer</a> 
	 				 <a href="#sub-menu" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><i class="fab fa-product-hunt"></i>Product</a>

	 						<div class="collapse list-group-level1" id="sub-menu">
	 							 <a href="#" id="add_product_btn" class="list-group-item" data-parent="#sub-menu"><i class="fas fa-arrow-alt-circle-down"></i>Add Product</a> 	
	 							 <a href="#product_list" id="product_list_btn" class="list-group-item" data-parent="#sub-menu"><i class="fas fa-list"></i>Product List</a> 
	 						</div>
						 
	 					 
	 					 <a href=""class="list-group-item"><i class="fas fa-cart-arrow-down"></i>Order</a> 	
	 				 <a href=""class="list-group-item"><i class="fas fa-sign-out-alt"></i>Logout</a> 
	 				 </div>
	 			</div>
	 		</div> 

	 		
	 		 
	 		 <div class="col-10 content">

	 			<div class="clearfix"></div>
	 			<div class="content_manage">
	 				 
				<!--Welcome Message-->	

				<section class="wlc content-section-section">
					<center> <h1>Welcome <span style="color: #38d"><?php echo $_SESSION['name'];?></span> </h1> </center>
				</section>
				

					<!--Add Product-->
					<section id="add_product" class="content-section-section">
						<h3 id="content-header">Add Product</h3>

	 				<form action="admin-dashboard.php" method="POST" enctype="multipart/form-data">
	 					<div class="form-group">
	 						<label for="">Product Name</label>
	 						<input type="text" class="form-control" name="product_name" required>
	 					</div>
	 					<div class="form-group">
	 						<label for="">Product Brand</label>
	 						 <select class="form-control" id="product_brand" name="product_brand">
							   	 <?php 
	 								foreach($brand_name_result as $res){
										echo "<option>".$res['brand_name']."</option>";			
									}
	 							?>
						    </select required>
	 					</div>
	 					<div class="form-group">
	 						<label for="">Product Catagory</label>
	 						<select class="form-control" id="" name="product_catagory">
	 							  <option>-- --</option>
							      <option>Desktop & PC</option>							 
							      <option>Mobile & Tabs</option>
							      <option>Camera</option>
							      <option>Software & Antivirus</option>
						    </select required>
	 					</div>
	 					<div class="form-group">
	 						<label for="">Product Image</label>
	 						<input type="file" name="product_image" >
	 					</div>
	 					<div class="form-group">
	 						<label for="">Product Price</label>
	 						<input type="text" class="form-control" name="product_price" required>
	 					</div>

	 					<input class="btn btn-success float-right" type="submit" name="save" value="Save">
	 				</form>
	 				 
	 				</section>
					<div class="clearfix"></div>

					<!--Product List-->
	 				<section id="product_list" class="content-section-section">
	 					<h3 id="content-header">Product List</h3>
	 					
						<div id="product-list-show">
							
						</div>
	 			 

							
						<div class="pt-3" id="product-add-form">
							<form action="admin-dashboard.php" method="POST" enctype="multipart/form-data">
	 					<div class="form-group">
	 						<label for="">Product Name</label>
	 						<input type="text" class="form-control" name="product_name" id="product_name" required>
	 					</div>
	 					<div class="form-group">
	 						<label for="">Product Brand</label>
	 						 <select class="form-control" id="product_brand" name="product_brand">
							   	 <?php 
	 								foreach($brand_name_result as $res){
										echo "<option>".$res['brand_name']."</option>";			
									}
	 							?>
						    </select required>
	 					</div>
	 					<div class="form-group">
	 						<label for="">Product Catagory</label>
	 						<select class="form-control" id="" name="product_catagory" id="product_catagory">
	 							  <option>-- --</option>
							      <option>Desktop & PC</option>							 
							      <option>Mobile & Tabs</option>
							      <option>Camera</option>
							      <option>Software & Antivirus</option>
						    </select required>
	 					</div>
	 					<div class="form-group">
	 						<label for="">Product Image</label>
	 						<input type="file" name="product_image" id="product_image" >
	 					</div>
	 					<div class="form-group">
	 						<label for="">Product Price</label>
	 						<input type="text" class="form-control" name="product_price" id="product_price" required>
	 					</div>

	 					<input class="btn btn-danger float-right" type="button" id="cancel" value="Cancel" onclick="$('#product-add-form').slideUp();">
	 					<input style="margin-right: 5px" class="btn btn-success float-right" type="button" name="save" id="save" value="Save">
	 				</form>
						</div>





	 				</section>
				
					<div class="clearfix"></div>

					<!--Customer List-->
					<section id="customer-list" class="content-section-section">
						<h3 id="content-header">Customer List</h3>
	 					<table >
						    <tr>
						        <th>Name</th>
						        <th>Email</th>
						        <th>Phone</th5>						        
						    </tr>
						    <?php 

						    $query = "select * from  customer_registration";
							$result = $crud->getData($query);
						        foreach($result as $res){
						            echo"<tr>";
						            echo"<td>".$res['customer_name']."</td>";
						            echo"<td>".$res['customer_email']."</td>";
						            echo"<td>".$res['country_code'].$res['customer_phone']."</td>";
						            echo"</tr>";
						        }			    
						    ?>
						    
						</table>	
					</section>


	 			</div>
	 		</div>
	 		 
	 	
	 	</div>
	 </div>

	<?php 

		 

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

	


 
<!-- JavaScript Files -->
	 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js/app.js"></script>

	<script type="text/javascript">			
			 
		 $(document).ready(function(){
		 	 
		$('#save').click(function(){
				var product_name = $('#product_name').val();
				var product_brand = $('#product_brand').val();
				var product_catagory = $('#product_catagory').val();
				var product_image = $('#product_image').val();
				var product_price = $('#product_price').val();

				$.ajax({
					url:"product-add.php";
					type:"POST";
					data:{product_name:product_name, product_brand:product_brand, product_catagory:product_catagory, product_image:product_image, product_price:product_price},
					success: function(data){
						if(data == "success"){
							var product_name = $('#product_name').val('');
							var product_brand = $('#product_brand').val('');
							var product_catagory = $('#product_catagory').val('');
							var product_image = $('#product_image').val('');
							var product_price = $('#product_price').val('');
								$('#product-add-form').slideUp();
							$.get('product-view.php',function(data){
								$('#product-list-show').html(data);
							}) 
						}
					}



				})




		})
		 	
 })

	 

	 </script>

</body>
</html>