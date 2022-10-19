<?php 
	
	include_once '../config/config.php';
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$pass=$_POST['pass'];
		
		$sql = "INSERT INTO login (username, pass)VALUES ('$username', '$pass')";

		if (mysqli_query($conn, $sql)) {
		 	header("Location: ../display/display.php");
		} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

mysqli_close($conn);

	}

 ?>