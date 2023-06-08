<?php

	class Empleado
	{
		private $Nombree;
		private $Sueldoe;

		public function inicializar($nome,$suee)
		{
			$this->Nombree = $nome;
			$this->Sueldoe = $suee;
		}

		public function impuestos()
		{
			echo "<br>";
			echo $this->Nombree;
			echo "<br>";
			if($this->Sueldoe>2000000)
			{
				echo "Debe pagar impuestos";
			}else{
				echo "No debe pagar impuestos";
				echo "<br>";
			}
		}
	}
	$emple1 = new Empleado();
	$emple1->inicializar("Angela",1750000);
	$emple1->impuestos();

	$emple2 = new Empleado();
	$emple2->inicializar("Tomas",10000000);
	$emple2->impuestos();

?>