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
			<form  method = "POST" action = "show.php">
				<h1><u><i>REGISTRATION DETAILS:</i></u></h1>
				<table class=" table table-striped">
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass"></td>
					</tr>
					<tr>
						<td>E-mail:</td>
						<td><input type="text" name="email"></td>
					</tr>
					 <tr>
						<td>Address:</td>
						<td><select name="address">
						<option value="Kolkata">KOLAKTA</option>
						<option value="Bangalore">BANGALORE</option>
						<option value="Delhi">DELHI</option>
						<option value="Hyderabad">HYDERABAD</option>
						</select></td>
					</tr>
					<tr>
						<td>Hobbies:</td> 
						<td>	
							<li><input type="checkbox" name="hob[]" value="singing">SINGING</li>
							<li><input type="checkbox" name="hob[]" value="dancing">DANCING</li>
							<li><input type="checkbox" name="hob[]" value="drawing">DRAWING</li>
							<li><input type="checkbox" name="hob[]" value="playing_chess">PLAYING CHESS</li>
							<li><input type="checkbox" name="hob[]" value="playing_piano">PLAYING PIANO</li>
						</td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td><input type="radio" name="gender" value="female">Female
							<input type="radio" name="gender" value="male">Male
						</td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
						<td><td><input type="submit" value="Submit"></td></td>
					</tr>
				</table>  
			</form>
		</center>
	</body>
</html>
