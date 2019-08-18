<?php 

session_start();
include_once 'crud.php';
$crud = new crud();

if(isset($_SESSION['customer_email'])){
	
	
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
		 $cemail = $_SESSION['customer_email'];
	}

 
	$result2 = $crud->execute("insert into wishlist(p_id, p_name, p_brand, p_catagory, p_image, p_price, customer_email) values ('$id','$p_name','$p_brand','$p_catagory','$p_image','$p_price','$cemail') ");

	if($result2){
		echo "success";
	}else{
		echo "failure";
	}

}else{
	echo "notlogin";
}
?>