<?php
$con=new mysqli("10.10.10.199","alfonso","123456","examen");
$sqlc="SHOW COLUMNS FROM empleados";
$sql="SELECT * FROM empleados";
$ejec=$con->query($sqlc);
$ejecu=$con->query($sql);
$var="";
$ar=array();
echo "<table border=1>";
foreach($ejec as $consulta)
{
echo "<tr>";	
	$var=$consulta["Field"];
	echo "<td>$var</td>";
foreach($ejecu as $reg)
{
$as= $reg["$var"];
echo "<td>$as</td>";
}
echo "</tr>";
}
echo "</table>";
?>