<?php

	function crearTabla($borde,$columnas,$texto)
	{
		inicio_tabla($borde);
		inicio_fila();
		pinta_celda($columnas, $texto);
		fin_fila();
		fin_tabla();
	}


	function inicio_tabla($borde)
	{
		echo "<table border=$borde>";
	}
	
	function fin_tabla()
	{
		echo "</table>";
	}

	function inicio_fila()
	{
		echo "<tr>";
	}
	
	function fin_fila()
	{
		echo "</tr>";
	}
	
	function pinta_celda($columnas, $texto)
	{
		if ($columnas=="" || $columnas==0 )
		{
			echo "<td>$texto</td>";	
		}
		else
		{
			echo "<td colspan='$columnas'>$texto</td>";
		}			
	}
?>