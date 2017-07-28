<?php
	$path= "uploads/".$_FILES['ufile']['name'];
	echo "Path of the file is: ".$path;
	echo "<br>";
	if (file_exists($path)==1)
    {
		echo "<br>";
		echo "Sorry, file already exists in the folder.";
		$uploadOk = 0;
	}
	else
	{
		if($_FILES['ufile']['name'] != "")
		{
			if(copy($_FILES['ufile']['tmp_name'], $path))
			{
				echo "Successful<BR/>";
				echo "File Name : ".$_FILES['ufile']['name']."<BR/>";
				echo "File Size : ".$_FILES['ufile']['size']."<BR/>";
				echo "File Type : ".$_FILES['ufile']['type']."<BR/>";
				echo "<img src=\"$path\" width=\"250\" height=\"250\">";
				echo "<br>";
				echo "File uploaded in the folder...";
			}
			else
			{
				echo "Error";
			}
		}
	}
	
?>
