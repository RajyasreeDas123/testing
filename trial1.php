	<?php		
			
			$path= $_FILES['ufile']['name'];
			$date=new DateTime();
			$new_filename=$date->format('Y-m-d H:i:s').$_FILES['ufile']['name'];
			$new_filepath="uploads/".$date->format('Y-m-d H:i:s').$_FILES['ufile']['name'];
			copy($_FILES['ufile']['tmp_name'], 'uploads/'.$new_filename);     
			$new_filepath='uploads/'.$new_filename; 
			echo $new_filename;
		?>
