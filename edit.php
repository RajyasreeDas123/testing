<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	    <script type="text/javascript">
			function MyFunction() 
			{
				var name = document.myform.name;
				//alert(name.value);
				alert("Ready to update...");
				
			}
		</script>
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
		echo "<br>";
		$ID=$_REQUEST["id"];
		$res = $conn->query("SELECT * FROM EmployeeData WHERE EMPID='$ID'");
		while($row=$res->fetch_array())
		{
	?>
	
	<body style ="background-color:#d7f4fb">
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="Page3.php">Click Here to see the Database</a></li>
			</ul>
		  </div>
		</nav>
		<br><br>
		<div class="container">
				<form name="myform" role="form"class="form-group" method="post" action ="update.php" enctype="multipart/form-data" onsubmit="return MyFunction();">
					<div>
					  <label>EMPID:</label>
					  <input type="text" class="form-control" readonly="readonly" name="eid" value ="<?php echo $row['EMPID']; ?>">
					</div>
					<div class="form-group">
					  <label>EMPNAME:</label>
					  <input type="TEXT" class="form-control" name="name" value="<?php echo $row['EMPNAME']; ?>">
					</div>
					<div class="form-group">
					  <label>EMPAGE:</label>
					  <input type="TEXT" class="form-control" name="age" value="<?php echo $row['EMPAGE']; ?>">
					</div>
					<div class="form-group">
						<input class="form-control" type="hidden" name="imgpath" value="<?php echo $row['EMPIMAGEPATH']; ?>">
					</div>
					<div class="form-group">
					  <label>EMPIMAGE:</label>
					  <div><img src="<?php echo $row['EMPIMAGEPATH'] ?>" class="img-rounded" ></div>
					 </div>
					 <div>
					   <label>CHOOSE ANOTHER IMAGE:</label>
					  <input name="ufile" type="file" id="ufile" size="50">
					</div>
					<div style="text-align:center">
						<div><input type="submit" name="Submit" value="UPDATE DETAILS"></div>
					</div>
				</form>
		</div>
		<?php
			} 
		?>
	</body>						
</html>
