<?php 

session_start();
include_once 'crud.php';
$crud = new crud();

$txt = $_POST['srctxt'];
if(isset($txt)){
	$searchTxt = $txt;
	$query = "select * from product where product_name LIKE '%$searchTxt%'";
	$result = $crud->getData($query);
}
if($result){
foreach ($result as $res) {
	echo "<a style='z-index:1;font-size:12px' class='list-group-item list-group-item-action'><span class='float-left'>".$res['product_name']."</span></a>";
}	
}else{
	echo "<p style='z-index:1' class='list-group-item'>No item</p>";
}

 
?>