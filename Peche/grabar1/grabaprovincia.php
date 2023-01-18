<?php

//recoger los datos del formulario
$n=$_POST["nomp"];
$ser="localhost";
$usu="root";
$pwd="";
$bd="rompecabezas";
//establecer la conexion con la bd
$con= new mysqli($ser,$usu,$pwd,$bd);
$sql="INSERT INTO provincias(nombre) values('$n')";
if($con->query($sql))
{
	echo "grabo<br>";
	echo "<a href='formularioprovincia.html'>Volver</a>";
}
else
{
	echo "no grabo<br>";
	echo "<button onclick='window.location.href=`formularioprovincia.html`'>Volver</button>";
}
	//vamos a escribir en el lenguaje que entiende la bd el volcado de datos a la tabla que queremos
//echo "<button><a href='formularioprovincia.html'>Volver</a></button>";
//<button onclick="window.location.href='formularioprovincia.html'">Volver</button>
?>