<?php 
include_once 'Crud.php';

$crud = new Crud();

if($crud->alldelete("cart")){
	echo "success";
}

?>