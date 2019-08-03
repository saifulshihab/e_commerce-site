<?php
	 session_start();
	if(!isset($_SESSION['email'])){
		header('location:login.php');
	} 
	include_once 'Crud.php';
	
	$crud = new Crud();
	
			$id = $_POST['id'];
			 $p_name = $_POST['uproduct_name'];
			 $p_brand = $_POST['uproduct_brand'];
			 $p_catagory = $_POST['uproduct_catagory'];
			 $p_image = $_POST['uproduct_image'];
			 $p_price = $_POST['uproduct_price'];
		
		$result = $crud->execute("Update product SET product_name='$p_name',product_brand='$p_brand',product_catagory='$p_catagory', product_image='$p_image', product_price='$p_price' where id=$id");
		
		if($result){
			echo 'success';
		}else{
			echo "problem";
		}
		
	
	
	
?>