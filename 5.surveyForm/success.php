<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		#output{
			width:350px;
			border:1px solid black;
			padding: 10px;
		}
		
	</style>
</head>
<body>
	<div id="output">
	<h3>Submitted Information</h3>
	<p> Your name is: <?php echo $_POST['first_name']; ?></p>
	<p> Your location is: <?php echo $_POST['location']; ?></p>
	<p> Your language is: <?php echo $_POST['language']; ?></p>
	<p> Your comment is: <?php echo $_POST['comment']; ?></p>
</div>
</body>
</html>




