<?php
	
	$filename = 'uploads/491173.jpg';
	$percent = 0.5;
	header('Content-Type: image/jpeg');
	list($width, $height) = getimagesize($filename);
	$new_width = $width * $percent;
	$new_height = $height * $percent;
	$image_p = imagecreatetruecolor($new_width, $new_height);
	$image = imagecreatefromjpeg($filename);
	imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
	imagejpeg($image_p, null, 100);

?>


<!-- javascript Image size Validation
<script>
	function validateform() 
		{
			var fileUpload = document.myform.ufile;
			var reader = new FileReader();
			reader.readAsDataURL(fileUpload.files[0]);
			reader.onload = function (e) 
			{
				var image = new Image();
				image.src = e.target.result;
				image.onload = function () 
				{
					var height = this.height;
					alert(height);
					var width = this.width;
					alert(width);
					alert(height+"-"+width);
					if (height < 200 || width < 200) 
					{
						alert("Height and Width must not be below 200px.");
						return false;
					}
					else
					{
						alert("Uploaded image has valid Height and Width.");
						return true;
					}
				};
			} 
		}
</script>
-->
