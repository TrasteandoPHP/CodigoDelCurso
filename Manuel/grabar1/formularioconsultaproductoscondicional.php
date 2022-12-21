<?php
	$nombreproducto = $_POST["nproducto"];
	$conexion = new mysqli("localhost","root","","rompecabezas");
	$sql = "SELECT nombre, descripcion FROM productos WHERE nombre='$nombreproducto'";
	$ejecutar = $conexion->query($sql);
	if($ejecutar->fetch_array())
	{
		echo "<table border=1>";
		echo "<tr><th colspan=2><center>Productos</center></th></tr>";
		echo "<tr><th>Nombre</th><th>Descripción</th></tr>";
		foreach($ejecutar as $registro)
		{
			$nombreproducto = $registro["nombre"];
			$descripcionproducto = $registro["descripcion"];
			echo "<h1>Consulta Productos</h1>";
			echo "<tr>";
			echo "<td>$nombreproducto</td><td>$descripcionproducto</td>";	
			echo "</tr>";
			echo "</table>";
			echo "<br><br>";
			echo "<button onclick='window.location.href=`./formularioconsultaproductoscondicional.html`'>Volver</button>";
		}
	}
	else
	{
		echo "<font color='red'>!!! WARNING !!!</font><br>";
		echo "No existe el producto <b>$nombreproducto</b> en la tabla";
		echo "<br><br>";
		echo "<button onclick='window.location.href=`./formularioconsultaproductoscondicional.html`'>Volver</button>";
	}
?>