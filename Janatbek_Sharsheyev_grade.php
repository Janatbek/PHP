<?php 
$score = rand(50, 100);
$a = array("A", "B", "C", "D");

function grade($score){
	
	if($score > 69 && $score < 80){
		echo "<h1>Your Score: " . $score . "/100</h1>
			  <h2>Your grade is C.</h2>";
			  for ($i = 1; $i <= $score; $i++){
			  	echo $i . ": Score is: " . $score . ". Grade is C <br>";
			  }
	}

	else if($score > 79 && $score < 90){
		echo "<h1>Your Score: " . $score . "/100</h1>
			  <h2>Your grade is B.</h2>";
			  for ($i = 1; $i <= $score; $i++){
			  	echo $i . ": Score is: " . $score . ". Grade is B <br>";
			  }
	}
	else if($score > 89 && $score < 100){
		echo "<h1>Your Score: " . $score . "/100</h1>
			  <h2>Your grade is A.</h2>";
			  for ($i = 1; $i <= $score; $i++){
			  	echo $i . ": Score is: " . $score . ". Grade is A <br>";
			  }
	}
	else {
		echo "<h1>Your Score: " . $score . "/100</h1>
			  <h2>Your grade is D.</h2>";
			  for ($i = 1; $i <= $score; $i++){
			  	echo $i . ": Score is: " . $score . ". Grade is D <br>";
			  }
	}

}

grade($score);

?>
