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
		$ID=$_REQUEST["id"];
		$res = $conn->query("DELETE FROM EmployeeData WHERE EMPID='$ID'");
		$res1 = $conn->query("SELECT EMPID,EMPNAME,EMPAGE FROM EmployeeData WHERE EMPID='$ID'");
		if($res1!="")
			echo "<BR><BR><BR>RECORD DELETED";
		else
			echo "<br>Nothing to Dispaly";
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
	<body style ="background-color:#d7f4fb">
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="Page3.php">Click here to see the Database Table</a></li>
			</ul>
		  </div>
		</nav>
	</body>
</html>
