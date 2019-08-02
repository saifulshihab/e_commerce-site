<?php 
include_once 'Crud.php';

$crud = new Crud();

$id=$_POST['id'];

if($crud->delete($id,"product")){
	echo "success";
}





 ?>