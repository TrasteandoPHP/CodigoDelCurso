o<?php
$nc=ucfirst($_POST["cat"]);

$con =new mysqli("10.10.10.112","escuela","1234","tienda"); //hacemos la conexion con la base de datos
$sql="SELECT * FROM categorias WHERE nombre='$nc'";//hacemos la consulta en sql script
$sql2="INSERT INTO categorias (nombre_cat) VALUES ('$nc')";
$cons= $con->query($sql);//ejecutamos la consulta sql
if($cons->fetch_array())
{
	echo "no se puede grabar ya existe";
	}
	else
	{
	if($con->query($sql2)){
		echo "Grabo";
			}
else{
	echo "no grabo";
}	
		
	}
?>

