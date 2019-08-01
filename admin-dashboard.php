<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header('location:admin-login.php');
	}

	include_once 'Crud.php';
	$crud = new Crud();


	$query = "Select * from brand order by brand_name";
	$result = $crud->getData($query);
 

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

	 	 
	 			 <div class="col-2 sidebar">
		 			<div class="logo text-center">
		 				<a href="index.php">
		 				<img src="images/logo.png" alt="" style="width: 60%;">
		 				</a>
		 			</div>
	 			<div id="main-menu" class="list-group">
	 				 
	 				 <a href="" class="list-group-item"><i class="fas fa-user-shield"></i>Admin</a> 
	 		 		 <a href="" class="list-group-item"><i class="fas fa-users"></i>Customer</a> 
	 				 <a href="#sub-menu" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><i class="fab fa-product-hunt"></i>Product</a>

	 						<div class="collapse list-group-level1" id="sub-menu">
	 							 <a href="" id="add_product_btn" class="list-group-item" data-parent="#sub-menu"><i class="fas fa-arrow-alt-circle-down"></i>Add Product</a> 	
	 							 <a href="" id="product_list_btn" class="list-group-item" data-parent="#sub-menu"><i class="fas fa-list"></i>Product List</a> 
	 						</div>
						 
	 					 
	 					 <a href=""class="list-group-item"><i class="fas fa-cart-arrow-down"></i>Order</a> 	
	 				 <a href=""class="list-group-item"><i class="fas fa-sign-out-alt"></i>Logout</a> 
	 				 
	 			</div>
 


	 		</div> 

	 		<!--Content Manage-->
	 		 
	 		 <div class="col-10 content">

	 			<div class="head">
	 				<div class="logout float-right">
	 					<a class="btn btn-sm btn-warning" href="admin-logout.php"><i class="fas fa-sign-out-alt"></i>Log out</a>
	 				</div>
	 			</div>

	 			<div class="clearfix"></div>
	 			<div class="content_manage pt-3">
	 				 
					<!--Add Product-->
					<div id="add_product">
						<h3 id="content-header">Add Product</h3>

	 				<form action="admin-dashboard.php" method="POST" enctype="multipart/form-data">
	 					<div class="form-group">
	 						<label for="">Product Name</label>
	 						<input type="text" class="form-control" name="product_name" >
	 					</div>
	 					<div class="form-group">
	 						<label for="">Product Brand</label>
	 						 <select class="form-control" id="product_brand" name="product_brand">
							   	 <?php 
	 								foreach($result as $res){
										echo "<option>".$res['brand_name']."</option>";			
									}
	 							?>
						    </select>
	 					</div>
	 					<div class="form-group">
	 						<label for="">Product Catagory</label>
	 						<select class="form-control" id="" name="product_catagory">
	 							  <option>-- --</option>
							      <option>Desktop & PC</option>							 
							      <option>Mobile & Tabs</option>
							      <option>Camera</option>
							      <option>Software & Antivirus</option>
						    </select>
	 					</div>
	 					<div class="form-group">
	 						<label for="">Product Image</label>
	 						<input type="file" name="product_image" >
	 					</div>
	 					<div class="form-group">
	 						<label for="">Product Price</label>
	 						<input type="text" class="form-control" name="product_price" >
	 					</div>

	 					<input class="btn btn-success float-right" type="submit" name="save" value="Save">
	 				</form>
	 				 
	 				</div>
					<div class="clearfix"></div>

					<!--Product List-->
	 				<div id="product_list">
	 					<h3 id="content-header">Product List</h3>
	 					<table >
						    <tr>
						        <td>Product ID</td>
						        <td>Product Name</td>
						        <td>Brand</td>
						        <td>Catagory</td>
						        <td>Price</td>
						        <td>Action</td>
						    </tr>
						    <?php 

						    $query = "select * from  product";
							$result = $crud->getData($query);
						        foreach($result as $key=>$res){
						            echo"<tr>";
						            echo"<td>".$res['product_id']."</td>";
						            echo"<td>".$res['product_name']."</td>";
						            echo"<td>".$res['product_brand']."</td>";  
						            echo"<td>".$res['product_catagory']."</td>"; 
						            echo"<td>".$res['product_price']."</td>";           
						            echo"<td> <a href=\"edit.php?id=$res[product_id]\">Edit</a> |
						              <a href=\"delete.php?id=$res[product_id]\">Delete</a></td>";			                    
						            echo"</tr>";
						        }			    
						    ?>
						    
						</table>	 					
	 				</div>
				
					<div class="clearfix"></div>

					<!--Customer List-->
					<div id="customer-list" class="mt-5">
						<h3 id="content-header">Customer List</h3>
	 					<table >
						    <tr>
						        <td>Name</td>
						        <td>Email</td>
						        <td>Phone</td>						        
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

	


 
<!-- JavaScript Files -->
	 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>	

	<script type="text/javascript">			
			 
		$(document).ready(function(){

		 
			$('#add_product_btn').click(function(){
				 $('#add_product').css({display:'block'});
				$('#product_list').css({display:'none'});
			})
			 
		})
	

	 

	 </script>

</body>
</html>