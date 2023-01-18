<?php
$sex=$_POST["sexo"];
$con = new mysqli("localhost","root","","lunes5");
$sql="INSERT INTO sexo(nombre_sex) VALUES ('$sex')";
$sqlc="SELECT * FROM sexo WHERE nombre_sex='$sex'";
$consulta = $con->query($sqlc);
if($consulta->fetch_array())
{
	echo "No grabado sexo ya existe";
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