<?php
$ser="localhost";
$usu="root";
$pwd="";
$bd="rompecabezas";

$dato="barcelona";

$con=new mysqli($ser, $usu, $pwd, $bd);//creo la conexion
$sql="SELECT * FROM provincias WHERE nombre='$dato'";

$consulta = $con->query($sql);//creo la consulta
if($consulta->fetch_array())//pregunto si es capaz de ordenar los datos si es capaz es decir es que encontro registros
{
	echo "<table border=1>";

	foreach($consulta as $reg)//extraigo los datos de la bd
	{
	$cod=$reg["codigo"];//campos
	$nom=$reg["nombre"];//campos
		echo "<tr>";
		echo "<td>$cod</td>";
		echo "<td>$nom</td>";
		echo "</tr>";
	}
}
else
{
	echo "No es capaz de ordenar por lo tanto no hay datos";
	
}
echo "</table>";


?>