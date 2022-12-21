<?php
	$conexion = new mysqli("127.0.0.1","root","","get");					
					$sqlConsultaCategorias = "SELECT * FROM categorias ORDER BY cod_cat ASC";
					$ejecutarConsulta = $conexion->query($sqlConsultaCategorias);
					echo "<h2>Categorias</h2>";
					foreach($ejecutarConsulta as $registro)
					{
						$cod_Cat = $registro["cod_cat"];
						$nombre_Cat = $registro["nombre_cat"];
						echo "$cod_Cat - $nombre_Cat<br>";
					}	
	echo "<br><button onclick='window.location.href=`../formularios.html`'>Volver a formularios</button>";	
?>	