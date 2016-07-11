<?php
function draw_stars($a){
	foreach ($a as $value) {
		if(is_numeric($value)){
			for($k = 0; $k < $value; $k++){
			echo "*";
		}
		echo "<br>";
		}
		else{
			for($i = 0; $i < strlen($value); $i++){
				echo strtolower($value[0]);
			}
			echo "<br>";
		}		
	}

}

$a = array(4, 6, 1, 3, "Tom", 7, 25);
draw_stars($a);

$x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
draw_stars($x);


?>