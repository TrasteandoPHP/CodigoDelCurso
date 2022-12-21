<?php
	//TENGO QUE RECOGER LOS INPUT QUE VIENEN DEL INDEX
	
	$nom =$_GET["nombreper"];
	$ape =$_GET["apellidoper"];
	
	echo "Te llamas <b>$nom</b> y te apellidas <i>$ape</i>";
	//esto muestra en pantalla
	echo "<br>";
	echo 'Te llamas $nom y te apellidas $ape';
	//vamos a ver como llevariamos estos datos a una BD
	//tengo que conectarme a la BD
	$servidor ="localhost";
	$usuario = "root";
	$contrasena ="";
	$basededatos ="ficticia";
	
	//laconexion se establece así:
	$conexion = new mysqli($servidor, $usuario, $contrasena,$basededatos); 
	$sql ="INSERT INTO nombretabla(campo1,campo2) VALUES ('$nom','$ape')";
	//vamos a ejecutar la grabación
	// en esta conexion ejecutas el sql que he escrito:
	$conexion->query ($sql);
	
	
?>		

