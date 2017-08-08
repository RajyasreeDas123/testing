<?php
	include_once 'test2.php';
	$con = new Test();
	$table = 'EmployeeData';
	$ID=$_REQUEST["id"];
	$where = "`EMPID`=".$ID;
	$res=$con->select($table,$where);
?>
<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<?php
		while($row=mysql_fetch_row($res))
		{
	?>
	
	<body style ="background-color:#d7f4fb">
		<div class="container">
			<form name="myform" role="form"class="form-group" method="post" action ="test6.php" enctype="multipart/form-data" onsubmit="return MyFunction();">
				<div>
					<label>EMPID:</label>
					<input type="text" class="form-control" readonly="readonly" name="eid" value ="<?php echo $row[0]; ?>">
				</div>
				<div class="form-group">
					<label>EMPNAME:</label>
					<input type="TEXT" class="form-control" name="name" value="<?php echo $row[1]; ?>">
				</div>
				<div class="form-group">
					<label>EMPAGE:</label>
					<input type="TEXT" class="form-control" name="age" value="<?php echo $row[2]; ?>">
				</div>
				<div class="form-group">
					<input class="form-control" type="hidden" name="imgpath" value="<?php echo $row[3]; ?>">
				</div>
				<div class="form-group">
					<label>EMPIMAGE:</label>
					<div>
						<img src="<?php echo $row[4] ?>" class="img-rounded" >
					</div>
				</div>
				<div>
					<label>CHOOSE ANOTHER IMAGE:</label>
					<input name="ufile" type="file" id="ufile" size="50">
				</div>
				<div style="text-align:center">
					<div><input type="submit" name="Update" value="UPDATE DETAILS"></div>
				</div>
			</form>
		</div>
		<?php
			} 
		?>
	</body>						
</html>
