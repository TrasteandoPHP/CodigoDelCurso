<?php
	$conexion = new mysqli("127.0.0.1","root","","rompecabezas");
	$sql = "SELECT * FROM productos ORDER BY codigo DESC LIMIT 5";
	$consulta = $conexion->query($sql);
	
	echo "<table border=1>";
	echo "<tr><th colspan=3><center>Productos</center></th></tr>";
	echo "<tr>";
	echo "<th>Código</th><th>Nombre</th><th>Descripción</th>";
	echo "</tr>";
	foreach($consulta as $registro)
	{
		$cod = $registro["codigo"];
		$nom = $registro["nombre"];
		$des = $registro["descripcion"];
		//echo "$cod - $nom - $des <br>";
		echo "<tr>";
		echo "<td><center>$cod</center></td><td>$nom</td><td>$des</td>";	
		echo "</tr>";
	}
	echo "</table>";	
?>