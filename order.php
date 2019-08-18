<?php 

session_start();
if(!isset($_SESSION['email'])){
	//header("location: admin-login.php");
}

include_once 'crud.php';
$crud = new crud();
	
	$cid = $_POST['c_id'];
	$cname = $_POST['c_name'] ;
	$cphn = $_POST['c_phn'];
	$pid = $_POST['p_id'];
	$pname =$_POST['p_name'];
	$pbrand = $_POST['p_brand'];
	$pprice = $_POST['p_price'];
	$daddr = $_POST['d_addr'];
	$tpay = $_POST['total_payment'];
 
	$result2 = $crud->execute("insert into p_order(cid, cname, cphn, pid, pname, pbrand, pprice, deliver_address, total_payment) values ('$cid','$cname','$cphn','$pid','$pname','$pbrand','$pprice','$daddr','$tpay') ");

	if($result2){
		echo "success";
	}else{
		echo "failure";
	}
?>