<?php

	function crearTabla($nFilas, $nCeldas)
	{
		abrirTabla();
		crearFilasCeldas($nFilas,$nCeldas);
		cerrarTabla();
	}
		
	function abrirTabla() 
	{
		echo "<table border=1>";
	}
	
	function crearFilasCeldas($nFilas,$nCeldas)
	{
		for($i=1; $i<=$nFilas; $i++)
		{
			echo "<tr>";
			crearCeldas($nCeldas);
			echo "</tr>";
		}		
	}
	
	function crearCeldas($nCeldas)
	{	
		for($i=1; $i<=$nCeldas;$i++ )
		{
			echo "<td>$i</td>";
		}		
	}
	
	function cerrarTabla()
	{
		echo "</table>";
	}

	
?>