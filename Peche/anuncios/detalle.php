<?php
$v=$_GET["codigo"];
$con=new mysqli("localhost","root","","ejemplo123");
$sqli = "SELECT * FROM imagenes WHERE cod_anu = '$v'";
$sqla = "SELECT * FROM anuncios WHERE cod_anu = '$v'";

$ejeci= $con->query($sqli);
$ejeca = $con->query($sqla);
$reg=$ejeca->fetch_array();
$men=$reg["mensaje_anu"];
$tit=$reg["titulo_anu"];
echo "$tit <br>";
foreach($ejeci as $regima)
{
	$imagen = $regima["imagen_ima"];
	$ruta = "./imagenes/$v/$imagen";
	echo "<center><img src='$ruta' width='60%'><br><br></center>";
}
echo "$men<br>";

echo "<button onclick='window.location.href=`consulta.php`'>Volver</button> 
";

?>