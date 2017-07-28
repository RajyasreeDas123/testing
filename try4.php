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
	else
		echo "Connection Successful....<br>";
	function GetImageExtension($imagetype)
    {
       if(empty($imagetype)) 
		return false;
	   else
	   {
		   switch ($imagetype)
		   {
			   case 'image/bmp': 
					return '.bmp';
					break;
			   case 'image/gif': 
					return '.gif';
					break;
			   case 'image/jpeg': 
					return '.jpg';
					break;
			   case 'image/png': 
					return '.png';
					break;
			   default: return false;
			 }
		}
	}
	if (!empty($_FILES["ufile"]["name"])) 
	{
		$file_name=$_FILES['ufile']['name'];     
		echo "FILENAME: ";
		echo $file_name."<br>";
		$imgtype=$_FILES['ufile']['type'];   
		$ext= GetImageExtension($imgtype);
		echo "IMAGE TYPE: ";
		echo $ext."<br>";
		if(!empty($ext))
		{
			$target_path= "uploads/".$file_name;  
			echo "TARGET PATH: ";
			echo $target_path."<br>";
			$sql="INSERT into Images(ImageName,ImagePath) VALUES('$file_name','$target_path')";
			if($conn->multi_query($sql) === TRUE) 
			{
				echo "<br>Inserted Successfully in Database...";
			}
			else
			{
				exit("Error While uploading image on the server");
			}
		}
		else
			echo "File format not supported";
	}
?>

