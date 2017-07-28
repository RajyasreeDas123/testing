<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) 
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "<br><br><br><br>";
	$name = $_POST["name"];
	$age = $_POST["age"];
	$path= $_FILES['ufile']['name'];
	$date=new DateTime();
	$new_filename=$date->format('Y-m-d H:i:s').$_FILES['ufile']['name'];
	$new_filepath="uploads/".$date->format('Y-m-d H:i:s').$_FILES['ufile']['name'];
	copy($_FILES['ufile']['tmp_name'], 'uploads/'.$new_filename);     
	$new_filepath='uploads/'.$new_filename; 
	echo $new_filename;
	$res = $conn->query("INSERT INTO EmployeeData (EMPNAME,EMPAGE,EMPIMAGE,EMPIMAGEPATH)
		VALUES ('$name', '$age', '$new_filename','$new_filepath')");
?>
<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="mystyles.css" media="screen" />
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body style ="background-color:#ffe3dd">
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="Page3.php">Click Here to see the Database</a></li>
			</ul>
		  </div>
		</nav>
	</body>	
</html>
