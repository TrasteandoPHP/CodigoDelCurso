<?php
	//TENGO QUE RECOGER LOS INPUT QUE VIENEN DEL INDEX
	
	$nom =$_POST["nombreper"];
	$tlf =$_POST["tlfper"];
	
	echo "Te llamas <b>$nom</b> y tu telefono es <i>$tlf</i>";
	//esto muestra en pantalla
	echo "<br>";
	
	//vamos a ver como llevariamos estos datos a una BD
	//tengo que conectarme a la BD
	$servidor ="localhost";
	$usuario = "root";
	$contrasena ="";
	$basededatos ="magia";
	
	//laconexion se establece así:
	$conexion = new mysqli($servidor, $usuario, $contrasena, $basededatos); 
	$sql ="INSERT INTO personas(nombre,telefono) VALUES ('$nom','$tlf')";
	//vamos a ejecutar la grabación
	// en esta conexion ejecutas el sql que he escrito:
	$conexion->query ($sql);
	
	
?>		