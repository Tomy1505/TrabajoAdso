<?php
	
	class Operaciones
	{
		public $Numero1;
		public $Numero2;

		public function __construct($num1,$num2)
		{
			$this->Numero1 = $num1;
			$this->Numero2 = $num2;
		}

		public function suma($num1,$num2)
		{
			$suma = $num1 + $num2;
			echo "$num1 + $num2 es igual a ".$suma. "<br>";
		}

		public function resta($num1,$num2)
		{
			$resta = $num1 - $num2;
			echo "$num1 - $num2 es igual a ".$resta. "<br>";
		}

		public function multi($num1,$num2)
		{
			$multi = $num1 * $num2;
			echo "$num1 * $num2 es igual a ".$multi. "<br>" ;
		}

		public function divi($num1,$num2)
		{
			$divi = $num1 / $num2;
			echo "$num1 / $num2 es igual a ".$divi. "<br>";
		}
	}
	$num1 = 0;
	$num2 = 0;

	$sumar = new Operaciones($num1,$num2);
	$sumar -> suma(67,10);

	$restar = new Operaciones($num1,$num2);
	$restar -> resta(190,30);

	$multiplicar = new Operaciones($num1,$num2);
	$multiplicar -> multi(20,10);

	$dividir = new Operaciones($num1,$num2);
	$dividir -> divi(100,20);

?>