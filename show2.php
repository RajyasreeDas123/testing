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
	$sql = "INSERT INTO Employee (EMPID,NAME,EMAIL,GENDER)
			VALUES (102,'Mary','mary@example.com','Female'),(103,'Disha','disha@example.com','Female')";
	if ($conn->multi_query($sql) === TRUE) 
	{
		echo "New records created successfully";
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();
?>
