<?php

	function grabar($tabla, $campos, $valores)
	{
		$conexion = conectar();
		$sql = "INSERT INTO $tabla ($campos) VALUES ($valores)";
		return $conexion->query($sql);
	}

	function ultimograbado()
	{
		$conexion = conectar();
		return $conexion->insert_id;
	}
	
	function existe($tabla, $condicion)
	{
		$conexion = conectar();
		$sql = "SELECT * FROM $tabla $condicion";
		$ejecutar = $conexion->query($sql);
		return $ejecutar->fetch_array();
	}
	
	function  preparabucle($tabla, $condicion)
	{
		$conexion = conectar();
		$sql = "SELECT * FROM $tabla $condicion";
		return $conexion->query($sql);
	}
	
	function actualizar($tabla,$campos,$condicion)
	{
		$conexion = conectar();
		$sql= "UPDATE $tabla SET $campos $condicion";
		return $conexion->query($sql);
	}
	
	function borrar($tabla, $condicion)
	{
		$conexion = conectar();
		$sql = "DELETE FROM $tabla $condicion";
		return $conexion->query($sql);
	}
	
	function conectar()
	{
		return $conexion = new mysqli("10.10.10.107","cabreiroa","agua","tiendados");
	}
?>