<?php 

session_start();
if(!isset($_SESSION['email'])){
	//header("location: admin-login.php");
}

include_once 'crud.php';
$crud = new crud();
	
	$id = $_POST['id'];
	 
	$query = "select * from product where id=$id";
 
	$result = $crud->getData($query);

	foreach ($result as $key => $res) {
		 $id = $res['id'];
		 $p_name = $res['product_name'];
		 $p_brand = $res['product_brand'];
		 $p_catagory = $res['product_catagory'];
		 $p_image = $res['product_image'];
		 $p_price = $res['product_price'];
	}

 
	$result2 = $crud->execute("insert into cart(p_id, p_name, p_brand, p_catagory, p_image, p_price) values ('$id','$p_name','$p_brand','$p_catagory','$p_image','$p_price') ");

	if($result2){
		echo "success";
	}else{
		echo "failure";
	}
?>