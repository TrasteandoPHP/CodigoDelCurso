<?php
//vamos a recoger los datos que vienen del formulario 

//para recoger el nombre el nombre del fichero
$fichero = $_FILES["archivo"]["name"];
$hoy= date("Y-m-d");
$ahora=date("H:i:s");

$nombrefichero = $hoy."_".$ahora."_".$fichero;



$trozos=explode(".",$fichero);
mkdir("./ficheros/$trozos[0]",0777);

$destino = "./ficheros/$trozos[0]/$nombrefichero";
//mover el fichero a su sitio
@move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino); 



?>