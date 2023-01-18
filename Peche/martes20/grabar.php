<?php
$array1=array("nom_per","prov_per","ciudad_per","cp_per","email_per","pass_per");
$arrayc=array("deporte","futbol");
$array2=array("nom_cat","descri_cat");
$arrayp=array("xxxxxx","coruna","coruna","15172","xxxxx@outlook.com","123456");

include "funciones.php";
//insertar("personas",sacarcadena($array1),extraercadena($arrayp));

//list($ar1,$ar2)=sacarcadena();
//echo $ar1;
//insertar("categorias",$ar1,$ar2);

consulta();

/*$tabla1="personas";
$tabla2="categoria";
 for($i=1;$i<3;$i++)
 {
	// ${"campo".$i} = "";//variable dinamica
	 foreach($array$i as $c)
	 {
		 $campo$i.="$c,";
	 }
	 $valores$i = "";
	 foreach($datos$i as $v)
	 {
		 $valores$i.="'$v',";
	 }
	 $campos$i = substr($campos$i,0,-1);
	 $valores$i = substr($valores$i,0,-1);
	 grabar($tabla$i,$campo$i,$i);
 }
 */
 
 
 
 
 
 
 
 
?>