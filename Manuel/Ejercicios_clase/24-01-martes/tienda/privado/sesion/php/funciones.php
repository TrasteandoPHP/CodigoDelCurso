<?php

	function grabar($tabla, $campos, $valores)
	{
		include("./php/conexion.php");
		$sql = "INSERT INTO $tabla ($campos) VALUES ($valores)";
		return $conexion->query($sql);
	}

	function ultimograbado()
	{
		include("./php/conexion.php");
		return $conexion->insert_id;
	}
	
	function existe($tabla, $condicion)
	{
		include("./php/conexion.php");
		$sql = "SELECT * FROM $tabla $condicion";
		$ejecutar = $conexion->query($sql);
		return $ejecutar->fetch_array();
	}
	
	function  preparabucle($tabla, $condicion)
	{
		include("./php/conexion.php");
		$sql = "SELECT * FROM $tabla $condicion";
		return $conexion->query($sql);
	}
	
	function actualizar($tabla,$campos,$condicion)
	{
		include("./php/conexion.php");
		$sql= "UPDATE $tabla SET $campos $condicion";
		return $conexion->query($sql);
	}
	
	function borrar($tabla, $condicion)
	{
		include("./php/conexion.php");
		$sql = "DELETE FROM $tabla $condicion";
		return $conexion->query($sql);
	}
?>