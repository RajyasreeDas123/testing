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
		$name = $_POST["name"];
		$email = $_POST["email"];
		$eid = $_POST["eid"];
		$gender = $_POST["gender"];
		if($eid !='')
		{
			$query = "insert into Employee(EMPID,NAME,EMAIL,GENDER) values ('$eid', '$name', '$email', '$gender')";
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
