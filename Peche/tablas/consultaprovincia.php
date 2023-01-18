<?php
$ser="localhost";
$usu="root";
$pwd="";
$bd="rompecabezas";

$con=new mysqli($ser,$usu,$pwd,$bd);
$sql="SELECT * FROM provincias";
//necesitamos guardar en una variable
$guardar = $con->query($sql);
//for para recorer la biblioteca de datos de la variable
//foreach( )
	//	{
			
		//}
echo "$guardar";
?>