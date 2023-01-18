<?php
$nom= $_POST["nomp"];
$des= $_POST["desp"];
$precp= $_POST["prec"];
$codc= $_POST["opc"];
$con = new mysqli("localhost","root","","tienda");
//$con = new mysqli("10.10.10.108","escuela","1234","tienda");
$sql = "INSERT INTO productos (nombre_pro, descripcion_pro, precio_pro, codigo_cat) VALUES ('$nom','$des','$precp','$codc')";
if($con->query($sql))
{
	echo "Grabo";
	
}
else
{
	echo "no grabo";
}
	echo "<br><button onclick='window.location.href=`formproductos.php`'>Volver</button>";
?>