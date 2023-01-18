<h1>Estas en consulta Cli</h1>

<?php
$ver =$_GET["com"];
echo "<h1>con $ver variables</h1>";
switch($ver)
{
case 0:
	echo "nada";
	break;
case 1:
	$dni = $_GET["dni"];
	
	echo " DNI:$dni ";
	break;
case 2:
	$nom = $_GET["nom"];
	$ape = $_GET["ape"];
	
	echo "NOMBRE:$nom<br>APELLIDO:$ape";
	break;
case 3:

	$eda = $_GET["eda"];
	$tel = $_GET["tel"];
	$sex = $_GET["sex"];
		echo "EDAD: $eda<br> TELEFONO:$tel<br>  SEXO:$sex";
	break;
default:
break;
}

?>