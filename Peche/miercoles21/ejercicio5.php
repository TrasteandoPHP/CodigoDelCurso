<?php
//$con=new mysqli("10.10.10.199","alfonso","123456","examen");
$con=new mysqli("10.10.10.106","clase","1234","jueves22");


$sqlcampo="SHOW COLUMNS FROM alumnos";
//$sqlcampo="SHOW COLUMNS FROM materias";
$ejecutar= $con->query($sqlcampo);
$campos = array();
foreach($ejecutar as $c)
{
	array_push($campos,$c["Field"]);
}
echo "<table border=1";
echo "<tr>";
foreach($campos as $encabezado)
{
	echo "<td>$encabezado</td>";
}
echo "</tr>";
//$sqlregistro="SELECT * FROM materias";
$sqlregistro="SELECT * FROM alumnos";
$ejecutarsqlregistros=$con->query($sqlregistro);
foreach($ejecutarsqlregistros as $registro)
{
echo "<tr>";
	foreach($campos as $campo)
	{
		echo "<td>$registro[$campo]</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>