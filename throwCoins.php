<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Coin Throw</title>
	<style type="text/css">
		#wrapper{
			margin: 0 auto;
			width: 960px;
		}
	</style>
</head>
<body>
<div id="wrapper">
	<h4>Starting the program</h4>
	<?php 
	$tail= 0;
	$head = 0;

	function throwCoins($i){
		$attempt = rand(1,2);
		
		if($attempt == 1){
			$GLOBALS['head'] = $GLOBALS['head'] + 1;
				if($GLOBALS['head'] < 2 && $GLOBALS['tail'] < 2) {
					echo "<em>Attempt #" . $i .  ": Throwing a coin... It is a head! ... Got " . $GLOBALS['head'] . " head so far and " . $GLOBALS['tail'] . " tail so far</em><br>";
				}
				else if($GLOBALS['head'] < 2 && $GLOBALS['tail'] > 1) {
					echo "<em>Attempt #" . $i .  ": Throwing a coin... It is a head! ... Got " . $GLOBALS['head'] . " head so far and " . $GLOBALS['tail'] . " tails so far</em><br>";
				}
				else if($GLOBALS['head'] > 2 && $GLOBALS['tail'] > 1){
					echo "<em>Attempt #" . $i .  ": Throwing a coin... It is a head! ... Got " . $GLOBALS['head'] . " heads so far and " . $GLOBALS['tail'] . " tails so far</em><br>";
				}	
		}
		else{
			$GLOBALS['tail'] = $GLOBALS['tail'] + 1;
				if($GLOBALS['head'] < 2 && $GLOBALS['tail'] < 2) {
					echo "<em>Attempt #" . $i .  ": Throwing a coin... It is a head! ... Got " . $GLOBALS['head'] . " head so far and " . $GLOBALS['tail'] . " tail so far</em><br>";
				}
				else if($GLOBALS['head'] < 2 && $GLOBALS['tail'] > 1) {
					
					echo "<em>Attempt #" . $i .  ": Throwing a coin... It is a head! ... Got " . $GLOBALS['head'] . " head so far and " . $GLOBALS['tail'] . " tails so far</em><br>";
				}
				else if($GLOBALS['head'] > 2 && $GLOBALS['tail'] > 1){
					echo "<em>Attempt #" . $i .  ": Throwing a coin... It is a head! ... Got " . $GLOBALS['head'] . " heads so far and " . $GLOBALS['tail'] . " tails so far</em><br>";
				}
			}
	}//end of throwCoins function
	for ($i = 1; $i <= 5000; $i++){
			throwCoins($i);
		}

	?>
		<p>Ending the program - thank you!</p>
	</div>
</body>
</html>