<?php
$con = new mysqli("localhost","root","","");
$m=$_GET["m"];
$sql="";
$opt=$_GET["rellena"];
$v2="";
switch($opt)
{	
	case 1:
	$v1=$_POST["dni"];
	$v2=$_POST["nom"];
	$sql="INSERT INTO clientes(dni_cli, nom_cli) VALUES ('$v1','$v2')";
	//echo "$m";
	break;
	
	case 2:
	$v1=$_POST["pre"];
	$v2=$_POST["des"];
	$sql="INSERT INTO clientes(pre_pro, des_pro) VALUES ('$v1','$v2')";
	//echo "$m";
	break;
	
	case 3:
	$v1=$_POST["cat"];
	//echo "$m";
	$sql="INSERT INTO clientes(nom_cat) VALUES ('$v1')";
	break;
	
	default:
	break;

}	
echo "<br>$v1<br>$v2";

echo "<button onclick='window.location.href=`consulta.php?c=$m`'>Consulta $m</button>";
//if($con->query($sql))
	//{
	//	echo "registro grabado $m";
	//}
		//else
	//{
	
	//}
//$ejecutar= $con->query($sql);
?>