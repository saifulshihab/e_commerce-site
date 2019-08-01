<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("location: admin-login.php");
}

include_once 'Crud.php';

$crud = new Crud();

$query = "Select * from brand";
$result = $crud->getData($query);



foreach($result as $key=>$res){
	 
	echo "<option>".$res['brand_name']."</option>";
	 
}

?>