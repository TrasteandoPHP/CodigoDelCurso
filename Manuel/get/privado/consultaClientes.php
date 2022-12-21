<?php
	$conexion = new mysqli("127.0.0.1","root","","get");					
					$sqlConsultaClientes = "SELECT * FROM clientes ORDER BY cod_cli ASC";
					$ejecutarConsulta = $conexion->query($sqlConsultaClientes);
					echo "<h2>Clientes</h2>";
					foreach($ejecutarConsulta as $registro)
					{
						$cod_Cli = $registro["cod_cli"];
						$dni_cli = $registro["dni_cli"];
						$nom_Cli = $registro["nombre_cli"];
						echo "<h2>Clientes</h2>";
						echo "$cod_Cli - $nom_Cli<br>";
					}	
	echo "<br><button onclick='window.location.href=`../formularios.html`'>Volver a formularios</button>";	
?>	