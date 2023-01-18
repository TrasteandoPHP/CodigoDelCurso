<?php
$b=$_POST["prd"];
$selector = $_POST["cons"];
$ser="localhost";
$usu="root";
$pwd="";
$bd="rompecabezas";
$con= new mysqli($ser, $usu, $pwd, $bd);
switch($selector){
	case 0:
		$campo = "nomprod";
	break;
	case 1:
		$campo = "codprod";
	break;
	default:
	break;
}

$sql="SELECT * FROM productos WHERE $campo='$b'";

$consulta=$con->query($sql);
echo "<table border=1>";
if($consulta->fetch_array())
{echo "<tr><td colspan='3'>Consulta Productos</td></tr>";
	echo "<tr><td>Codigo</td><td>Nombre</td><td>Descripcion</td></tr>";
foreach($consulta as $reg)
{echo "<tr>";
	$cod=$reg["codprod"];
	$nomp=$reg["nomprod"];
	$desc=$reg["descripcion"];
	echo "<td>$cod</td>";
	echo "<td>$nomp</td>";
	echo "<td>$desc</td>";
	echo "</tr>";
}
}
else
{
echo "No se encuentra producto";	
}	
echo "</table>";
echo "<a href='formularioconsulta.html'>Volver</a>";


?>