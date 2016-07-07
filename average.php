<?php 
for ($i = 0; $i < 20000; $i++){
	if($i % 3 === 0){
		$array[] = $i;
	}
}

var_dump($array);

?>