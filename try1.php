<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript">  
			var ck_fname = /^[A-Za-z0-9 ]{3,20}$/;
			var ck_lname = /^[A-Za-z0-9 ]{3,20}$/;
			var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]
							{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i 
			function validateform()
			{
				var fname = myform.fname.value;
				var email = myform.email.value;
				var lname = myform.lname.value;
				var gender = myform.gender.value;
				var errors = [];
				if (!ck_fname.test(fname))
				{
					errors[errors.length] = "Enter a valid firstname.";
				}
				if (!ck_email.test(email)) 
				{
					errors[errors.length] = "Enter a valid email address.";
				}
				if (!ck_lname.test(lname))
				{
					errors[errors.length] = "Enter avalid last name .";
				}
				if (gender==0) {
					errors[errors.length] = "Select Gender";
				}
				if (errors.length > 0)
				{
					reportErrors(errors);
					return false;
				}
				return true;
			}
			function reportErrors(errors){
			 var msg = "Please Enter Valide Data...\n";
			 for (var i = 0; i<errors.length; i++) {
			 var numError = i + 1;
			  msg += "\n" + numError + ". " + errors[i];
			}
			 alert(msg);
				}
		</script>
	</head>
	<body>
		<center>
			<form name="myform" method = "POST" onsubmit="return validateform();">
				<h1><u><i>REGISTRATION DETAILS:</i></u></h1>
				<table class=" table table-striped">
					<tr>
						<td>EmpId:</td>
						<td><input type="number" name="eid" size="30"></td>
					<tr>
						<td>FirstName:</td>
						<td><input type="text" name="fname" size="30"></td>
					<tr>
						<td>LastName:</td>
						<td><input type="text" name="lname" size="30"></td>
					</tr>
					<tr>
						<td>E-mail:</td>
						<td><input type="text" name="email" size="30"></td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td><input type="radio" name="gender" value="female">Female
							<input type="radio" name="gender" value="male">Male
						</td>
					</tr>
				    <tr>
						<td><td><input type="submit" name="submit" value="Submit"></td></td>
					</tr>
				</table>  
			</form>
		</center>
	</body>
</html>
