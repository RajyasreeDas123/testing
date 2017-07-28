<?php
	if(isset($_POST['submit'])) 
	{
		$date=new DateTime();
		$new_path="uploads/".$_POST['ufile'];
		$new_filename='uploads1/'.$date->format('Y-m-d H:i:s').$_POST['ufile'];
		copy($new_path, $new_filename);    
		echo "Path of the file is ".$new_path;
		//$path= "uploads/".$_POST['ufile'];
		$org_info = getimagesize($new_filename);
		$width=$org_info[0];
		echo "<br>Width of the image is: ".$width;
		$height=$org_info[1];
		echo "<br>Height of the image is: ".$height;
		if($width<200 || $height<200)
			echo"<br><br>Please enter a 200x200 image";
		else
		{	
			
			
			$percent = 0.5;
			$new_width = $width * $percent;
			echo "<br>Width of new image is: ".$new_width;
			$new_height = $height * $percent;
			echo "<br>Height of new image is: ".$new_height;
			$rsr_org = imagecreatefromjpeg($new_filename);  //returns an image identifier which represents the image obtained from the given filename
			$rsr_scl = imagescale($rsr_org, $new_width,$new_height,  IMG_BICUBIC_FIXED); //scales an image with new dimension
			imagejpeg($rsr_scl,$new_filename);  //creates a jpeg file from a given image
			imagedestroy($rsr_org);  //frees the memory 
			imagedestroy($rsr_scl);
			/*$scl_info = getimagesize($new_path);
			$width1=$scl_info[0];
			echo "<br>Width of new image is: ".$width1;
			$height1=$scl_info[1];
			echo "<br>Height of new image is: ".$height1;*/
			
			/*
			$date=new DateTime();
			$new_path="uploads/".$date->format('Y-m-d H:i:s').$_POST['ufile'];
			$percent = 0.5;
			list($width, $height) = getimagesize($new_path);
			$new_width = $width * $percent;
			$new_height = $height * $percent;
			$image_p = imagecreatetruecolor($new_width, $new_height);
			$image = imagecreatefromjpeg($new_path);
			imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
			imagejpeg($image_p, null, 100);
			*/
			
		}
	}
?>
<html>
	<head>
		
	</head>
	<body>
		<form name="myform" method = "POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div id="show">
				<label for="file">Choose your Image: </label>
				<input type="file" id="ufile" name="ufile" >
				<input type="submit" name="submit" value="Upload" />
			 </div>
		</form>
	 
	</body>
</html>
