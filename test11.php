<?php
	$A = array( 
				array(50,100), 
				array(100,150)
			  ); 

	$B = array("array","merge"); 
	/*echo "<pre>";
	print_r($A);
	print_r($B);
	
	$temp=$B;
	print_r($temp);*/
	
	function myfunction($A,$B)
	{		 
		$temp=array();
		$temp[]=$B;//[]declaring an array as a multidimensional array
		if(is_scalar($A))
		{
			$temp[]=$A;
		}
		else
		{
			foreach($A as $x => $v)
			{
				$temp[]=$v;
			}	
		}
		return $temp;
		
	}
	echo "<pre>";
	print_r(array_map("myfunction",$A,$B));
?>
