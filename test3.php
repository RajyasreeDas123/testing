<html>	
	<form method="post" action="test31.php">
	<?php
		$celsius =  $_POST['celsius'];
		$fahrenheit = (32+($celsius*9))/5;
	?>
	The temperature in fahrenheit:
	<input type="text" name="fahrenheit" value="<?php echo $fahrenheit;?>"/>
	<input type="submit" value = "CONVERT"/>
	</form>
</html>       
