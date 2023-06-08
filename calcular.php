<?php

	/*
	//Punto 1
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
	echo "<br>";*/


	/*
	//Punto 1
	$NombreVen = $_POST['NomVen'];
	$AutosVen = $_POST['AutVen'];
	$PrecioTotalAut = $_POST['AutTot'];

	$PorAuto = ($AutosVen * 50000);
	$Comision = round($PrecioTotalAut / 20);
	$Total = ((737000 + $PorAuto) + $Comision);

	echo "Su nombre es: " .$NombreVen;
	echo "<br>";
	echo "La cantidad de autos que ha vendido es: " .$AutosVen;
	echo "<br>";
	echo "El total que ha vendido en autos es: " .$PrecioTotalAut;
	echo "<br>";
	echo "<br>";
	echo "Su sueldo es: $737000";
	echo "<br>";
	echo "Por cada auto que vendio se le bonifica $50000, dando un total de: $" .$PorAuto;
	echo "<br>";
	echo "Se le otorga el 5% del total de autos que vendio lo cual es: $" .$Comision;
	echo "<br>";
	echo "Su sueldo en total seria $" .$Total;*/


	/*
	//Punto 3
	$NombrePac = $_POST['NomPac'];
	$PesoPac = $_POST['PesPac'];
	$EstaturaPac = $_POST['EstPac'];

	$IMC = round($PesoPac/($EstaturaPac*$EstaturaPac));

	echo "El nombre del paciente es: " .$NombrePac;
	echo "<br>";
	echo "El peso del paciente es: " .$PesoPac. " Kilogramos.";
	echo "<br>";
	echo "La estatura del paciente es: " .$EstaturaPac. " metros.";
	echo "<br>";
	echo "El indice de masa corporal del paciente (IMC) es: " .$IMC. " lo que significa que esta ";

	if ($IMC <= 18.5 ) {
		echo "¡Esta por debajo del peso!";}
	if ($IMC > 18.5 && $IMC <= 24.9 ) {
		echo "¡Saludable!";}
	if ($IMC >= 25 && $IMC <= 29.9 ) {
		echo "¡Con sobrepeso!";}
	if ($IMC >= 30 && $IMC <= 39.9 ) {
		echo "¡Con obesidad!";}
	if ($IMC >= 40 ) {
		echo "¡Con obesidad morbida!";}*/


	/*
	//Punto 4 y 7
	$arrayName = array('arrayName[4]' => 80, 'arrayName[9]' => "Hola", 'arrayName[22]' => 99, 'arrayName[156]' => "Mundo");
	foreach ($arrayName as $si => $value){
		echo "El dato ".$si. " es igual a ".$value;
		echo "<br>";
	}*/



	//Punto 5




	/*
	//Punto 6
	$palabra = "Francia";
	$contar = strlen($palabra);
	$dividir = str_split($palabra);

	echo "La palabra " .$palabra. " se divide en " .$contar. " letras";
	echo "<br>";
	echo "<br>";

	for ($i=0; $i<count($dividir);$i++) 
	{ 
		echo $dividir[$i]."<br>";	
	}*/



	//Punto 8
	$Tipodemotor = $_POST['TipMot'];
	$valor = $Tipodemotor

	if($valor = 0)
	{
		echo "No hay establecido un valor definido para el tipo";
	}

	if($valor = 1)
	{
		echo "Su tipo de motor es de Agua";
	}

	if($valor = 2)
	{
		echo "Su tipo de motor es de Gasolina";
	}

	if($valor = 3)
	{
		echo "Su tipo de motor es de Hormigon";
	}

	if($valor >= 4)
	{
		echo "No existe un valor valido";
	}
	







?>