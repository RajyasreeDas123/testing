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
		$contactno = $_POST["contactno"];
		$email = $_POST["email"];
		$gender = $_POST["gender"];
		$path= $_FILES['ufile']['name'];
		$date=new DateTime();
		$new_filename=$date->format('Y-m-d H:i:s').$_FILES['ufile']['name'];
		$new_filepath="uploads/".$date->format('Y-m-d H:i:s').$_FILES['ufile']['name'];
		$query = "insert into Temporary(NAME,PHONE,EMAIL,GENDER,IMAGE) values
				('$name','$contactno','$email','$gender','$new_filepath')";
		if ($conn->query($query) === TRUE)
			echo "New record created successfully";
		else 
			echo "Error: " . $query . "<br>" . $conn->error;
	}
	$conn->close();
?>
