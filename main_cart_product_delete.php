<?php 
include_once 'Crud.php';

$crud = new Crud();

$id=$_POST['deleteid'];

if($crud->delete($id,"cart")){
	echo "success";
}

?>