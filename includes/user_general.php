<?php
	session_start();
	include_once 'config.php';
	
	$n = $_SESSION['u_id'];

	if(isset($_POST['submit'])){
		
		
		$uname = mysqli_real_escape_string($conn, $_POST['uname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$fname = mysqli_real_escape_string($conn, $_POST['fname']);
		$lname = mysqli_real_escape_string($conn, $_POST['lname']);
		$address = mysqli_real_escape_string($conn, $_POST['addres']);
		$contactno = mysqli_real_escape_string($conn, $_POST['contactno']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$rpassword = mysqli_real_escape_string($conn, $_POST['rpassword']);
		
		if($password === $rpassword) {
		
		$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
		
		$sql = "UPDATE customers SET email='".$email."', user_name='".$uname."', first_name='".$fname."', last_name='".$lname."',
				address='".$address."', contact_no='".$contactno."', cus_pwd='".$hashedPwd."' WHERE customer_id='$n'";						
						if ( $conn->query($sql) === TRUE ) {
							
							$message = "Successfully updated!";
							echo "<script type='text/javascript'>alert('$message');
								   window.location.href='../user-general.php';</script>";
								    
						}else {
							
							echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}
						
		}else {
			
			$message = "Passwords are not similar!";
			echo "<script type='text/javascript'>alert('$message');
				   window.location.href='../user-general.php';</script>";
		}
	}


?>