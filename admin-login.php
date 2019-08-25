 
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
			<form action="admin-login.php" method="POST">
			 <input type="email" name="email" placeholder="Email" /> <br />
			 <input type="password" name="password" placeholder="Password" /> <br />


			<input type="submit" name="login" value="LOGIN" />
			<p>Not Registered? <a href="admin-registration.php">Sign Up</a> </p>
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
	
	 $query = "select * from admin_registration where email='$email' AND password='$password'";
	$result= $crud->getData($query);
	
	if($result) {
		foreach($result as $res){
			$email = $res['email'];
			$name = $res['name'];
		}
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $name;
		header("Location:admin.php");
	}else{
		echo "Incorrect Email or Password";
	}
}



?>
