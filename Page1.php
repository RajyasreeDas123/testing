<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="mystyles.css" media="screen" />
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	    <script type="text/javascript"> 
			function validateform()
			{
				var name = document.myform.name;
				var ufile= document.myform.ufile;
				if (name.value == "")
				{
					window.alert("Please enter your name.");
					name.focus();
					return false;
				}
				else if (ufile.value == "")
				{
					window.alert("Please enter your image.");
					ufile.focus();
					return false;
				}
				else
				{
					window.alert("READY TO INSERT....");
					return true ;
				}
			}
		 </script>
	</head>
	<body style ="background-color:#BAEEFA">
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="Page3.php">Click Here to see the Database</a></li>
			</ul>
		  </div>
		</nav>
		<br>
		<br>
		<form  name="myform" method = "POST" action = "Page2.php" enctype="multipart/form-data" onsubmit="return validateform();">
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
