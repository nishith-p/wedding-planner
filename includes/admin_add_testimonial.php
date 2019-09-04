<?php

	include 'config.php';
	
	if(isset($_POST['update'])){
		
		$testid = $_POST['pid'];
		$approvel = $_POST['ptype'];
		
		$sql = "UPDATE testimonial SET Approval='$approvel' WHERE test_id='$testid'";
								
						if ( $conn->query($sql) === TRUE ) {
							
							$message = "Successfully updated!";
							echo "<script type='text/javascript'>alert('$message');
								   window.location.href='../admin.testimonial.php';</script>";
						}else {
							
							echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}
	}
	
	if(isset($_POST['delete'])) {
		
		$testid = $_POST['pid'];
		
		$sql = "DELETE FROM testimonial WHERE test_id='$testid'";
							
		if ( $conn->query($sql) === TRUE ) {
							
			$message = "Successfully deleted!";
			echo "<script type='text/javascript'>alert('$message');
				   window.location.href='../admin.testimonial.php';</script>";
		}else {
								
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		
		
	}

?>