<?php 

    include_once 'Crud.php';


$crud = new Crud();

$id = $_GET['id'];


if($crud->delete($id, "product")){
    header ("location: admin-dashboard.php");
}else{
    echo "Error";
}





?>