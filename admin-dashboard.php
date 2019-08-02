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
	<title>Techhub Admin Dashboard</title>
</head>
<body>
	
</body>
</html>

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
	 				 
	 				 <a href="#Welcome" class="list-group-item"><i class="fas fa-user-shield"></i>Admin</a> 
	 		 		 <a href="#customer-list" class="list-group-item"><i class="fas fa-users"></i>Customer</a> 
	 				 <a href="#sub-menu" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><i class="fab fa-product-hunt"></i>Product</a>

	 						<div class="collapse list-group-level1" id="sub-menu">
	 							 <a href="#product-add-form" id="add_product_btn" class="list-group-item" data-parent="#sub-menu"><i class="fas fa-arrow-alt-circle-down"></i>Add Product</a> 	
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

				<section id="Welcome" class="wlc content-section-section">
					<center> <h1>Welcome <span style="color: #38d"><?php echo $_SESSION['name'];?></span> </h1> </center>
				</section>
				 
					<div class="clearfix"></div>

					<!--Product List-->
	 				<section id="product_list" class="content-section-section mb-5">
	 					<h3 id="content-header">Product List</h3>
	 					
	 					<!--Show all Product List-->
						<div id="product-list-show"></div> 
						
						<!--Product add form-->	
						<div class="pt-5 content-section-section" id="product-add-form" style="padding-top:200px !important;">
							<h3 id="content-header">Add Product</h3>
								<form action="admin-dashboard.php" method="POST" enctype="multipart/form-data">
		 					<div class="form-group">
		 						<label for=""><strong>Product Name</strong></label>
		 						<input type="text" class="form-control" name="product_name" id="product_name" required>
		 					</div>
		 					<div class="form-group">
		 						<label for=""><strong>Product Brand</strong></label>
		 						 <select class="form-control" id="product_brand" name="product_brand">
								   	 <?php 
		 								foreach($brand_name_result as $res){
											echo "<option>".$res['brand_name']."</option>";			
										}
		 							?>
							    </select required>
							   
		 					</div>
		 					<div class="form-group">
		 						 <input type="text" class="form-control"  id="product_brand_txt" hidden>
		 					</div>
		 					<div class="form-group">
		 						<label for=""><strong>Product Catagory</strong></label>
		 						<select class="form-control" id="product_catagory" name="product_catagory">
		 							  <option value="" selected disabled>--Select Catagory--</option>
								      <option value="1">Desktop & PC</option>							 
								      <option value="2">Mobile & Tabs</option>
								      <option value="3">Camera</option>
								      <option value="4">Watch</option>
								      <option value="5">Laptop</option>
							    </select required>
		 					</div>
		 					<div class="form-group">
		 						 <input type="text" class="form-control"  id="product_catagory_txt" hidden>
		 					</div>
							<label for=""><strong>Product Image</strong></label> <br>
		 					<img id="preview" style="width:10%;margin-bottom: 10px" src="images/noimage.png" />

		 					<div class="form-group">
		 						
		 						<input style="color: green" type="file" onchange="showImage(this,'preview')" name="product_image" id="product_image_url" required>
		 					</div>
		 					<div class="form-group">
		 						<label for=""><strong>Product Price</strong></label>
		 						<input type="text" class="form-control" name="product_price" id="product_price" required>
		 					</div>

		 					 
		 					<button class="btn btn-danger float-right" type="button" id="cancel" value="Cancel" onclick="$('#product-add-form').slideUp();"><i class="fas fa-window-close mr-2"></i>Cancel</button>
		 					 
		 					<button style="margin-right: 5px" class="btn btn-success float-right" type="button" name="save" id="save"><i class="fas fa-save mr-2"></i>Save</button>
		 				</form>
						</div>





	 				</section>
				
					<div class="clearfix"></div>

					<!--Customer List-->
					<section id="customer-list" class="content-section-section">
						<h3 id="content-header">Customer List</h3>
	 					<table>
						    <tr>
						        <th>Name</th>
						        <th>Email</th>
						        <th>Phone</th>						        
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

 
<!-- JavaScript Files -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js/app.js"></script>

	<script type="text/javascript">
	
	function showImage(fileInput,id){
		console.log(fileInput);

		var files = fileInput.files;
		console.log(files);
		for(var i=0;i<files.length;i++){
			var file = files[i];
			var imageType=/image.*/;
			if(!file.type.match(imageType)){
				continue;
			}
			var img=document.getElementById(""+id);
			img.file=file;
			var reader = new FileReader();
			reader.onload = (function(aImg){
				return function(e){
					aImg.src = e.target.result;
				};
			})(img);
			reader.readAsDataURL(file);
		}
	}
			 
		 $(document).ready(function(){
		 	 
		$('#save').click(function(){
				var product_name = $('#product_name').val();
				var product_brand = $('#product_brand_txt').val();
				var product_catagory = $('#product_catagory_txt').val();
				var product_image = $('#preview').attr('src');
				console.log(product_image);
				var product_price = $('#product_price').val();

				$.ajax({
					url:"product-add.php",
					type:"POST",
					data:{p_name:product_name, p_brand:product_brand, p_catagory:product_catagory, p_image:product_image, p_price:product_price},
					success: function(data){
						if(data == "success"){
							var product_name = $('#product_name').val('');
							var product_brand = $('#product_brand_txt').val('');
							var product_catagory = $('#product_catagory_txt').val('');
							var product_price = $('#product_price').val('');
								$('#product-add-form').slideUp();
							$.get('product-view.php',function(data){
								$('#product-list-show').html(data);
							}) 
						}
					}



				})




		})
	$("#add_product_btn").click(function(){
				$('#product-add-form').slideDown();
		})	 	
 }) 


		 $(function(){
		 	$("#product_brand").change(function(){
		 		var result = $("#product_brand option:selected").text();
		 		$("#product_brand_txt").val(result);
		 	})
		 })
	  $(function(){
		 	$("#product_catagory").change(function(){
		 		var result2 = $("#product_catagory option:selected").text();
		 		$("#product_catagory_txt").val(result2);
		 	})
		 })

	 </script>

</body>
</html>