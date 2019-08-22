<?php 
include_once 'Crud.php';

$crud = new Crud();

$id=$_POST['cid'];
$query= "select * from p_order where cid=$id";

$result=$crud->getData($query);
foreach ($result as $res) {
 	$did = $res['id'];
}

if($crud->delete($did,"p_order")){
	echo "success";
}

?>