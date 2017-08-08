<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="refresh" content="50; url=/sample.php">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="mystyles.css" media="screen" />
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	    <script type="text/javascript"> 
		</script>
	</head>
	<body style ="background-color:#BAEEFA">
		<form  name="myform" method = "POST" action = "test6.php" enctype="multipart/form-data">
			<div style="text-align:center"><h1><u><b>REGISTRATION DETAILS:</b></u></h1></div>
			<div class="form-group">
				<label>EMPNAME:</label>
				<input type="TEXT" class="form-control" name="name">
			</div>
			<div class="form-group">
				<label>EMPAGE:</label>
				<input type="TEXT" class="form-control" name="age">
			</div>
			<div class="form-group">
				<label>EMPIMAGE:</label>
					<div><input name="ufile" type="file" id="ufile" size="50"></div>
			</div>
			<div style="text-align:center">
				<div><input type="submit" name="Submit" value="SUBMIT DETAILS"></div>
			</div>
		</form>
	</body>
</html>
