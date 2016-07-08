<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>States</title>
</head>
<body>
	<p>Used For Loop:</p>
	<select>
	<?php 
	$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
	for ($i = 0; $i < count($states); $i++){
		echo "<option>" . $states[$i] . "</option>";
	}
		
	?>
	</select>
	<hr>
	<!-- end for for loop -->
	<p>Used Foreach:</p>
	<select>
	<?php 
		foreach ($states as $state) {
			echo "<option>" . $state . "</option>";
		}
	?>
	</select>
	<hr>
	<p>Array with unique 8 states:</p>
	<select>
		<?php 
			$states = array('CA', 'WA', 'VA', 'UT', 'AZ','NJ', 'NY', 'DE');
			foreach ($states as $state) {
			echo "<option>" . $state . "</option>";
		}
		?>
	</select>
</body>
</html>