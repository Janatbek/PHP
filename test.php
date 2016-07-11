<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
</head>
<style type="text/css">
	.bold{
		font-weight: bold;
		color:white;
	}
	td{
		background: red;
		width: 30px;
		height: 30px;
		border: 1px solid black;
		/*color: white;*/
		text-align: center;
	}
</style>
<body>
	<table>
		<thead>	
			<tr>
				<td>X</td>
				
				<?php  for ($i = 1; $i < 10; $i++){ ?>
					<td class="bold"> <?= $i; ?> </td>
				<?php } ?>			
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php $column = 1; ?>
				<?php for($num = 1; $num < 10; $num++) { ?>
					<?php if($column == $num){ ?>
						<td class="bold"> <?= $column ?> </td>
					<?php } ?>
					<?php  for ($result = 1; $result <10; $result++){ ?>
						<td> <?= $result * $column ?></td>
								<?php } ?>	
				<?php $column++ ?>
			</tr>
				<? } ?>
		</tbody>	
	</table>
				
</body>
</html>





