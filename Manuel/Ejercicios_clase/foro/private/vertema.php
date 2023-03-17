<?php
	session_start();
	if(isset($_SESSION['usuario']))
	{		
			$codpre = $_GET["cod"];
			include("funciones.php");
			$preguntaseleccionada = hazfetch("preguntas ","WHERE cod_pre='$codpre'");
			$textodelapreguntaseleccionada = $preguntaseleccionada["pre_pre"];
		?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
<?php

		
		$codalu = $_SESSION["usuario"];	
		
		;
		$reg = hazfetch("alumnos","WHERE cod_alu = '$codalu'");
		$nom = $reg["nom_alu"];
		echo "Hola: $nom - Viendo las respuestas de la pregunta <b>$textodelapreguntaseleccionada</b>";
		echo "<hr>";
		?>
		<button onclick="mostrarform()">Responder a la pregunta</button>	<button onclick="window.location.href='index.php'">Ver preguntas</button>
		<br>
		<br>
		<form id="formulario" action="grabarespuesta.php" method="POST" style="display: none;">
			<textarea name="respuesta" placeholder="Escribe tu respuesta" style="resize: none; " maxlength="200"></textarea>
			<br>
			<input type="hidden" value="<?php echo $codpre;?>" name="pregunta">
			<input type="submit" value="Responder">
		</form>
		<br>
		Respuestas a la pregunta <?php echo "<b>$textodelapreguntaseleccionada</b>";?>
		<br>

		<?php
			if(hazfetch("preguntas INNER JOIN alumnos USING(cod_alu) INNER JOIN respuestas USING(cod_pre) ","WHERE preguntas.cod_pre='$codpre'"))
			{
				?>
				
				<table border=1>
					<tr>
						<th>Usuario</th>
						<th>respuesta</th>
						<th>Fecha</th>
						
					<tr>
				<?php
				foreach(hazquery("preguntas INNER JOIN respuestas USING(cod_pre) INNER JOIN alumnos ON alumnos.cod_alu = respuestas.cod_alu","WHERE preguntas.cod_pre='$codpre'") as $regpre)
				{
					$nombrealumno = $regpre["nom_alu"];
					$codalumno = $regpre["cod_alu"];
					$pre = $regpre["res_res"];
					$codpre = $regpre["cod_pre"];
					$hora = $regpre["hora_res"];
					$fecha = explode("-",$regpre["fecha_res"]);
					echo "
						<tr>
							<td><a href='verperfil.php?cod=$codalumno'>$nombrealumno</a></td>
							<td>$pre</td>
							<td>$fecha[2]-$fecha[1]-$fecha[0], $hora</td>
						</tr>	
					";
				}	

			}
			else
			{
				// no tenemos preguntas
				echo "Aún no hay respuestas";
			}	
		?>
		
		</table>
		<script type="text/javascript">
			function mostrarform()
			{
				$("#formulario").show();
			}
		</script>
</body>
</html>
		<?php
	}
	else
	{
		header("location:./../index.html");
	}	
?>