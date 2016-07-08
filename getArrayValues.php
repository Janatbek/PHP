
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get array values</title>
</head>
<body>
<?php
$A = array(1, 2, 3);
foreach ($A as $value) {
	echo	"<ul>
				<li><?=$value?></li>
				<li>$value</li>
				<li>$value</li>
			</ul>"
?>
<?php
}
?>
	
</body>
</html>