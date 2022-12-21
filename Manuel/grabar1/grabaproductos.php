<?php
	$producto=$_POST["nproducto"];
	$descripcion=$_POST["ndescripcion"];
	
	$conexion = new mysqli("localhost", "root", "", "rompecabezas");
	$sql = "INSERT INTO productos(nombre, descripcion) VALUES ('$producto', '$descripcion')";
	
	if($conexion->query ($sql))
	{
		echo "Grabación ejecutada correctamente";
		echo "<br><br>";		
		echo "<button onclick='window.location.href=`./formularioproductos.html`'>Volver</button>";		
	}
	else
	{
		echo "Error de grabación. Vuelva a intentarlo....";
		echo "<br><br>";
		echo "<button onclick='window.location.href=`./formularioproductos.html`'>Volver</button>";		
	}
?>