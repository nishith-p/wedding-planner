<?php

session_start();

if(isset($_POST['login'])) {
	
	include_once 'config.php';
	
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['psw']);
	$_SESSION['u_pwd'] = $pwd;
	
	if (empty($email) || empty($pwd)) {
		
		$message = "Input fields!";
		echo "<script type='text/javascript'>alert('$message');
			   window.location.href='../loginp.php';</script>";
	}
	else {
		
		$sql = "SELECT * FROM customers WHERE email='$email' OR user_name='$email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck < 1) {
			
			$message = "Invalid user name or password!";
			echo "<script type='text/javascript'>alert('$message');
			       window.location.href='../loginp.php';</script>";
		}
		else {
			
			if( $row = mysqli_fetch_assoc($result)) {
				
				$hashedPwdCheck = password_verify($pwd, $row['cus_pwd']);
				if( $hashedPwdCheck == false) {
					$message = "Invalid password!";
					echo "<script type='text/javascript'>alert('$message');
						   window.location.href='../loginp.php';</script>";
				}
				elseif($hashedPwdCheck == true) {
					
					$_SESSION['u_id'] = $row['customer_id'];
					$_SESSION['u_first'] = $row['first_name'];
					$_SESSION['u_last'] = $row['last_name'];
					$_SESSION['u_email'] = $row['email'];
					$_SESSION['u_name'] = $row['user_name'];
					
					
					if($email == "admin" || $email == "admin@weddingplanner.lk"){
						
						$message = "Successfully login!";
						echo "<script type='text/javascript'>alert('$message');
							   window.location.href='../admin.customer.php';</script>";
					}else {
						
						$message = "Successfully login!";
						echo "<script type='text/javascript'>alert('$message');
							   window.location.href='../user-general.php';</script>";
					}
				}
			}
			
		}
	}
}
else {
	
	header("Location: ../loginp.php?login=error");
	exit();
}

?>