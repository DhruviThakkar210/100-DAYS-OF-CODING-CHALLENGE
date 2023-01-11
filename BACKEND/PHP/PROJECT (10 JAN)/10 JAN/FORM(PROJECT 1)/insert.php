
<?php 
  
  include_once 'config.php';
  if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $position=$_POST['position'];
    $salary=$_POST['salary'];
    
    $sql = "INSERT INTO resume (username, pass)VALUES ('$name', '$position','$salary')";

    if (mysqli_query($conn, $sql)) {
      header("Location: display1.php");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

mysqli_close($conn);

  }

 ?>