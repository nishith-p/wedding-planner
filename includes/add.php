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
				if($fileSize < 1000000){
					$fileNameNew = uniqid('', true).".".$fileActualExt;
					$fileDestination = '../uploads/'.$fileNameNew;
					move_uploaded_file($fileTmpName, $fileDestination);
					
					$pname = $_POST['pname'];
					$ptype = $_POST['ptype'];
					$innertype = $_POST['innertype'];
					$pquan = $_POST['pquan'];
					$pprice = $_POST['pprice'];
					$description = $_POST['des'];
					
					$sql = "INSERT INTO product (product_name, product_type, inner_type, quantity, price, img_location, description)
							VALUES('$pname', '$ptype', '$innertype', '$pquan', '$pprice', '$fileNameNew', '$description')";
					
					if ( $conn->query($sql) === TRUE ) {
						
						$message = "Successfully added to the database!";
						echo "<script type='text/javascript'>alert('$message');
							  window.location.href='../additems.php';</script>";
					}else {
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
			
					
				}else {
					$message = "File size is higher!";
					echo "<script type='text/javascript'>alert('$message');
						   window.location.href='../additems.php';</script>";
				}
				
			}else{
				$message = "Error in uploading file!";
				echo "<script type='text/javascript'>alert('$message');
					   window.location.href='../additems.php';</script>";
			}
			
		}else {
			$message = "Invalid file type!";
			echo "<script type='text/javascript'>alert('$message');
				   window.location.href='../additems.php';</script>";
		}
	}

?>