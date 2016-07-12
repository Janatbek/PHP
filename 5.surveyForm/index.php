<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey Form</title>
	<style type="text/css">
		form{
			display: inline-block;
    		width: 260px;
    		border: 1px solid black;
		}
		input[type="submit"]{
			background: blue;
			color: white;
			border:none;
			float: right;
		}
		textarea{
			width: 230px;
			height: 50px;
		}
		div{
			margin: 10px 0 0 10px;
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<form action="index.php" method="post">
			<div>
				<label for="name">Your Name:</label>
				<input type="text" name="first_name">
			</div>	
			<div>
				<label for="location">Dojo Location:</label>
				<select name="location">
					<option>Los Angeles, CA</option>
					<option>Seattle, WA</option>
					<option>Dallas, TX</option>
					<option>San Jose, CA</option>
					<option>Chicago, IL</option>
				</select>
			</div>
			<div>
				<label for="language">Favorite Language:</label>
				<select name="language">
					<option>Javascript</option>
					<option>PHP</option>
					<option>Ruby</option>
					<option>Python</option>
					<option>IO's</option>
				</select>
			</div>
			<div>
				<label for="comment">Comment (optional)</label>
				<textarea name="comment"></textarea>
				<input type="submit" value="Submit">
			</div>
			<div id="output">
				<h3>Submitted Information</h3>
				<p> Your name is: <?php echo $_POST['first_name']; ?> </p>
				<p> Your location is: <?php echo $_POST['location']; ?> </p>
				<p> Your language is: <?php echo $_POST['language']; ?> </p>
				<p> Your comment is: <?php echo $_POST['comment']; ?> </p>
			</div>
		</form>


	</div>
</body>
</html>