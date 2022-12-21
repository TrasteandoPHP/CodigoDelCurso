<?php
	$conexion = new mysqli("localhost","root","","rompecabezas");
	$sql="SELECT * FROM provincias";
	$consulta = $conexion->query($sql);
	foreach($consulta as $registro){
		$cod = $registro["codigo"];
		$nom = $registro["nombre"];
		echo "$cod - $nom <br>";
	}	
?>