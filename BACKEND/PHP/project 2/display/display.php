<?php
  include_once('../config/config.php');
$sql = "SELECT id,name,rollno,standard FROM student";
$result = mysqli_query($conn, $sql);


//mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jdh</title>
  <link rel="stylesheet" type="text/css" href="display.css">
</head>
<body>
<?php 

     if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
 ?>
<div class="a-box">
  <div class="img-container">
    <div class="img-inner">
      <div class="inner-skew">
        <img src="https://images.unsplash.com/photo-1584791097929-aa825fe8e1e1?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ">
      </div>
    </div>
  </div>
  <div class="text-container">
    <h3><?php echo$row['name']; ?></h3>
    <div>
      <?php echo"roll no is : ";echo$row['rollno']; echo"</br>" ?>

      <?php echo"standard is : "; echo$row['standard']; ?>
  </div>
</div>
        <?php 
            }
          }
            else {
              echo "0 results";
            }
            mysqli_close($conn)
         ?>
</body>
</html>