<?php
$con=new mysqli("10.10.10.106","clase","1234","jueves22");
$sqlc="SHOW COLUMNS FROM alumnos";
$ejec=$con->query($sqlc);
$var="";
foreach($ejec as $consulta)
{
	$var.=$consulta["Field"].",";
}
$var=trim($var);
$var=substr($var,0,-1);
$sql1="INSERT INTO alumnos ($var) VALUES (NULL,'Pedro','dfd@fds','fdggfdg')";
if($ejecutar= $con->query($sql1))
{
	echo "grabo";
	}
else{
	echo "no grabo";
	}



?>