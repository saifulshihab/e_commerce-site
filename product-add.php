<?php
	
	include_once 'Crud.php';
	
	$crud = new Crud();
			 
			$p_name = $_POST['p_name'];
			$p_brand = $_POST['p_brand'];
			$p_catgory = $_POST['p_catagory'];
			$p_image =  $_POST['p_image'];
			$p_price = $_POST['p_price'];

			 


			$result = $crud->execute("Insert into product (product_name,product_brand,product_catagory,product_image,product_price) values ('$p_name','$p_brand','$p_catgory','$p_image','$p_price' )");
			if($result){
				echo "success";
			}else{
				echo "Problem";
			}
?>