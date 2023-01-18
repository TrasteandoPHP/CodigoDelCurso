<?php
function inicio($border)
{
	echo "<table border='$border'";
}

function fin()
{
	echo "</table>";
	
}
function iniciofila()
{
	echo "<tr>";
}
function finfila()
{
	echo "</tr>";
}
function pintacelda($columnas,$texto)
{
	if($columnas=="" || $columnas ==0)
	{
		echo "<td>$texto</td>";
	}
	else
	{
		echo "<td colspan='$columnas'>$texto</td>";
	}
}

?>