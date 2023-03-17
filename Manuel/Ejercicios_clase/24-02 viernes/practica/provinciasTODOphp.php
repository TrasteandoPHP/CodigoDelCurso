<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Provincias</title>
</head>
<body>
	<form action="provinciasTODOphp.php" method="POST">	
		<select name="provincias" id= "provincia" onchange="this.form.submit()">
			<option value="AQUI OCULTO">Selecciona provincia</option>
			<?php
			$conexion = new mysqli("localhost","root","","practica");
			$sql = "SELECT * FROM provincias";
			$ej = $conexion->query($sql);
			foreach($ej as $reg)
			{
				$codpro = $reg["cod_pro"];
				$nompro = $reg["nom_pro"];
				echo "<option value='$codpro'>$nompro</option>";
			}

			?>
		</select>
	</form>
	<?php
		if(isset($_POST["provincias"]))
		{
				$codpro = $_POST["provincias"];
			?>
				<select name="concellos" id ="concello">
					<option>Selecciona concello</option>
					<?php
						
						$sql = "SELECT * FROM concellos WHERE cod_pro='$codpro'";
						$ej = $conexion->query($sql);
					
						foreach($ej as $reg)
						{
							$codcon = $reg["cod_con"];
							$nomcon = $reg["nom_con"];
							echo "<option value='$codcon'>$nomcon</option>";
						}

					?>
				</select>
			<?php
		}
	?>

	
</body>
</html>