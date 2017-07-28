<html>	
	<form method="post" action="form.php">
	<?php
		$fahrenheit =  $_POST['fahrenheit'];
		$celsius = (5/9) * ($fahrenheit - 32);
	?>
	The temperature in celsius:
	<input type="text" name="celsius" value="<?php echo $celsius;?>"/>
	<input type="submit" value = "CONVERT"/>
	</form>
</html>       
