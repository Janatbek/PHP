<?php
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ninja Assigment</title>
	<style type="text/css">
		#farm, #cave, #casino, #house{
			display: inline-block;
			width:200px;
			vertical-align: top;
			border: 1px solid black;
			text-align: center;
		}
		#counter, #counter-wrapper h2{
			display: inline-block;
		}
		#counter {
			border: 1px solid black;
			width: 200px;
			height: 30px;
			line-height: 30px;
			padding-left: 10px;

		}

	</style>
</head>
<body>
<?php
	var_dump($_SESSION);

?>
<h1></h1>
<div id="wrapper">

<div id="counter-wrapper">
	<h2>Your Gold: </h2>
	<p id="counter"><?=$_SESSION['lana']?></p>
 </div>
	<div id="farm">
		<form action="process.php" method="post">
		<input type="hidden" name="farm" value="farm"/>
		<h3> Farm</h3>
		<h4> (earns 10-20 golds)</h4>
		<input type="submit" value="Find Gold!"/>
		</form>	
	</div>

	<div id="cave">
		<form action="process.php" method="post">
		<input type="hidden" name="cave" value="cave"/>
		<h3> Cave</h3>
		<h4>(earns 5-10 golds)</h4>
		<input type="submit" value="Find Gold!"/>
		</form>
	</div>

	<div id="casino">
		<form action="process.php" method="post">
		<input type="hidden" name="casino" value="casino"/>
		<h3> Casino</h3>
		<h4>(earns/ takes 0- 50 golds)</h4>
		<input type="submit" value="Find Gold!"/>
		</form>
	</div>
		
	<div id="house">
		<form action="process.php" method="post">
		<input type="hidden" name="house" value="house"/>
		<h3> House </h3>
		<h4>(earns 2-5 golds)</h4>
		<input type="submit" value="Find Gold!"/>	
		</form>	
	</div>
	<div id="activities">


	</div>
</div>


</body>
</html>