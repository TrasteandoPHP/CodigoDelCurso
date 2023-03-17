
<?php
	session_start();
	if(isset($_SESSION['usuario']))
	{
		?>
		<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
		<div class="row">
		<?php
		$codalu = $_SESSION["usuario"];	
		include("funciones.php");
		
		$reg = hazfetch("alumnos","WHERE cod_alu = '$codalu'");
		$nom = $reg["nom_alu"];
		echo "Hola: $nom - Página principal";
		echo "<hr>";
		?>
		<button onclick="window.location.href='crearpregunta.php'">Crear pregunta</button>	
		<br>
		Preguntas del alumnado
		<br>

		<?php
			if(hazfetch("preguntas",""))
			{
				?>
				
				<table class="table table-striped">
					<tr>
						<th>Usuario</th>
						<th>Pregunta</th>
						<th>Fecha</th>
						<th>Ver</th>
					</tr>
				<?php
				foreach(hazquery("preguntas INNER JOIN alumnos USING(cod_alu)","") as $regpre)
				{
					$nombrealumno = $regpre["nom_alu"];
					$codalumno = $regpre["cod_alu"];
					$pre = $regpre["pre_pre"];
					$codpre = $regpre["cod_pre"];
					$hora = $regpre["hora_pre"];
					$fecha = explode("-",$regpre["fecha_pre"]);
					echo "
						<tr>
							<td><a href='verperfil.php?cod=$codalumno'>$nombrealumno</a></td>
							<td>$pre</td>
							<td>$fecha[2]-$fecha[1]-$fecha[0], $hora</td>
							<td><a href='vertema.php?cod=$codpre'>Responder</a></td>
						</tr>	
					";
				}	

			}
			else
			{
				// no tenemos preguntas
				echo "Aún no hay preguntas";
			}	
		?>
		
		</table>
	</div>
	</div>
</body>
</html>
		<?php
	}
	else
	{
		header("location:./../index.html");
	}	
?>