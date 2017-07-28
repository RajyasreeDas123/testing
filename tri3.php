
<?php
	$max_width = 240;
	$max_height = 180;

	// Get current dimensions
	$old_width  = imagesx($image);
	$old_height = imagesy($image);

	// Calculate the scaling we need to do to fit the image inside our frame
	$scale      = min($max_width/$old_width, $max_height/$old_height);

	// Get the new dimensions
	$new_width  = ceil($scale*$old_width);
	$new_height = ceil($scale*$old_height);
	// Create new empty image
	$new = imagecreatetruecolor($new_width, $new_height);

	// Resize old image into new
	imagecopyresampled($new, $image,0,0,0,0,$new_width, $new_height, $old_width, $old_height);
?>
