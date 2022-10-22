<?php 
	
	include_once '../config/config.php';
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$rollno=$_POST['rollno'];
		$standard=$_POST['standard'];
		
		$sql = "INSERT INTO student (name, rollno,standard)VALUES ('$name', '$rollno','$standard')";

		if (mysqli_query($conn, $sql)) {
		 	header("Location: ../display/display.php");
		} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

mysqli_close($conn);

	}

 ?>