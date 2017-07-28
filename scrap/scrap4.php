<?php
	$name = "http://blog.oskoui-oskoui.com/images/big_sur.jpg";
	$myImage = imagecreatefromjpeg($name);
	//Get the height and width of the image
	list($width, $height) = getimagesize($name);
	$scale = 0.5;
	$myImageZoom=imagecreatetruecolor($width*$scale,$height*$scale);
	$b=imagecopyresampled($myImageZoom,$myImage,0,0,0,0,$width*$scale,$height*$scale,$width,$height);
	imagejpeg($myImageZoom, null, 100);
?>
