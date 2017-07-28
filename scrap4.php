<?php
			
			
			$path= $_FILES['ufile']['name'];
			$date=new DateTime();
			$new_filename=$date->format('Y-m-d H:i:s').$_FILES['ufile']['name'];
			copy($_FILES['ufile']['tmp_name'], 'uploads1/'.$new_filename);    
			 
			$filename = 'uploads1/'.$new_filename;
			header('Content-Type: image/jpeg');
			/*
			
			$percent = 0.2;
			header('Content-Type: image/jpeg');
			list($width, $height) = getimagesize($filename);
			$new_width = $width * $percent;
			$new_height = $height * $percent;
			$image_p = imagecreatetruecolor($new_width, $new_height);
			$image = imagecreatefromjpeg($filename);
			imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
			imagejpeg($image_p, null, 100);
			copy($image_p, 'uploads1/'.$filename);    
			
			*/
					/*	$width=100;
						$height=100;
						$org_info = getimagesize($filename);
						$w=$org_info[0];  //960
						$h=$org_info[1];  
					    $ratio = max($width/$w, $height/$h);
					    $h = ceil($height / $ratio);
					    $x = ($w - $width / $ratio) / 2;
					    $w = ceil($width / $ratio);
					    $image = imagecreatefromjpeg($filename);
					    $tmp = imagecreatetruecolor($width, $height);
						imagecopyresized($tmp, $image, 0, 0,$x, 0, $width, $height,$w, $h);
						header('Content-Type: image/jpeg');
						imagejpeg($tmp,null,100);
					*/	 
			
			
			
			$org_info = getimagesize($filename);
			$width=$org_info[0];  //960
			$height=$org_info[1];  //600			
			$newwidth=200;
			$newheight=($height/$width)*$newwidth;
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			$src = imagecreatefromjpeg($filename);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
			imagejpeg($tmp,null,100);
			imagedestroy($tmp);			
									
			
				
			/*
			
			$size=$_FILES['ufile']['size'];  //
			//echo "<br>SIZE: ".$size;  //132697
			//header('content-Type:image/jpeg');
			$org_info = getimagesize($filename);
			$width=$org_info[0];  //960
			$height=$org_info[1];  //600
			//echo "<br>ORIGINAL WIDTH: ".$width;
			//echo "<br>ORIGINAL HEIGHT: ".$height;
			$ratio=$width/$height;  //1.6
			$targetWidth = $targetHeight = min($size, max($width, $height));  //960
			if ($ratio < 1) 
			{
				$targetWidth = $targetHeight * $ratio;
			}
			 else 
			 {
				$targetHeight = $targetWidth / $ratio;  //900
			 }
			 $srcWidth = $width;  //960
			 $srcHeight = $height;  //600
			 $srcX = $srcY = 0; // x and y co-ordinate of source point
			 $targetWidth = $targetHeight = min($width, $height, $size);  //600
			 if ($ratio < 1) 
			 {
				$srcX = 0;
				$srcY = ($height / 2) - ($width / 2);
				$srcWidth = $srcHeight = $width;
			}
			else
			{
				$srcY = 0;
				$srcX = ($width / 2) - ($height / 2);  //480-300=180 
				$srcWidth = $srcHeight = $height;  //600
			}
			//echo "<br>TARGET WIDTH: ".$targetHeight;
			//echo "<br>TARGET HEIGHT: ".$targetWidth;
			$targetImage = imagecreatetruecolor($targetWidth, $targetHeight);  //(600,600)
			//echo $targetImage;
			$image = imagecreatefromjpeg($filename);
			//echo $image;
			imagecopyresampled($targetImage, $image, 0, 0, $srcX, $srcY, $targetWidth, $targetHeight, $srcWidth, $srcHeight);
			header('Content-Type: image/jpeg');
			imagejpeg($targetImage,null,100);
			
			*/
			 
?>
