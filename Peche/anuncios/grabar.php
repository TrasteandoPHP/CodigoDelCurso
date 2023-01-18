<?php
$tit=$_POST["titulo"];
$men=$_POST["mensaje"];
$img1=$_FILES["foto1"]["name"];
$img2=$_FILES["foto2"]["name"];
// me conecto a la base de datos
$con = new mysqli("localhost","root","","ejemplo123");
$sqlanu = "INSERT INTO anuncios (titulo_anu, mensaje_anu) VALUES ('$tit', '$men')";

if($con->query($sqlanu))
{
	$cod = $con->insert_id;
	mkdir("./imagenes/$cod",0777);
	//vamos a grabar la primera imagenes
	$sqlimg1="INSERT INTO imagenes (cod_anu, imagen_ima) VALUES ('$cod','$img1')";
	$con ->query($sqlimg1);
	$destino1 = "./imagenes/$cod/$img1";
	@move_uploaded_file($_FILES["foto1"]["tmp_name"],$destino1);
	//segunda imagen
	$sqlimg2="INSERT INTO imagenes (cod_anu, imagen_ima) VALUES ('$cod','$img2')";
	$con ->query($sqlimg2);
	$destino2 = "./imagenes/$cod/$img2";
	@move_uploaded_file($_FILES["foto2"]["tmp_name"],$destino2);
	
	echo "hhh";
	
	
}
else
{
	
}
?>