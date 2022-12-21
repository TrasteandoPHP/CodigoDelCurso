<?php
	$whatForm = $_GET["whatForm"];
	
	switch($whatForm)
	{
		case 1:			
			$nombreAlumno = ucfirst($_POST["nombre"]);
			$emailAlumno = ucfirst($_POST["email"]);
			$sqlGrabacion = "INSERT INTO alumnos(nom_alu, email_alu) VALUES ('$nombreAlumno', '$emailAlumno')";
			//$sqlConsulta = "SELECT * FROM $tabla";
			$textoamostrar = "Alumnos registrados";
			$tabla = "alumnos";
			$campo1 = "nom_alu";
			$campo2 = "email_alu";
			$variableCondicionada = $nombreAlumno;
			break;
			
		case 2:
			$nombreAsignatura = ucfirst($_POST["asignatura"]);
			$horasAsignatura = ucfirst($_POST["horas"]);
			$sqlGrabacion = "INSERT INTO asignaturas(nom_asi, horas_asi) VALUES ('$nombreAsignatura', '$horasAsignatura')";
			//$sqlConsulta = "SELECT * FROM $tabla";
			$textoamostrar = "Asignaturas registradas";
			$tabla = "asignaturas";
			$campo1 = "nom_asi";
			$campo2 = "horas_asi";
			$variableCondicionada = $nombreAsignatura;
			break;
	}
	// Conectar a la Base de Datos
	$conexion = new mysqli("10.10.10.199","cachimba","pelicano","ejercicio");
	//$conexion = new mysqli("localhost","root","","ejercicio");
	
	// Comprobamos si existe
	$sqlExiste = "SELECT * FROM $tabla WHERE $campo1 = '$variableCondicionada'";
	$ejecutarExiste = $conexion->query($sqlExiste);
	
	if(!$ejecutarExiste->fetch_array())
	{
		// Ejecutar Grabacion
		$conexion->query($sqlGrabacion);
	}
	else
	{
		echo "<h4><font color=red>$variableCondicionada ya existe</font></h4>";
	}
		
	// Ejecutar Consulta
	$sqlConsulta = "SELECT * FROM $tabla";
	$ejecutarConsulta = $conexion->query($sqlConsulta);
	echo "<h1>$textoamostrar</h1>";
	foreach($ejecutarConsulta as $registro)
					{
						$dato1 = $registro["$campo1"];
						$dato2 = $registro["$campo2"];
						
						echo "$dato1 - $dato2<br>";
					}	
	echo "<br><br>";
	echo "<button onclick='window.location.href=`./index.html`'>Volver</button>";					
?>
