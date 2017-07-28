<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<center>
			<form  method = "POST" action = "show3.php">
				<h1><u><i>REGISTRATION DETAILS:</i></u></h1>
				<table class=" table table-striped">
					<tr>
						<td>EmpId:</td>
						<td><input type="number" name="eid"></td>
					</tr>
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
					<tr>
						<td>E-mail:</td>
						<td><input type="text" name="email"></td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td><input type="radio" name="gender" value="female">Female
							<input type="radio" name="gender" value="male">Male
						</td>
					</tr>
				    <tr>
						<td><td><input type="submit" value="Submit"></td></td>
					</tr>
				</table>  
			</form>
		</center>
	</body>
</html>

					
