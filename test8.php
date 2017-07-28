<html>
	<body>
		 <?php
         $arr1 = array( 4, 3, 7, 1, 5);
         $arr1length = count($arr1);
         for($x = 0; $x < $arr1length; $x++) 
         {
			echo "arr1[".$x."]"."=>".$arr1[$x];
			echo "<br>";
		 }
		 
		 echo "<br>";
		 echo "ASCENDING SORT ACCORDING TO VALUE";
		 $arr1 = array( 4, 3, 7, 1, 5);
		 asort($arr1);
		 echo "<br>";
		 foreach($arr1 as $x => $x_value) 
		 {
			echo "Key=" . $x . ", Value=" . $x_value;
			echo "<br>";
		 }
		 
		 echo "<br>";
		 echo "DESCENDING SORT ACCORDING TO VALUE";
		 arsort($arr1);
		 echo "<br>";
		 foreach($arr1 as $x => $x_value) 
         {
			echo "Key=" . $x . ", Value=" . $x_value;
			echo "<br>";
		 }
		 
		 echo "<br>";
		 echo "ASCENDING SORT ACCORDING TO KEY";
		 $arr1 = array( 4, 3, 7, 1, 5);
		 ksort($arr1);
		 echo "<br>";
		 foreach($arr1 as $x => $x_value) 
		 {
			echo "Key=" . $x . ", Value=" . $x_value;
			echo "<br>";
		 }
		 
		 echo "<br>";
		 echo "DESCENDING SORT ACCORDING TO KEY";
		 $arr1 = array( 4, 3, 7, 1, 5);
		 kRsort($arr1);
		 echo "<br>";
		 foreach($arr1 as $x => $x_value) 
		 {
			echo "Key=" . $x . ", Value=" . $x_value;
			echo "<br>";
		 }
		 ?>
	</body>
</html>
