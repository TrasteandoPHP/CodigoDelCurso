<?php

	$variable = "javier";
	
	$variable = ucfirst($variable);
	
	echo "$variable<br><br>";
	
	$variable = lcfirst($variable);
	
	echo "$variable<br><br>";
	
	$variable = strtoupper($variable);
	
	echo "$variable<br><br>";
	
	$variable = strtolower($variable);
	
	echo "$variable<br><br>";
	
	$holamundo = "hola mundo";
	
	$holamundo = ucwords($holamundo);
	
	echo "$holamundo<br><br>";
	
	// Borrar espacios
	$eraseunavez = " erase una vez ";
	
	rtrim($eraseunavez);
	echo "$eraseunavez<br><br>";
	
	ltrim($eraseunavez);
	echo "$eraseunavez<br><br>";
	
	trim($eraseunavez);
	echo "$eraseunavez<br><br>";
	
	$eraseunavez1 = ucwords(trim($eraseunavez));
	echo "$eraseunavez1<br><br>";
	
	// Cifrado de datos. Codificación base64
	
	$nombre = "Alfonso";
	$nombreEncriptado = base64_encode($nombre);
	$nombreDesencriptado = base64_decode($nombreEncriptado);
	echo "Variable en texto claro: $nombre<br>";
	echo "Variable encriptada en BASE64: $nombreEncriptado<br>";
	echo "Variable desencriptada en BASE64: $nombreDesencriptado<br><br>";
	
	
	
	
	
	
	


?>