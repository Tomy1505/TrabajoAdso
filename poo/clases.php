<?php

	class Persona
	{
		public $Nombre;
		public $Apellido;
		public $Estatura;
		public $Edad;
		public $Genero; 

		public function cantar($Nom)
		{
			$this->Nombre = $Nom;
			echo $this->Nombre;
			echo "<br>";
			echo "Estoy cantando";
		}
		public function hablar($Ape)
		{
			$this->Apellido = $Ape;
			echo "<br>";
			echo $this->Apellido;
			echo "<br>";
			echo "Voy a pedir la palabra";
		}
		public function caminar($Eda)
		{
			$this->Edad = $Eda;
			echo "<br>";
			echo $this->Edad;
			echo "<br>";
			echo "Es la edad para caminar mas rapido";
		}
	}

	$apre = new Persona();
	$apre->cantar("Tomas");
	$apre->hablar("Cachope");
	$apre->caminar(15);

?>