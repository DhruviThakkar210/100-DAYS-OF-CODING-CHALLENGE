<?php
 include_once 'connection.php';

?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>display</title>
	<style type="text/css">
		@import url("https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap");

body {
	height: 100vh;
	background: linear-gradient(to bottom, #96305a, black);
}

.card {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translatey(-50%) translatex(-50%);

	background: #f0f0f0;
	height: 340px;
	width: 220px;
	border-radius: 7px;
	box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

* {
	font-family: "Inter", sans-serif;
}

.dot {
	margin: 13px auto;
	width: 15px;
	height: 15px;
	border-radius: 50%;
	background: #96305a;
	box-shadow: inset 0px 4px 4px rgba(0, 0, 0, 0.25);
}

.pic {
	margin: 13px auto;
	width: 190px;
	height: 190px;
	background: #ccc;
	background: url("https://drive.google.com/uc?export=view&id=1pTGjZG7HuIAC7ZM89DH8rOb1E0w1OHaL")
		no-repeat center;
	background-size: cover;
}

#link {
	width: 53px;
	height: 237px;
	background: rgba(255, 255, 255, 0.56);
	box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
	display: flex;
	justify-content: center;
	align-items: end;
}

#link a {
	margin: 2px;
	opacity: 70%;
}

#link a:hover {
	scale: 1.1;
}

#name {
	cursor: none;
	padding-top: 40px;
	margin-bottom: 4px;
	padding-left: 15px;
	font-weight: 700;
	font-size: 15px;
	line-height: 17px;
	letter-spacing: 0.135em;
	text-transform: uppercase;
}

#desc {
	cursor: none;
	margin: 0;
	padding-left: 15px;
	font-weight: 400;
	font-size: 11px;
	line-height: 12px;
}

	</style>
</head>
<body>
	<?php
 $sql = "SELECT id,name,position,salary FROM resume";

$result = $conn->query($sql)->fetchAll();
foreach($result as $row) {
 

	 ?>
<div class="card">
	<div class="dot"></div>
	<div class="pic">
		<div id="link">
			<a href="https://github.com/viuh9997" target="_blank">
				<img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="github.com/viuh9997" width="35">
			</a>
		</div>
		<img src="" alt="">
	</div>
	<p id="name"><?php echo $row['name'];?></p>
	<p id="desc"><?php  echo $row['position']; ?></p>
	<p id="desc"><?php  echo $row['salary']; ?></p>
	
</div>
<?php
 
  
} 



?>
</body>
</html>