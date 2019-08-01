<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Registration</title>

 	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">	
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	 <link rel="stylesheet" href="css/style.css">
	 <link rel="stylesheet" href="css/admin-registration.css">
	<link rel="icon" href="techhub/image/favicon.png">
</head>
<body>
	<div class="container">

		<div class="registration-form">
			<h2>Create Account</h2>
			<form action="customer-registration.php" method="POST">
			<div class="form-group">
			<i class="fas fa-user"></i>
				<input class="form-control"type="text" name="customer_name" placeholder="Full Name"required>				 		
			</div>
			<div class="form-group">
				 <i class="fas fa-envelope-open-text"></i> 
				<input class="form-control" type="email" name="customer_email" placeholder="Email Address" required>
			
			</div>
			<div class="form-group">
			<i class="fas fa-phone-alt"></i> 
				 	<select class="form-control drop" name="code" id="exampleFormControlSelect1">
				      <option>+190</option>
				      <option>+880</option>
				      <option>+971</option>
				      <option>+566</option>				     
				    </select>
				<input class="form-control phone" type="tel" name="customer_phone" placeholder="Phone Number"required>
		 		
			</div>
			<div class="form-group">
				 <i class="fas fa-key"></i> 
				<input class="form-control" type="password" name="customer_password" placeholder="Create password"required>
				
			</div>
			<div class="form-group">
				<i class="fas fa-key"></i> 
				<input class="form-control" type="password" name="customer_re_password" placeholder="Retype password"required>
			 		
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>

			<p class="mt-2">Already have an account? <a href="customer-login.php">Login</a></p>
		</form>
		<p id="demo"></p>
		</div>
		
	</div>
	<?php
		session_start();
		if(!isset($_SESSION['email'])){
			 
		}
		?>

	<?php
	
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	if(isset($_POST['submit'])){
		$name = $_POST['customer_name'];		 

		$email = $_POST['customer_email'];
		$password = $_POST['customer_password'];
		$re_password= $_POST['customer_re_password'];
		$code = $_POST['code'];
		$phone = $_POST['customer_phone'];

		if($re_password==$password){
				$result = $crud->execute("INSERT into customer_registration(customer_name,customer_email,customer_password,country_code,customer_phone) VALUES('$name','$email','$password','$code','$phone')");
		
			if($result){

					echo "Success";
			}else{
				echo "Insertion Problem!";
			}
		}else{
			echo "Password doesn't match!";
		}
		
	
		
	}
	
	
?>













</body>
</html>