<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) 
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Database Connection made Successfully";
	echo "<br>";
	$nameErr=$emailErr=$genderrErr="";
	$gender="";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (empty($_POST["fname"])) 
		{
			$nameErr = "FirstName is required";
		} else 
		{
			$fname = $_POST["fname"];
		}
		if (empty($_POST["email"])) 
		{
			$emailErr = "Email is required";
		} else 
		{
			$email = $_POST["email"];
		}
		if (empty($_POST["gender"])) 
		{
			$genderrErr = "Gender is required";
		} else 
		{
			$email = $_POST["email"];
		}
		$eid = $_POST["eid"];
		$lname = $_POST["lname"];
		$contactno = $_POST["contactno"];
		$address = $_POST["address"];
		if($eid !=''&& $fname=''&& $email==''&&$gender=='')
		{
			$query = "insert into EmployeeTable(EMPID,FNAME,LNAME,ADDRESS,EMAIL,GENDER,CONTACTNO) values ('$eid', '$fname','$lname','$address','$email', '$gender', '$contactno')";
			if ($conn->query($query) === TRUE)
				echo "New record created successfully";
			else 
				echo "Error: " . $query . "<br>" . $conn->error;
		}
		else
			echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
	}
	$conn->close();
?>
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
			<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<h1><u><i>REGISTRATION DETAILS:</i></u></h1>
				<table class=" table table-striped">
					<tr>
						<td>EmpId:</td>
						<td><input type="number" name="eid" size="30"></td>
						
					<tr>
						<td>FirstName:</td>
						<td><input type="text" name="fname" size="30">
						<span class="error">* <?php echo $nameErr;?></span>
						<br><br></td>
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
						<td><input type="text" name="email" size="30">
						<span class="error">* <?php echo $emailErr;?></span>
						<br><br></td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td><input type="radio" name="gender" value="female">Female
							<input type="radio" name="gender" value="male">Male
						<span class="error">* <?php echo $genderrErr;?></span>
						<br><br></td>
					</tr>
					<tr>
						<td>Contact No:</td>
						<td><input type="number" name="contactno" size="30"></td>
					</tr>
				    <tr>
						<td><td><input type="submit" value="Submit"></td></td>
					</tr>
				</table>  
			</form>
			 <p id="error_para" ></p>

		</center>
	</body>
</html>
