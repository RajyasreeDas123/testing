<html>	
	<form method="post" action="test21.php">
	<?php
		$fahrenheit =  $_POST['fah'];
		$celsius = (5/9) * ($fahrenheit - 32);
	?>
	The temperature in celsius:
	<input type="text" name="celsius" value="<?php echo $celsius;?>"/>
	<input type="submit" value = "CONVERT"/>
	</form>
</html>       
