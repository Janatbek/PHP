<?php 
	$numbers = array(2, 4, 10, 16);
	function multiply($array, $factor){
		foreach ($array as $value) {
			$value *= $factor;
			$newArray[] = $value; 
		}
	return $newArray;
	};

	
	$newArray = multiply($numbers, 5);
	var_dump($newArray);
?>