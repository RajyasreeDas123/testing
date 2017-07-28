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
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$eid = $_POST["eid"];
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$contactno = $_POST["contactno"];
		$address = $_POST["address"];
		$email = $_POST["email"];
		$gender = $_POST["gender"];
		if($eid !='')
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
	<body>
		<form action="registration.php">
			<hr>
			<br>
			<br>
			<tr>
				<td><td><input type="submit" value="ADD ANOTHER EMPLOYEE"></td></td>
			</tr>
	</body>
</head>
