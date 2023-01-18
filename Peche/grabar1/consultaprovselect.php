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
echo "<table border=1>";
echo "<tr><td><b>Codigo</b></td>";
echo "<td><b>Nombre</b></td></tr>";
foreach($guardar as $registro )
	{
		//En este bucle estoy recorriendo cada uno de los registros en cadda vuelta, es decir Una vuelta un registro
//vamos a extraer los valores del $registro
$cod = $registro["codigo"];
$nom = $registro["nombre"];
echo "<tr>";
//tenemos que mostrarlos en pantalla
echo "<td>$cod</td>";
echo "<td>$nom</td>";
echo "</tr>";
}
echo "</tabla>";
?>