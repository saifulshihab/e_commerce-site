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
			<form action="admin-registration.php" method="POST">
			<div class="form-group">
			<i class="fas fa-user" aria-hidden="true2"></i>
				<input class="form-control"type="text" name="name" placeholder="Full Name"required>
				 		
			</div>
			<div class="form-group">
				 <i class="fas fa-envelope-open-text"></i> 
				<input class="form-control" type="email" name="email" placeholder="Email Address" required>
			
			</div>
			<div class="form-group">
			<i class="fas fa-phone-alt"></i> 
				 	<select class="form-control drop" name="code" id="exampleFormControlSelect1">
				      <option>+190</option>
				      <option>+880</option>
				      <option>+971</option>
				      <option>+566</option>				     
				    </select>
				<input class="form-control phone" type="tel" name="phone" placeholder="Phone Number"required>
		 		
			</div>
			<div class="form-group">
				 <i class="fas fa-key"></i> 
				<input class="form-control" type="password" name="password" placeholder="Create password"required>
				
			</div>
			<div class="form-group">
				<i class="fas fa-key"></i> 
				<input class="form-control" type="password" name="re_password" placeholder="Retype password"required>
			 		
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>

			<p class="mt-2">Already have an account? <a href="admin-login.php">Login</a></p>
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
		$name = $_POST['name'];		 

		$email = $_POST['email'];
		$password = $_POST['password'];
		$re_password= $_POST['re_password'];
		$code = $_POST['code'];
		$phone = $_POST['phone'];

		if($re_password==$password){
				$result = $crud->execute("INSERT into admin_registration(name,email,password,country_code,phone) VALUES('$name','$email','$password','$code','$phone')");
		
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