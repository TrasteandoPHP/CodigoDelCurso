<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Tienda Online</h1>		
		<form action="" method="POST">			
			<select name="categorias" required>
				<option value=""> -- Seleccione una categoria -- </option> 
				<?php
					//$conexion = new mysqli("localhost","escuela","1234","tienda");
					$conexion = new mysqli("10.10.10.108","escuela","1234","tienda");					
					$sqlConsultaCategorias = "SELECT * FROM categorias ORDER BY nombre_cat ASC";
					$ejecutarConsulta = $conexion->query($sqlConsultaCategorias);
					foreach($ejecutarConsulta as $registro)
					{
						$codCat = $registro["codigo_cat"];
						$nomCat = $registro["nombre_cat"];
						echo "<option value='$codCat'>$nomCat</option><br>";
					}					
				?>	
			</select>
			<input type="submit" value="Filtrar">
		</form>
		<hr>
		
		<table border=1>
			<tr>
				<th> Nombre</th>
				<th> Precio</th>
				<th> Acción</th>
			</tr>
			<?php
				$sqlConsultaProductos = "SELECT * FROM productos ORDER BY nombre_pro ASC";
				$ejecutarConsulta = $conexion->query($sqlConsultaProductos);
					foreach($ejecutarConsulta as $registro)
					{	
						$codigoPro = $registro["codigo_pro"];
						$nombrePro = $registro["nombre_pro"];
						$precioPro = $registro["precio_pro"];
						echo "<tr>";
						echo "<td>$nombrePro</td>
							  <td>$precioPro</td>
							  <td>
								<center>
									<button onclick='window.location.href=`detalleProducto.php?MOCHILA=$codigoPro`'>Ver</button>
								</center>
							  </td>";
						echo "</tr>";
					}			
			?>
		</table>
	</body>
</html>