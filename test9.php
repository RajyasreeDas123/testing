<?php
	$input = array(1,2,4,5,6);
	echo "INITIAL ARRAY IS";
	echo "<br>";
	$i=0;
	foreach($input as $x)
	{
		echo $i;
		echo $x;
		echo  " ";
		$i++;
	}
	

	echo "<br>";
	echo "<br>";


	echo "NEW ARRAY AFTER NEW ELEMENT INSERTION"; 
	echo "<br>";
	//$input = array(1,2,4,5,6);
	array_splice($input, 2, 2, 3);
	foreach($input as $x)
	{
		echo $x;
		echo " ";
	}
?>
