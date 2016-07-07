<?php 
	$numbers = array(1, 2, 5, 10, 255, 3);
	
	function sumVal(array){
		$sum = 0;
		for ($i = 0; $i < count($numbers); $i++){
			$sum += $numbers[$i];
		};
		echo $sum;
	};
	sumVal($numbers);
?>