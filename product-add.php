<?php
	
	include_once 'Crud.php';
	
	$crud = new Crud();
	
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


		 
		
	
	
?>