<?php
	
		//Tengo que recoger los inputs que vienen del index
	$nom = $_GET["nombre"];
	$ape = $_GET["apellido"];// $_GET palabra reservada para recoger datos del index.html
	echo "Te llamas  <b>$nom</b> y te apellidos <i>$ape</i>" ; // imprim ir en pantalla 
	echo "<br>";
	echo 'Te llamas $nom y te apellidos $ape'; // comilla simple pinta literal
	//con dobles comillas te da el valor de la variable
	echo '<br>';
	echo '<a href="index.html">Volver</a>'; 
	//vamos a ver como llevariamos a una bd
	//me tengo que conectar a una bd
	
	//4 pasos para conectarte a la bd
	//en que servidor esta
	//usuario
	//contraseña
	//a que bd
	
	$servidor = "localhost";
	$usuario = "root";
	$password = "";
	$database = "primerabd";
	
	//la conexion se establece
	$conexion = new mysqli($servidor, $usuario, $password, $database);
	
	//como grabamos los datos en la tabla correspondiente
	$sql = "INSERT INTO clientes (nombre, apellido, telefono, email) VALUES ('$nom','$ape','6565666','fdffdd')";
	//vamos a ejecutar la grabaciom
	//En esta conexion ejecutas 
	$conexion->query($sql);
	
	
?>
