<?php
	session_start();
	if(isset($_SESSION['usuario']))
	{
		$codalu = $_SESSION["usuario"];	
		include("funciones.php");
		//pillo los datos de la persona que quiero ver y consulto lo que necesito;
		$codvisto = $_GET["cod"];
		$regvisto = hazfetch("alumnos","WHERE cod_alu = '$codvisto'");
		$nomalumnovisto = $regvisto["nom_alu"];
		$emailalumnovisto = $regvisto["email_alu"];
		$fecha = explode("-",$regvisto["fecha_alu"]);

		//numero de preguntas hechas
		$preguntasde = hazquery("preguntas","WHERE cod_alu = '$codvisto'");
		$totalpre = $preguntasde->num_rows;

		//numero de respuestas hechas
		$respuestasde = hazquery("respuestas","WHERE cod_alu = '$codvisto'");
		$totalres = $respuestasde->num_rows;

		//saco los datos del usuario que navega
		$reg = hazfetch("alumnos","WHERE cod_alu = '$codalu'");
		$nom = $reg["nom_alu"];
		echo "Hola: $nom - Ver perfil de $nomalumnovisto";
		echo "<hr>";




		?>
		<button onclick="window.location.href='index.php'">Volver</button>	
		<br>
		Perfil de <?php echo $nomalumnovisto;?>
		<br>

				
				<table border=1>
					<tr>
						<th>Nombre</th>
						<th>Email</th>
						<th>Fecha de registro</th>
						<th>Preguntas hechas</th>
						<th>Preguntas respoondidas</th>
					<tr>
				<?php
				
					echo "
						<tr>
							<td>$nomalumnovisto</td>
							<td>$emailalumnovisto</td>
							<td>$fecha[2]-$fecha[1]-$fecha[0]</td>
							<td>$totalpre</td>
							<td>$totalres</td>
						</tr>	
					";
					

			
		?>
		
		</table>
		<?php
	}
	else
	{
		header("location:./../index.html");
	}	
?>