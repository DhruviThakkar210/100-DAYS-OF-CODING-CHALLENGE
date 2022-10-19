
<?php
  include_once('../config/config.php');
$sql = "SELECT id,username,pass FROM login";
$result = mysqli_query($conn, $sql);


//mysqli_close($conn);
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>display</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 

     if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
 ?>
<div class="container">
  <div class="card">
    <div class="lines"></div>
    <div class="imageBox">
      <img src="https://i.pravatar.cc/600?img=24" alt="avatar">
    </div>
    <div class="content">
      <div class="details">
        <h2><?php echo$row['username']; ?> <br/> <span><?php echo$row['pass']; ?></span></h2>
        <div class="info">
          <h3>93 <br/><span>Posts</span></h3>
          <h3>170k <br/><span>Followers</span></h3>
          <h3>842 <br/><span>Following</span></h3>
        </div>
        <div class="actions">
          <button>Follow</button>
          <button>Message</button>
        </div>
      </div>
    </div>
  </div>
</div>
 <?php 

    
              }
            } else {
              echo "0 results";
            }
            mysqli_close($conn)
         ?>
</body>
</html>