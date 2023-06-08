<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  	<style >
  		*{
  			margin: 0;
  			padding: 0;
  			width: 300px;
  			box-sizing: border-box;
		}
		.contenedor{
			width: 400px;
			background: lightblue;
			padding: 30px;
			margin: 0;
			margin-top: 100px;
			margin-left: 200px;
			justify-content: center;
			align-items: center;

		}
		.contenedor1{
			width: 400px;
			background: orange;
			padding: 30px;
			margin: 0;
			margin-top: 100px;
			margin-bottom: 100px;
			margin-left: 200px;
			justify-content: center;
			align-items: center;
			
		}
		.contenedor2{
			width: 400px;
			background: purple;
			padding: 30px;
			margin: 0;
			margin-top: 100px;
			margin-bottom: 100px;
			margin-left: 200px;
			justify-content: center;
			align-items: center;
			
		}
		.btn{
			width: 100px;
			background: dimgray;

		}
  	</style>
	<title></title>
</head>
<body>
	<div class="contenedor">
		<h1>Formulario autos</h1>
		<form action="calcular.php" method="post">
		<div class="form-group">
			<label>Nombre del vendedor: </label>
			<input type="text" name="NomVen">	
		</div>
		<div class="form-group">
			<label>Cantidad de automoviles vendidos: </label>
			<input type="text" name="AutVen">	
		</div>
		<div class="form-group">
			<label>Precio total de automoviles vendidos: </label>
			<input type="text" name="AutTot">	
		</div>
		<input type="submit" class="btn btn-primary" name="Verificar">
		</form>
	</div>


	<div class="contenedor1">
		<h1>Formulario paciente</h1>
		<form action="calcular.php" method="post">
		<div class="form-group">
			<label>Nombre del paciente: </label>
			<input type="text" name="NomPac">	
		</div>
		<div class="form-group">
			<label>Peso en kilogramos: </label>
			<input type="number" name="PesPac">	
		</div>
		<div class="form-group">
			<label>Estatura en metros: </label>
			<input type="double" name="EstPac">	
		</div>
		<input type="submit" class="btn btn-primary" name="Verificar">
		</form>
	</div>

	<div class="contenedor2">
		<h1>Tipo de motor</h1>
		<form action="calcular.php" method="post">
		<div class="form-group">
			<label>Tipo de motor (1,2,3 o 4): </label>
			<input type="text" name="TipMot">
			<input type="submit" class="btn btn-primary" name="Verificar">
		</form>	
		</div>
	</div>
</body>
</html>