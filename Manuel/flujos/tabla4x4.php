<?php
	echo"<table border=2>";	
	$numero=1;
	for($fila=1; $fila<=4; $fila++)
	{
		echo"<tr>";
		for($columna=1; $columna<=4; $columna++)
		{
			echo"<td><center>$numero</center></td>";	
			$numero++;
		}
		echo"</tr>";
	}
	echo"</table>";	
?>