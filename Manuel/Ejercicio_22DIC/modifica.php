<?php
	// Recibimos los datos del formulario
	$cod = $_POST["codigo"];
	$nom = $_POST["nombre"];
	$ema = $_POST["email"];
	$pas = $_POST["password"];
	
	echo "$cod - $nom - $ema - $pas";
	echo "<hr>";
	
	// Conectamos a la BBDD
	$conexion = new mysqli("10.10.10.106","clase","1234","jueves22");
	
	// SQL UPDATE para actualizar los datos 
	$sqlUpdate = "UPDATE alumnos SET nom_alu='$nom', email_alu='$ema', pass_alu='$pas' WHERE cod_alu='$cod'";
	
	// Ejecutamos el SQL preguntando
	if($conexion->query($sqlUpdate))
	{
		echo "Registro actualizado correctamente...";
		echo "<br><br><button onclick='window.location.href=`formmodif.php?codigo=$cod&nombre=$nom&boton`'>Volver</button>";		
	}
	else
	{
		echo "Registro NO actualizado." ;		
		echo "<br><br><a href='index.php'>Volver<a/>";
	}
?>