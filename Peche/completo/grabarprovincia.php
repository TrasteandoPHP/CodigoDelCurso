<?php
$pro=$_POST["prov"];
$con = new mysqli("localhost","root","","lunes5");
$sql="INSERT INTO provincias(nombre_pro) VALUES ('$pro')";
$sqlc="SELECT * FROM provincias WHERE nombre_pro='$pro'";
$consulta = $con->query($sqlc);
if($consulta->fetch_array())
{
	echo "No grabado provincia ya existe";
}
else
{
	if($con->query($sql))
	{
	echo "Grabado Exitosamente";
	}
	else{
		echo "No se pudo Grabar";
	}
}
?>