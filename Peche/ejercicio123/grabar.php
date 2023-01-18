<?php
$nom=$_POST["nombre"];
$ema=$_POST["email"];

$con=new mysqli("localhost","root","","ejemplo123");
$sql = "INSERT INTO tabla1 (nom_tab1,email_tab1) VALUES ('$nom','$ema')";
if($con->query($sql))
{
	//$consultar = "SELECT * FROM tabla1 ORDER BY cod_tab1 DESC LIMIT 1";
	//$ejecutar = $con->query($consultar);
	//$reg = $ejecutar->fetch_array();
	//$cod = $reg["cod_tab1"];
	$cod = $con->insert_id;//hacer directamente despues de grabar
	//Crear carpeta
	mkdir("./carpetas/$cod",0777);//lectura escritura
	$sqltab2 = "INSERT INTO tabla2 (cod_tab1,nom_tab2) VALUES ('$cod', '$nom')"; 
	$con->query($sqltab2);
	//$cod = $con->insert_id;  para averiguar el codigo se cambia por lo de arriba
	
}
else
{
	
}


?>