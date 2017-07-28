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
		$name = $_POST["name"];
		$age = $_POST["age"];
		$path= $_FILES['ufile']['name'];
		$filename=$_FILES['ufile']['name'];
		if($path=='')
			echo "<br>Picture is Blank...";
		else
		{
			echo "Path of the file is: ".$path;
			echo "<br>";
			$new_temp_filename= strtolower(preg_replace('/[^a-zA-Z0-9_ -.]/s', '_', $_FILES['ufile']['name']));  
			copy($_FILES['ufile']['tmp_name'], 'uploads1/'.$new_temp_filename); 
			$i=0;      
			$new_filename = $new_temp_filename;  
			$new_filepath='uploads/'.$new_filename; 
			while(file_exists($new_filepath))  
			{
				$tail = str_pad((string) $i, 3, "0", STR_PAD_LEFT); 
				$fileinfos = pathinfo($new_filepath); 
				if($i>0)
				{ 
					$previous_tail = str_pad((string) $i-1, 3, "0", STR_PAD_LEFT);
					$new_filename = str_replace('__'.$previous_tail,"",$new_filename); 
				}
				$new_filename = str_replace('.'.$fileinfos['extension'],"",$new_filename); 
				$new_filename = $new_filename.'__'.$tail.'.'.$fileinfos['extension']; 
				$new_filepath = 'uploads/'.$new_filename; 
				$i++;
			}
			copy('uploads1/'.$new_temp_filename, $new_filepath); 
			unlink('uploads1/'.$new_temp_filename); 
			$path=$new_filepath;
			$filename=$new_filename;
		}
		
		if($eid !=''&& $path!='')
		{
			$query = "INSERT INTO EmployeeData (EMPID,EMPNAME,EMPAGE,EMPIMAGE,EMPIMAGEPATH)VALUES ('$eid', '$name', '$age', '$filename','$path')";
			if ($conn->query($query) === TRUE)
				echo "New record created successfully";
			else 
				echo "Error: " . $query . "<br>" . $conn->error;
		}
		else
			echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
		$conn->close();
	}
	else
		echo "Nothing to insert....";
?>
<html>
	<body style ="background-color:#ffe3dd">
		<br><br><br><a href="Page3.php">Click Here to View The Database Table</a>
	</body>	
</html>
