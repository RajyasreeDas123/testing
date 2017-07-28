<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	   <script type="text/javascript">  
			function validateform()
			{  
				var eid = document.myform.eid; 
				var fname = document.myform.fname;
				var lname = document.myform.lname;
				var email = document.myform.email;
				var gender = document.myform.gender;
				var contactno = document.myform.contactno;				 
				if (eid.value == "" && fname.value == "" && lname.value == "" && email.value == "" && gender.value == "" && contactno.value == "" )
				{
					window.alert("FIELDS MISSING....");
					return false;
				}
				else if (eid.value == "")  
				{  
					alert("Employee Id should not be empty");  
					eid.focus();  
					return false;  
				}  
				else if (fname.value == "")
				{
					window.alert("Please enter your firstname.");
					fname.focus();
					return false;
				}
				else if (lname.value == "")
				{
					window.alert("Please enter your lastname.");
					lname.focus();
					return false;
				}
				else if (email.value == "")
				{
					window.alert("Please enter an e-mail address.");
					email.focus();
					return false;
				}
				else if (email.value.indexOf("@", 0) < 0)
				{
					window.alert("Please enter a valid e-mail address.");
					email.focus();
					return false;
				}
				else if (email.value.indexOf(".", 0) < 0)
				{
					window.alert("Please enter a valid e-mail address.");
					email.focus();
					return false;
				}
				else if (contactno.value == "")
				{
					window.alert("Please enter your contact details.");
					contactno.focus();
					return false;
				}	
				else if (gender.value== "") 
				{
					window.alert("Please enter your gender.");
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
	<body>
		<center>
			<form name="myform" method = "POST" action = "show4.php" onsubmit="return validateform();">
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
						<td>Address:</td>
						<td><select name="address">
							<option value="Kolkata">KOLAKTA</option>
							<option value="Bangalore">BANGALORE</option>
							<option value="Delhi">DELHI</option>
							<option value="Hyderabad">HYDERABAD</option>
						</select></td>
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
						<td>Contact No:</td>
						<td><input type="number" name="contactno" size="30"></td>
					</tr>
				    <tr>
						<td><td><input type="submit" name="submit" value="Submit"></td></td>
					</tr>
				</table>  
			</form>
		</center>
	</body>
</html>
