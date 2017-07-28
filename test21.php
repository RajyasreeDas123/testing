<html>	
	<form method="post" action="form.php">
	<?php
		$celsius =  $_POST['celsius'];
		$fahrenheit = (5/9) * ($celsius - 32);
	?>
	The temperature in fahrenheit:
	<input type="text" value="<?php echo $fahrenheit;?>"/>
	<input type="submit" value = "CONVERT"/>
	</form>
</html>  
