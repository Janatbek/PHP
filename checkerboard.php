<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Multiplication Table</title>
</head>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		vertical-align: top;
		box-sizing: border-box;

	}
	.
	#wrapper{
		margin: 0 auto;
		width: 960px;
		padding-top: 50px;
	}
	
	.red{
		background: red;		
		width: 30px;
		height: 30px;		
		display: inline-block;
		margin-right: -4px;

			}
	.black, .green, .white{	
		width: 30px;
		height: 30px;		
		display: inline-block;
		margin-right: -4px;
			}
	.black{
		background: black;	
	}
	.green{
		background: #556B2F;
	}
	.white{
		background: #ffffe0;
	}
	#container{
		display: inline-block;
		
		margin-right: 50px;
	}
</style>
<body>		
	<div id="wrapper">
		
		<!-- Black and Red checkerboard -->
		<div id="container">
		<?php for($i = 1; $i <= 8; $i++) { ?>
			<?php if($i % 2 == 1){ ?>
			<div id=row>
				<?php for($k = 0; $k < 8; $k++) { ?>
					<?php if($k % 2 == 1){ ?>
						<div class="black"></div>
					<?php } else if($k % 2 == 0) {?>
							<div class="red"></div>
					<?php } ?>			
				<?php } ?>
			
			</div>
			<?php } else if($i % 2 == 0) {?>
				<div id=row>
				<?php for($j = 0; $j < 8; $j++) { ?>
					<?php if($j % 2 == 1){ ?>
						<div class="red "></div>
					<?php } else if($j % 2 == 0) {?>
						<div class="black"></div>
					<?php } ?>
				<?php } ?>
				</div>
			<?php } ?>
		<?php } ?>
		</div>
		
		<!-- Green and White checkeboard -->
		<div id="container">
		<?php for($i = 1; $i <= 8; $i++) { ?>
			<?php if($i % 2 == 1){ ?>
			<div id=row>
				<?php for($k = 0; $k < 8; $k++) { ?>
					<?php if($k % 2 == 1){ ?>
						<div class="green"></div>
					<?php } else if($k % 2 == 0) {?>
							<div class="white"></div>
					<?php } ?>			
				<?php } ?>
			
			</div>
			<?php } else if($i % 2 == 0) {?>
				<div id=row>
				<?php for($j = 0; $j < 8; $j++) { ?>
					<?php if($j % 2 == 1){ ?>
						<div class="white "></div>
					<?php } else if($j % 2 == 0) {?>
						<div class="green"></div>
					<?php } ?>
				<?php } ?>
				</div>
			<?php } ?>
		<?php } ?>
		</div>
	</div>			
				
				
</body>
</html>





