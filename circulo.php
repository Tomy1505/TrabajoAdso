<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ciruclos</title>
	<style>
		.xd{
			height: 30px;
		}
	</style>
</head>
<body>
	<h1>Circulos XD</h1>
	<div class="xd">
	<?php
		$ball = rand (1,5);
		$cantidad = 4;
		if($ball === 1);
		for ($i=0; $i<$ball ; $i++) { 
			
			echo "<img src=\"img2/$ball.png\">\n";
		}
	?>
	</div>

</body>
</html>