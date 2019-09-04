<?php

	include 'config.php';
	
	if(isset($_POST['update'])){
		
		$pid = $_POST['pid'];
		$pname = $_POST['pname'];
		$ptype = $_POST['ptype'];
		$innertype = $_POST['innertype'];
		$pquan = $_POST['pquan'];
		$pprice = $_POST['pprice'];
		$description = $_POST['des'];
					
		$file = $_FILES['file'];
		
		if (empty($pid) || empty($pname) || empty($ptype) || empty($innertype) || empty($pquan) || empty($pprice) || empty($file) || empty($description)) {
						
			$message = "Input fields!";
			echo "<script type='text/javascript'>alert('$message');
				  window.location.href='../update.delete.php';</script>";
		}else {
		
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
						
						$sql = "UPDATE product SET product_name='$pname', product_type='$ptype', inner_type='$innertype', quantity='$pquan', price='$pprice', 
								img_location='$fileNameNew', description='$description' WHERE product_id='$pid'";
								
						if ( $conn->query($sql) === TRUE ) {
							
							$message = "Successfully updated!";
							echo "<script type='text/javascript'>alert('$message');
								   window.location.href='../update.delete.php';</script>";
						}else {
							
							echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}
							
					}else {
						echo "File size is higher!";
					}
					
				}else{
					echo "Error in uploading file!";
				}
				
			}else {
				echo "Invalid file type!";
			}
		}
	}
	
	if(isset($_POST['delete'])) {
		
		$pid = $_POST['pid'];
		
		$sql = "DELETE FROM product WHERE product_id='$pid'";
							
		if ( $conn->query($sql) === TRUE ) {
							
			$message = "Successfully deleted!";
			echo "<script type='text/javascript'>alert('$message');
				   window.location.href='../update.delete.php';</script>";
		}else {
								
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		
		
	}

?>