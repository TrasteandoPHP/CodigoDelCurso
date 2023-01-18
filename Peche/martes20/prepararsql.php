<?php
$array = array("nom_alu","ape_alu","tlf_alu","dir_alu","cp_alu","sex_alu");
$arra2 = array("nom_pro","des_pro","precio_pro");

$campo="";
foreach($array as $a1)
{
	$campo.="$a1,";
	
}
echo $campo;
$cade=substr($campo,0,-1);
echo "<br>";
explode(",",$cade);
echo $cade;

$arrayd = array("alfonso","carro","981","cambre","15679","hombre");
$arrayd2= array("boligrafo","boligrafo bic","1€");

$val="";
foreach($arrayd as $ad)
{
	$val.="'$ad',";
}
$val=substr($val,0,-1);
$sql="INSERT INTO tabla ($campo) VALUES ($val)";
echo $sql;
//include "funciones.php";
//insertar("",$campo,$val);

?>