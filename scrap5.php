<?php
	$path= $_FILES['ufile']['name'];
	$date=new DateTime();
	$new_filename=$date->format('Y-m-d H:i:s').$_FILES['ufile']['name'];
	copy($_FILES['ufile']['tmp_name'], 'uploads1/'.$new_filename);    		 
	$filename = 'uploads1/'.$new_filename;
	
	$org_info = getimagesize($filename);
	$width=$org_info[0];  //1920
	$height=$org_info[1]; //1200
	
	$givenWidth=200;
	$givenHeight=200;
	
	header('Content-Type: image/jpeg');
	
	$ratioWidth=$width/$givenWidth;  //9.6
	$ratioHeight=$height/$givenWidth;  //6.0
	
	$ratio=min($ratioWidth,$ratioHeight);  //6.0
	
	$targetWidth=round(($width/$ratio),0);  //320
	//echo $targetWidth;
	$targetHeight=round(($height/$ratio),0);  //200
	//echo $targetHeight;
	
	$targetImage = imagecreatetruecolor($targetWidth,$targetHeight);  //(320,200)
	
	$image = imagecreatefromjpeg($filename);
	imagecopyresampled($targetImage, $image, 0, 0, 0, 0,$targetWidth,$targetHeight,$width,$height);
	imagejpeg($targetImage,null,100);
	
	

?>

<html>
	<div class="placeholder">
    <img src="placeholder-xbox.png" width="200" height="200"/>
	</div>
</html>
