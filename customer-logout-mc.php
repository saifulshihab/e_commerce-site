<?php
session_start();

if(isset($_SESSION['customer_email'])){
	unset($_SESSION['customer_email']);
	header('location:main_cart.php');
}
?>