<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey Form</title>
	<style type="text/css">
		form{
			display: inline-block;
    		width: 250px;
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
		table tr{
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
		<form action="result.php" method="post">
			<table>
				<tr>
					<td>
					<label for="nmae">Your Name:</label>
					<input type="text" name="first_name">
					</td>
				</tr>
				<tr>
					<td>
						<label for="location">Dojo Location:</label>
						<select name="location">
							<option>Los Angeles, CA</option>
							<option>Seattle, WA</option>
							<option>Dallas, TX</option>
							<option>San Jose, CA</option>
							<option>Chicago, IL</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label for="language">Favorite Language:</label>
						<select name="language">
							<option>Javascript</option>
							<option>PHP</option>
							<option>Ruby</option>
							<option>Python</option>
							<option>IO's</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label for="comment">Comment (optional)</label>
					</td>
				</tr>
				<tr>
					<td>
						<textarea name="comment"></textarea>
					</td>
				</tr>
				<tr>
					<td><input type="submit" value="Submit"></td>
				</tr>
			</table>			
		</form>
</body>
</html>