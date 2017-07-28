<?php
	$path= "uploads/".$_FILES['ufile']['name'];
	echo "Path of the file is: ".$path;
	echo "<br>";
	$new_temp_filename= strtolower(preg_replace('/[^a-zA-Z0-9_ -.]/s', '_', $_FILES['ufile']['name']));  //converts the filename to lowercase and stores it in a new variable
	copy($_FILES['ufile']['tmp_name'], 'uploads1/'.$new_temp_filename); //copies the tempfile in a new folder temporarily
	$i=0;      // A counter for the tail to append to the filename
	$new_filename = $new_temp_filename;  //stores the temporary filename to a new filename
	$new_filepath='uploads/'.$new_filename; //loads the file in the desied destination
	while(file_exists($new_filepath))  //checks the file existence and enters the loop
	{
		$tail = str_pad((string) $i, 3, "0", STR_PAD_LEFT); // Converts the integer in $i to a string of 3 characters with left zero fill.
		$fileinfos = pathinfo($new_filepath); // Gathers some infos about the file
		if($i>0)
		{ // If we aren't at the first while cycle (where you have the filename without any added strings) then delete the tail (like "__000") from the filename to add another one later (otherwise you'd have filenames like myfile__000__001__002__003.jpg)
			$previous_tail = str_pad((string) $i-1, 3, "0", STR_PAD_LEFT);
			echo "<br>1. ".$previous_tail."<br>";
			$new_filename = str_replace('__'.$previous_tail,"",$new_filename);  //replacing the filename with the new filename(having our defined extension)
			
		}
		
		$new_filename = str_replace('.'.$fileinfos['extension'],"",$new_filename); // Deletes the extension
		
		$new_filename = $new_filename.'__'.$tail.'.'.$fileinfos['extension']; // Append our tail and the extension
		//echo "<br>4. ".$new_filename."<br>";
		$new_filepath = 'uploads/'.$new_filename; 
		//echo "<br>1. ".$new_filepath."<br>";
		$i++;
	}
	copy('uploads1/'.$new_temp_filename, $new_filepath); // Finally we copy the file to its destination directory
	unlink('uploads1/'.$new_temp_filename); // and delete the temporary one	
	echo "<br>".$new_filename;
	echo "<br>".$new_filepath;
?>
