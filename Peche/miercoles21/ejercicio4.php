<?php
$con=new mysqli("10.10.10.199","alfonso","123456","examen");
$sqlc="SHOW COLUMNS FROM empleados";
$sql="SELECT * FROM empleados";
$as="";
$ejec=$con->query($sqlc);
$ejecu=$con->query($sql);
$ar=array();
echo "<table border=1>";
echo "<tr>";
foreach($ejec as $consulta)
{
array_push($ar,$consulta["Field"]);
$as=$consulta["Field"];
echo "<td>$as</td>";
}
	echo "<tr>";
	foreach($ejecu as $reg)
	{
		for($i=0;$i<count($ar);$i++)
{
		echo "<td>";
	echo $reg[$ar[$i]];
	echo "</td>";
	}
	echo "</tr>";
}
echo "</tr>";
echo "</table>";
?>

















