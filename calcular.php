<?php
	$Nota1 = $_POST['notaPri'];
	$Nota2 = $_POST['notaSeg'];
	$Nota3 = $_POST['notaTer'];
	$Examen = $_POST['notaExa'];
	$Trabajo = $_POST['notaTra'];

	$PromedioNotas = (($Nota1 + $Nota2 + $Nota3) / 3) * 0.35;
	echo "El promedio de las 3 notas es: " .$PromedioNotas;
	echo "<br>";

	$PromedioExamen = $Examen * 0.35;
	echo "El promedio del examen es: " .$PromedioExamen;
	echo "<br>";

	$PromedioTrabajo = $Trabajo * 0.30;
	echo "El promedio del trabajo es: " .$PromedioTrabajo;
	echo "<br>";

	$NotaFinal = $PromedioNotas + $PromedioExamen + $PromedioTrabajo;
	echo "Su nota final es: " .$NotaFinal;
	echo "<br>";


?>