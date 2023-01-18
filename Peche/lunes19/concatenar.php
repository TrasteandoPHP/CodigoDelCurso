<?php

//Concatenar simple
$var1="hola";
$var2="Pepito";
$conca1 = "$var1 $var2";
$conca1 = $var1.$var2;
$conca1 = $var1." ".$var2;

echo $conca1;
echo "<br>";
//concatneado especial

$var="";
for($i=0;$i<10;$i++)
{
	$var.= "Hola$";
	echo "$var<br>";
	
}
   
   
   
   
   $trozos = explode("$",$var);//para convertir una cadena en un arreglo
   
   foreach($trozos as $rg)
   {
	   echo $rg;
   }
   
   
   
   
   var_dump($trozos);
   
   
?>