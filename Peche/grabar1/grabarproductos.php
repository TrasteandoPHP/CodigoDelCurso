<?php
$nomp=$_POST["nomp"];
$dp=$_POST["descp"];

$serv="localhost";
$usu="root";
$pwd="";
$bd="rompecabezas";

$con=new mysqli($serv, $usu, $pwd, $bd);
$sql="INSERT INTO productos (nomprod, descripcion) VALUES ('$nomp','$dp')";

if($con->query($sql))
{
echo "Grabo<br> "; 	
echo "<a href='formularioproductos.html'><b>Volver</b></a>";
}
else
{
	echo "No grabo";
	echo "<button onclick='window.location.href=`formularioprovincia.html`'>Volver</button>";
}
 //$con->close();

?>