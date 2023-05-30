<?php
$nombre = $_POST['nomtxt'];
$edad = $_POST['edatxt'];
$estatura = $_POST['esttxt'];
$estado = $_POST['civtxt'];
$fecha = $_POST['fectxt'];
$fechaEntero = strtotime($fecha);
$year = date("Y", $fechaEntero);
$mes = date("m", $fechaEntero);
$dia = date("d", $fechaEntero);

/*echo $Nom;
echo "<br>";
echo $Eda;
echo "<br>";
echo $Est;
echo "<br>";
echo $Esc;*/

echo $fecha;
echo "<br>";
echo $year;
echo "<br>";
echo $mes;
echo "<br>";
echo $dia;
echo "<br>";
if($estado=="Soltero")
{
	echo "Nombre :" .$Nom."<br"."Su edad :".$Eda;
}
elseif ($estado=="Casado") 
{
	echo "Nombre :" .$Nom."<br>"."Su Estatura :".$Esta;
}
elseif ($estado=="Union libre") 
{
	echo "Edad :" .$Nom."<br"."Su Estatura :".$Esta;
}


switch ($mes) {
	case 1:
		if ($dia <=20) 
		{
			echo "Su signo en capricornio";
		}
		else
		{
			echo "Su signo es acuario";
		}
		break;
	case 2:
		if ($dia <=18) 
		{
			echo "Su signo es acuario";
		}
		break;
	case 3:
		if ($dia <=20) 
		{
			echo "Su signo es piscis";
		}
		else
		{
			echo "Su signo es aries";
		}
		break;
	case 4:
		if ($dia <=20) 
		{
			echo "Su signo es aries";
		}
		else
		{
			echo "Su signo es tauro";
		}
		break;
	case 5:
		if ($dia <=21) 
		{
			echo "Su signo es tauro";
		}
		else
		{
			echo "Su signo es geminis";
		}
		break;
	default:
		echo "usted no ha seleccionado su fecha de nacimiento";
		break;
}
?>