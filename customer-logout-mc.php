<?php
session_start();

$_SESSION = array();

session_destroy();
if(!isset($_SESSION['customer_email'])){
	header('location:main_cart.php');
}
?>