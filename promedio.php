<?php
/*
	$Promedio=0;
	$Pesos[0]=56.2;
	$Pesos[1]=60.9;
	$Pesos[2]=75.8;
	$Pesos[3]=66.6;
	$Pesos[4]=87.2;

	for($i=0;$i<count($Pesos);$i++)
	{
		$Promedio = $Promedio + $Pesos[$i];
	}
	$pro = $Promedio/5;
	for($i=0;$i<count($Pesos);$i++)
	{
		if($Pesos[$i] > $pro);
	}

		echo "El promedio registrado es: " .$pro;
*/
	$PromedioA=0;
	$CursoA[0]=9.7;
	$CursoA[1]=4.6;
	$CursoA[2]=9.9;
	$CursoA[3]=8.0;
	$CursoA[4]=7.7;
	$CursoA[5]=9.9;
	$CursoA[6]=6.7;
	$CursoA[7]=6.1;
	$CursoA[8]=7.9;
	$CursoA[9]=8.9;

	$PromedioB=0;
	$CursoB[0]=6.7;
	$CursoB[1]=9.2;
	$CursoB[2]=6.9;
	$CursoB[3]=7.0;
	$CursoB[4]=9.1;
	$CursoB[5]=9.3;
	$CursoB[6]=8.5;
	$CursoB[7]=5.8;
	$CursoB[8]=6.2;
	$CursoB[9]=7.3;

	for ($i=0; $i < count($CursoA) ; $i++)
	for ($i=0; $i < count($CursoB) ; $i++)
	{ 
		$PromedioA = $PromedioA + $CursoA[$i];
		$PromedioB = $PromedioB + $CursoB[$i];
	}
	$proA = $PromedioA / 10;
	$proB = $PromedioB / 10;
	$proAmbos = ($proA + $proB) / 2;
	$maxA = array($CursoA);

	echo "El promedio del curso A es: " .$proA;
	echo "<br>";
	echo "El promedio del curso B es: " .$proB;
	echo "<br>";
	echo "El promedio de ambos cursos es: " .$proAmbos;
	echo "<br>";
	echo "El mayor Curso A";
	echo "<br>";

	if ($proA > $proB) {
	 	echo "El grupo con mejor promedio es el Curso A";
	 }else{
	 	echo "El grupo con mejor promedio es el Curso B";
	 }




?>