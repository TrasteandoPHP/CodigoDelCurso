<?php

$conex=new mysqli("localhost","root","","lunes5");
$nc=$_POST["nomc"];
$pc=$_POST["passc"];
$ec=$_POST["emac"];
$tc=$_POST["telc"];
$cp=$_POST["provincia"];
$cs=$_POST["sexo"];
$sql2 = "INSERT INTO clientes (nombre_cli, pass_cli, email_cli, tlf_cli, codigo_pro, codigo_sex) VALUES ('$nc','$pc','$ec','$tc','$cp','$cs')";

if($conex->query($sql2))
{
	echo "Se grabo ";
}
else
{
	echo "No se Grabo";
}
?>
