<?php
$v1=$_POST["e1"];
$v2=$_POST["e2"];
$v3=$_POST["e3"];
$val1="'$v1','$v2','$v3'";
$con=new mysqli("10.10.10.199","alfonso","123456","examen");
$sqlc="SHOW COLUMNS FROM empleados";
$ejec=$con->query($sqlc);
$var="";
foreach($ejec as $consulta)
{
	$var.=$consulta["Field"].",";
}
$var=trim($var);
$var=substr($var,0,-1);
echo $var;
$sql1="INSERT INTO empleados ($var) VALUES (NULL,$val1)";
$ejecutar= $con->query($sql1);
$con=new mysqli("10.10.10.199","alfonso","123456","examen");
$sql="SELECT * FROM empleados";
$ejecu=$con->query($sql);
foreach($ejecu as $reg)
{
$as= $reg["ape"];
}
$n=count($reg);
echo $n;
var_dump($reg);
?>