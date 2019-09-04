<?php

if (isset($_POST['signup'])) {
	
	include_once 'config.php';
	
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uname = mysqli_real_escape_string($conn, $_POST['uname']);
	$first = mysqli_real_escape_string($conn, $_POST['fname']);
	$last = mysqli_real_escape_string($conn, $_POST['lname']);
	$address = mysqli_real_escape_string($conn, $_POST['adrs']);
	$contact = mysqli_real_escape_string($conn, $_POST['contactn']);
	$password = mysqli_real_escape_string($conn, $_POST['psw']);
	$rpassword = mysqli_real_escape_string($conn, $_POST['rpsw']);
	
	if (empty($email) || empty($uname) || empty($first) || empty($last) || empty($address) ||
	empty($contact) || empty($password) || empty($rpassword)) {
		
		$message = "Empty fields!";
		echo "<script type='text/javascript'>alert('$message');
			   window.location.href='../signp.php';</script>";
	}
	else {
		
		if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) ){
			
			$message = "Invalid first name or last name!";
			echo "<script type='text/javascript'>alert('$message');
			       window.location.href='../signp.php';</script>";
		}
		else {
			
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				
				$message = "Invalid email!";
				echo "<script type='text/javascript'>alert('$message');
			           window.location.href='../signp.php';</script>";
			}
			else {
				
				if($password === $rpassword) {
				
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					
					$sql = "INSERT INTO customers (email, user_name, first_name, last_name, address, contact_no, cus_pwd)
					VALUES('$email', '$uname', '$first', '$last', '$address', '$contact', '$hashedPwd' )";
					
					$result = mysqli_query($conn, $sql);
					
					$message = "Successfully sign up!";
					echo "<script type='text/javascript'>alert('$message');
			               window.location.href='../loginp.php';</script>";
				}else {
					
					$message = "Passwords are not similar!";
					echo "<script type='text/javascript'>alert('$message');
			               window.location.href='../signp.php';</script>";
				}
			}
		}
		
	}
	
} 

else {
	header("Location: ../signp.php");
	exit();
}