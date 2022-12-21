<?php
	include ("sacardefunciones.php");
	
	$variable = fronteo(1,3);
	fronteo(1,3);
	$variable2 = fronteo(1, $variable);
	
	echo "$variable<br>";
	echo "$variable2<br>";
	
	if(grabar("tabla","nom_alu, ape_alu","'$nom','$ape'"));

?>