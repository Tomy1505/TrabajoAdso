<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>CONTEO DE PUNTOS</h1>
		<?php
		$Num = rand(1,10);
		$Total = 0;

		if ($Num === 1){
			echo "<h2>$Num dado</h2>\n";
		}
		else
		{
			echo "<h2>$Num dado</h2>\n";
		}
		echo "\n";
		for($i=0;$i < $Num; $i++);
		{
			$dado = rand(1,6);
			echo "<img src=\"img/$dado.png\" width=\"120\" height=\"120\">\n<br>";

			$Total += $dado;
		}if ($Num %2 ==0){
			echo " El numero $Num es par";
		}else{
			echo "El numero $Num no es par";
		}if ($Num > $Num)
			echo "El numero $Num es el menor"

		?>
</body>
</html>