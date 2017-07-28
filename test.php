<html>
	<head>
		<title>First Testing</title>
	</head>
	<body bgcolor = "#aaddff">
		<?php
			$a=10;
			$b=20;
			echo "Variables before swappping are: ";
			echo $a." ".$b;
			$c=$a;
			$a=$b;
			$b=$c;
			echo "<br>Variables after swappping are: ";
			echo $a." ".$b;
		?>
	</body>
</html>
