<?php
	if(isset($_POST['submit'])){
		
		include_once 'config.php';
		
		$file = $_FILES['file'];
		
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];
		
		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
		
		$allowed = array('jpg', 'jpeg', 'png');
		
		if(in_array($fileActualExt, $allowed)){
			if($fileError === 0){
				if($fileSize < 100000000){
					$fileNameNew = uniqid('', true).".".$fileActualExt;
					$fileDestination = '../uploads/'.$fileNameNew;
					move_uploaded_file($fileTmpName, $fileDestination);
					
					$fname = $_POST['fname'];
					$pname = $_POST['pname'];
					$email = $_POST['email'];
					$contactNo = $_POST['contno'];
					$date = $_POST['bday'];
					$description = $_POST['des'];
					
					$sql = "INSERT INTO testimonial (fname, part_name, email, cont_no, date, image, description)
							VALUES('$fname', '$pname', '$email', '$contactNo', '$date', '$fileNameNew', '$description')";
					
					if ( $conn->query($sql) === TRUE ) {
						
						$message = "Successfully added to the database!";
						echo "<script type='text/javascript'>alert('$message');
							  window.location.href='../testimonials-add.php';</script>";
					}else {
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
			
					
				}else {
					$message = "File size is higher!";
					echo "<script type='text/javascript'>alert('$message');
						   window.location.href='../testimonials-add.php';</script>";
						   
				}
				
			}else{
				$message = "Error in uploading file!";
				echo "<script type='text/javascript'>alert('$message');
					   window.location.href='../testimonials-add.php';</script>";
					   
			}
			
		}else {
			$message = "Invalid file type!";
			echo "<script type='text/javascript'>alert('$message');
				   window.location.href='../testimonials-add.php';</script>";
		}
	}

?>