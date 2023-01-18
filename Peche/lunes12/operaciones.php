<?php
//$con = new mysqli("10.10.10.199","cachimba","pelicano","ejercicio");
$con = new mysqli("localhost","root","","ejercicio");
$m=$_GET["m"];
$opt=$_GET["r"];

switch($opt)
{	
	case 1:
	 $v1=$_POST["nal"];
	 $v2=$_POST["ema"];
	 $campo="cod_alu";
	 $campo1="nom_alu";
	 $campo2="email_alu";
	break;
	
	case 2:
	 $v1=$_POST["nas"];
	 $v2=$_POST["has"];
	 $campo="cod_asi";
	 $campo1="nom_asi";
	 $campo2="horas_asi";
	break;
	
	default:
	break;
}	
$sqlexiste= "SELECT * FROM $m WHERE $campo1 = '$v1'";
$existe = $con->query($sqlexiste);
if($existe->fetch_array())
{
	echo "Repetidos no graba";
	}
else
{
	$sql="INSERT INTO $m($campo1, $campo2) VALUES ('$v1','$v2')";
	if($con->query($sql))
	{
		echo "registro grabado $m";
		$sql1 ="SELECT * FROM $m";
		$consulta =$con->query($sql1);
		foreach($consulta as $reg)
		{
			$c=$reg["$campo"];
			$n=$reg["$campo1"];
			$e=$reg["$campo2"];
			echo "<br>$c | $n | $e";
			}
			}else
			{
			}

}



















?>




