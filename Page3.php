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
			alert("Ready to delete...");
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
	?>
	<body style ="background-color:#baeefa">
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="Page1.php">ADD A NEW RECORD</a></li>
			</ul>
		  </div>
		</nav>
		<br>
		<br>
		<br>
		<div class="container" align="center"><h1><span class="label label-warning">EMPLOYEE DETAILS</span></h1></div>
		<br>
		<form method="post" name="frm" onsubmit="return MyFunction();">
			<table width="50%" align="center" border="0">
				<tr>
					<td><strong>EmpId</strong></td>
					<td><strong>EmpName</strong></td>
					<td><strong>EmpAge</strong></td>
					<td><strong>EmpImage</strong></td>
					<td><strong>EmpImagePath</strong></td>
				</tr>
				<?php
					$res = $conn->query("SELECT * FROM EmployeeData");
					$count = $res->num_rows;
					if($count > 0)
					{
						while($row=$res->fetch_array()) //fetching the rows from the res variable
						{
				?>
				<tr>
					<td><input type="text" readonly="readonly" name="eid" value ="<?php echo $row['EMPID']; ?>"></td>
					<td><input type="text" readonly="readonly" name="name" value="<?php echo $row['EMPNAME']; ?>"></td>
					<td><input type="text" readonly="readonly" name="age" value="<?php echo $row['EMPAGE']; ?>"></td>
					<td><input type="text" readonly="readonly" name="imgname" value ="<?php echo $row['EMPIMAGE']; ?>"></td>
					<td><input type="text" readonly="readonly" name="imgpath" value ="<?php echo $row['EMPIMAGEPATH']; ?>"></td>
					<?php $eid= $row['EMPID'];
					?>
					<td><a href="edit.php?id=<?php echo $eid;?>">Edit</a></td> <!--passing the value of eid for editing or deleting -->
					<td><a href="delete.php?id=<?php echo $eid;?>">Delete</a></td>
				</tr>
				<?php
						} 
					}
					else
					{
				?>
				<tr>
					<td> No Records Found ...</td>
				</tr>
				<?php
					}
				?>
			</table>
		</form>
	</body>
</html>
