<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="mystyles.css" media="screen" />
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "test";
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if (!$conn) 
		{
			die("Connection failed: " . mysql_connect_error());
		}
		echo "Database Connection made Successfully";
		echo "<br><br><br>";
		$eid=$_POST["eid"];
		$name = $_POST["name"];
		$age = $_POST["age"];
		$path= $_FILES['ufile']['name'];
		if($path!='')
		{
			$date=new DateTime();
			$new_filename=$date->format('Y-m-d H:i:s').$_FILES['ufile']['name'];
			copy($_FILES['ufile']['tmp_name'], 'uploads/'.$new_filename);     
			$new_filepath='uploads/'.$new_filename;
			$res = $conn->query("UPDATE EmployeeData SET EMPNAME='$name',EMPAGE='$age',EMPIMAGE='$new_filename',EMPIMAGEPATH='$new_filepath' WHERE EMPID='$eid'");
			echo "<br>1.Record Updated..."; 
		}
		else
		{
			$res = $conn->query("UPDATE EmployeeData SET EMPAGE='$age',EMPNAME='$name' WHERE EMPID='$eid'");
			echo "<br>2.Record Updated...";
		}
		
	?>
	<body style ="background-color:#d7f4fb">
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="Page1.php">ADD A NEW RECORD</a></li>
			  <li><a href="Page3.php">Click here to see the Database Table</a></li>
			</ul>
		  </div>
		</nav>
	</body>
</html>

