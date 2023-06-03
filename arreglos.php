<?php
	/*$dia[0] = "Lunes";
	$dia[1] = "Martes";
	$dia[2] = "Miercoles";
	$dia[3] = "Jueves";
	$dia[4] = "Viernes";
	$dia[5] = "Sabado";
	$dia[6] = "Domingo";

	echo $dia[1];
	echo "<br>";
	echo count($dia);
	echo "<br>";

	$autos = array("Porsche","Maseratti","Koenigsegg");
	echo "Las marcas de autos son:" .$autos[0]." ".$autos[1]." ".$autos[2];

	echo "<br>";

	$colores = array("Amarillo,", "Azul,", "y Rojo");
	echo "Los colores primarios son: " .$colores[0]." ".$colores[1]." ".$colores[2];*/

	$autos = array("Porsche","Maseratti","Koenigsegg");

	$tan = count($autos);
	for($x=0; $x<$tan; $x++)
	{
		echo $autos[$x];
		echo "<br>"; 
	}

	$registros = array('Doc' => 401010, 'Nombres' => "Danna", 'Direccion' => "CENIGRAF");

		echo $registros ['Nombres'];
		echo "<br>";


	$articulos = array('Codigo ' => 100,'NombreP ' => "Mangos", 'Precio ' => 3000);
		echo"<br>";
	foreach ($articulos as $key => $value) {
		echo "Para la  llave: " .$key."su valor es ".$value;
		echo "<br>";
		
	}

	$aprendiz = array('Doc' => 213122, 'NombreA' => "Fernanda", 'Programa' => "ADSO", 'Trimestre' => 5);
		echo"<br>";
	foreach($aprendiz as $fi => $valor){
		echo "Para los datos: " .$fi. " su valor es: " .$valor;
		echo "<br>";
	}

	$numeros = array('numero1' => 1,'numero2' => 2,'numero3' => 3,'numero4' => 4,'numero5' => 5);
	foreach($numeros as $key => $value){
		echo "La suma de los numeros es: " $numeros +;
	}
	

?>