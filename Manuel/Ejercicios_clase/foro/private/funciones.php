<?php

	function graba($tabla, $campos, $valores)
	{
		$conexion = new mysqli("localhost","root","","foro");
		$sql = "INSERT INTO $tabla ($campos) VALUES ($valores)";
		return $conexion->query($sql);
		$conexion->close();
	}

	function ultimo()
	{
		$conexion = new mysqli("localhost","root","","foro");
		return $conexion->insert_id;
		$conexion->close();
	}

	function hazfetch($tabla, $condicion)
	{
		$conexion = new mysqli("localhost","root","","foro");
		$sql = "SELECT * FROM $tabla $condicion";
		$ej = $conexion->query($sql);
		return $ej->fetch_array();
		$conexion->close();
	}

	function hazquery($tabla, $condicion)
	{
		$conexion = new mysqli("localhost","root","","foro");
		$sql = "SELECT * FROM $tabla $condicion";
		return $conexion->query($sql);
		$conexion->close();
	}

	function actualiza($tabla, $campos, $condicion)
	{
		$conexion = new mysqli("localhost","root","","foro");
		$sql = "UPDATE $tabla SET $campos $condicion";
		return $conexion->query($sql);
		$conexion->close();
	}

	function borra($tabla, $condicion)
	{
		$conexion = new mysqli("localhost","root","","foro");
		$sql = "DELETE FROM $tabla $condicion";
		return $conexion->query($sql);
		$conexion->close();
	}

	function mensaje($mensaje, $link)
	{
		echo "<script>
				alert('$mensaje');
				window.location.href='$link';
		</script>";
	}

	function menu()
	{
		echo "
		<html>
		<head>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js'></script>
		</head>
		<body>

				<button onclick='window.location.href=`index.php`'>Inicio</button>
				<button onclick=' window.location.href=`empleados.php`'>Empleados</button>
				<button onclick='window.location.href=`moviles.php`'>Moviles</button>
				<button onclick='window.location.href=`coches.php`'>Coches</button>

		";
	}
?>