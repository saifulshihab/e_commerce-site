<?php 
include_once 'Crud.php';

$crud = new Crud();

$id=$_POST['id'];

if($crud->delete($id,"wishlist")){
	echo "success";
}

?>