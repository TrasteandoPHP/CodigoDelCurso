<?php
	$nfilas = $_POST["nfilas"];
	$ncolumnas = $_POST["ncolumnas"];
	$relleno = $_POST["dato"];


	echo"<table border=1>";	
	for($fila=1; $fila<=$nfilas; $fila++)
	{
		echo"<tr>";
		for($columna=1; $columna<=$ncolumnas; $columna++)
		{
			echo"<td><center>$relleno</center></td>";	
		}
		echo"</tr>";
	}
	echo"</table>";	
?>