<?php 
include("connect.php");




function register($con,$mail){
$error="";
	$success="";
if(isset($_POST['submit']))
{
	
	$Name=test_input($_POST['name']);//prevent from mysqlinjection
	$email=$_POST['email'];
	$pass=pass_checker($_POST['password']);
	$password=$_POST['password'];
$passwordconfirm=$_POST['passwordconfirm'];
$mobile=mob($_POST['mobile']);
$gender=$_POST['g'];

   
	if(strlen($Name)<2) {   
		$error="#First Name is too short.";
		return $error;
		
}
else if($Name!=($_POST['name'])){
	$error="#Invalid name.";
	return $error;
	
	
}


else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	$error="#Please enter a valid email";
	return $error;
}
else if($pass!="success"){
	
	return $pass;
}
else if($password!==$passwordconfirm){
	$error="#Password does not match";
	return $error;
}
if($mobile!=($_POST['mobile'])){
			return $mobile;
			
		}
else{
	$pd=md5($password);
	
	$insertQuery="INSERT INTO USERS(Name,Email,Password,mob,gender) VALUES('$Name','$email','$pd','$mobile','$gender')";
	if(mysqli_query($con,$insertQuery)){
		
			$success="You are successfully Registered<br/>Login in your Account";
			return $success;
			}
else {
	$error= "sorry!you can't register";
	
		return $error;
		
	}
	
}
}
}function test_input($data){
	 $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data= preg_replace("/[^a-zA-Z\s]/", "", $data);
  return $data;
	
	
}function pass_checker($data){
	if(strlen($data)<6){
		$data="password must be greater than 6 characters.";
		return $data;
	
}
else if(!preg_match("/[0-9]/",$data)){
	$data="password must contain at least one digit";
	return $data;
}
else if(!preg_match("/[A-Za-z]/",$data)){
	$data="password must contain at least one letter";
	return $data;
}
else{
	$data="success";
	return $data;
}

}function mob($data){
	if(strlen($data)<10){
		$data="Mobile Number must be of 10 digits";
		return $data;
	
}
else if(!ctype_digit($data)){
	
	$data="Mobile Number must only contain digits.";
	return $data;
}
else{
	
	
	return $data;
}}function register2($con){
	if(isset($_POST['submit']))
	{
	
	    $email = mysqli_real_escape_string($con, $_POST['email']);
	    $password = mysqli_real_escape_string($con, $_POST['password']);
		
		if(email_exists($email,$con))
		{
			$result=mysqli_query($con,"SELECT Password FROM users WHERE email='$email'");
			
			$retrievepassword = mysqli_fetch_assoc($result);
			if(md5($password)!==$retrievepassword['Password']){
				$error="Login Failed! <br/>Please make sure that you enter the correct details";
				return $error;
			}
			else{
				$error="Success";
				return $error;
			
			
			}
			
		
}

		
	}		
	
	
	
}function email_exists($email,$con){
	$result=mysqli_query($con,"SELECT id FROM users WHERE Email='$email'");
	if(mysqli_num_rows($result) == 1){
		return true;
	}
	else{
		return false;
	}
	
}function url($url)
	{
		header("location:".$url);
	}?>