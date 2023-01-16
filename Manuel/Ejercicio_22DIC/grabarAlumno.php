<?php
	// Ejercicio 1: Grabar datos en tabla alumnos.
	
	 echo "Consultar los campos de una base de datos alumnos<br>";
	 echo "--------------------------------------------------------------";
	 echo "<br>";
	 //$conexion = new mysqli("127.0.0.1","clase","1234","Jueves22");
	 $conexion = new mysqli("10.10.10.106","clase","1234","Jueves22");
	 $sqlConsultaCamposBD = "SHOW COLUMNS FROM alumnos";
	 $ejecutarConsultaCamposBDalumnos = $conexion->query($sqlConsultaCamposBD);
	 $tabla="alumnos";
	 $campos="";
	 
	 foreach($ejecutarConsultaCamposBDalumnos as $c)
	 {
		 $campos.=$c["Field"].",";		 	 
	 }

	echo "$campos<br>";	
	
	$campos = substr($campos,0,-1);
	echo "$campos<br>";
	
	$arrayDatosAlumnos = array("Manuel","manuel@casado.com","123456");
	$datosAlumnos="";
	foreach($arrayDatosAlumnos as $alu)
	{
		$datosAlumnos.="'$alu',"; 
	}
	echo "$datosAlumnos<br>";
	$datos = substr($datosAlumnos,0,-1);
	echo "$datos<br>";
	/*
	$sqlGrabacion= "INSERT INTO $tabla ($campos) VALUES (NULL, $datos)";
	
	if($conexion->query($sqlGrabacion))
		{
			echo "Grabado correctamente";
		}
		else
		{
			echo "Ha ocurrido un error durante la grabación";
		}
	*/	
	$arrayDeCampos = array();
	$sqlConsulta = "SELECT * FROM alumnos";
	$ejecutarSqlConsulta = $conexion->query($sqlConsulta);
		foreach($ejecutarSqlConsulta as $registro)
		{
			var_dump($registro);
			echo "<br>";
		}			
?>


