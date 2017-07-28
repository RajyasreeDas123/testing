<html>	
	<script>
	function MyFunction() 
	{
		<?php
		if(isset($_POST['submit'])) 
		{
			$date=new DateTime();
			$new_filename=$date->format('Y-m-d H:i:s').$_FILES['ufile']['name'];
			copy($_FILES['ufile']['tmp_name'], 'uploads1/'.$new_filename);    		 
			$filename = 'uploads1/'.$new_filename;
			$org_info = getimagesize($filename);
			$width=$org_info[0];  //1920
			$height=$org_info[1]; //1200
			$givenWidth=440;
			$givenHeight=247;
			$ratioWidth=$width/$givenWidth;  //9.6
			$ratioHeight=$height/$givenWidth;  //6.0
			$ratio=min($ratioWidth,$ratioHeight);  //6.0
			$targetWidth=round(($width/$ratio),0);  //320
			$targetHeight=round(($height/$ratio),0);  //200
			$targetImage = imagecreatetruecolor($targetWidth,$targetHeight);  //(320,200)
			
			$image = imagecreatefromjpeg($filename);
			unlink($filename);
			imagecopyresampled($targetImage, $image, 0, 0, 0, 0,$targetWidth,$targetHeight,$width,$height);
			$path='uploads1/'.$new_filename;;
			imagejpeg($targetImage,$path,100);
			
			$targetImage1 = imagecreatetruecolor($givenWidth,$givenHeight);  
			$width_new = $targetHeight * $givenWidth / $givenHeight;
			$height_new = $targetWidth * $givenHeight / $givenWidth;
   			if($width_new > $targetWidth)
			{
				$h_point = (($targetHeight - $height_new) / 2);
				imagecopyresampled($targetImage1, $image, 0, 0, 0, $h_point, $givenWidth, $givenHeight, $targwtWidth, $height_new);
			}
			else
			{
				$w_point = (($targetWidth - $width_new) / 2);
				imagecopyresampled($targetImage1, $image, 0, 0, $w_point, 0, $givenWidth, $givenHeight, $width_new, $targetHeight);
			}
			echo $path1='uploads/'.$new_filename;die;
		}	

		?>
	</script>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
			<td>
				<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
					<tr><td><input name="ufile" type="file" id="ufile" size="50" /></td></tr>
					<tr><td><input type="submit" name="submit" value="Upload" onsubmit=Myfunction()/></td></tr>
					
				</table>
			</td>
		</form>
	</body>
</html>
