<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php 
		include("funciones.php");
	?>
</head>
<body>
	<h1>Selecciona meses</h1>
	<label>Desde</label>
	<select>
		<option>Desde...</option>
		<?php
			rellena_desde();
		?>
	</select>
	<br>
	<label for="hasta">Hasta</label>
	<select name="hasta">
		<option>Hasta...</option>
			<?php
				rellena_hasta();
			?>	
	</select>
</body>
</html>