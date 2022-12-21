<?php
	$conexion = new mysqli("127.0.0.1","root","","get");					
					$sqlConsultaProductos = "SELECT * FROM productos ORDER BY cod_pro ASC";
					$ejecutarConsulta = $conexion->query($sqlConsultaProductos);
					echo "<h2>Productos</h2>";
					foreach($ejecutarConsulta as $registro)
					{
						$cod_Pro = $registro["cod_pro"];
						$des_Pro = $registro["descripcion_pro"];
						$precio_Pro = $registro["precio_pro"];
						
						echo "$cod_Pro - $des_Pro - $precio_Pro<br>";
					}	
	echo "<br><button onclick='window.location.href=`../formularios.html`'>Volver a formularios</button>";	
?>	