 
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<link rel="icon" href="images/favicon.png">
	<link rel="stylesheet" href="css/admin-login.css">
	
</head>
<body>
		<div class="demo">
			<h2>Login</h2>
			<form action="customer-login.php" method="POST">
			 <input type="email" name="email" placeholder="Email" /> <br />
			 <input type="password" name="password" placeholder="Password" /> <br />


			<input type="submit" name="login" value="LOGIN" />
			<p>Not Registered? <a href="customer-registration.php">Sign Up</a> </p>
			</form>
			
		</div>
</body>
</html>



<?php 
	session_start();
 include_once 'Crud.php';

$crud = new Crud();
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	 $query = "select * from customer_registration where customer_email='$email' AND customer_password='$password'";
	$result= $crud->getData($query);
	
	if($result) {
		foreach($result as $res){
			$email = $res['customer_email'];
			$name = $res['customer_name'];
		}
		$_SESSION['customer_email'] = $email;
		$_SESSION['customer_name'] = $name;
		header("Location:customer-dashboard.php");
	}else{
		echo '<span style="color:red;display: block;
			    text-align: center;
			    position: absolute;
			    top: 550px;
			    right: 0;
			    bottom: 0;
			    left: 0;">Incorrect Email or Password</span>';
	}
}



?>
