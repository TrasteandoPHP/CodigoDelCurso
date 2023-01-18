<?php
$con=new mysqli("10.10.10.199","alfonso","123456","examen");
$sqlc="SHOW COLUMNS FROM alumnos";
$ejec=$con->query($sqlc);
$var="";
foreach($ejec as $consulta)
{
	$var.=$consulta["Field"].",";
}
$var=trim($var);
$var=substr($var,0,-1);
$sql1="INSERT INTO alumnos ($var) VALUES (NULL,'Pedro','Peche','sdsadsds','1111')";
$ejecutar= $con->query($sql1);



?>