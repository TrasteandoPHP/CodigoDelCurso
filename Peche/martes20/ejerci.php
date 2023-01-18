<?php
$con=new mysqli("localhost","root","","prueba");
$sqlc="SELECT nomclie,apeclie FROM cliente";

$consulta=$con->query($sqlc);
$camp="";
foreach($consulta as $a1)
{
	$camp.="'$a1',";
	
}
echo $camp;
$cade=substr($campo,0,-1);
 echo "<br>";
 $inserta=explode(",",$cade);
echo $cade;
$sqli="INSERT INTO cliente (nomclie,apeclie) VALUES ($inserta)";
 if($con->query($sqli)){
 echo "Grabo";
 }

//$sql="INSERT INTO ";
$array = array("nom_alu","ape_alu","tlf_alu","dir_alu","cp_alu","sex_alu");
$arra2 = array("nom_pro","des_pro","precio_pro");



?>