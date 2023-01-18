<table>
<?php
//$con = new mysqli("10.10.10.199","cachimba","pelicano","ejercicio");
$con = new mysqli("localhost","root","","ejercicio");
$m=$_GET["m"];
$sql="";
$opt=$_GET["r"];
$v2="";
switch($opt)
{	
	case 1:
	 $v1=$_POST["nal"];
	 $v2=$_POST["eal"];
	$sql="INSERT INTO $m(nom_alu, email_alu) VALUES ('$v1','$v2')";
	if($con->query($sql))
	{
		echo "registro grabado $m";
		$cc=0;
			//echo "$m";
	break;
	
	case 2:
	 $v1=$_POST["nas"];
	 $v2=$_POST["has"];
	$sql="INSERT INTO asignaturas(nom_asi, horas_asi) VALUES ('$v1','$v2')";
	//echo "$m";
	if($con->query($sql))
	{
		echo "registro grabado $m";
		$sql1 ="SELECT * FROM asignaturas";
		$consulta =$con->query($sql1);
		foreach($consulta as $reg)
		{
			$c=$reg["cod_asi"];
			$n=$reg["nom_asi"];
			$e=$reg["horas_asi"];
			echo "<br>$c | $n | $e";
			}
	}
	else
	{
	
	}
		
	break;
		default:
	break;
}	


	//echo "<button onclick='window.location.href=`consulta.php?c=$m`'>Consulta $m</button>";
?>

</table>


$sql1 ="SELECT * FROM $m";
		$consulta =$con->query($sql1);
		foreach($consulta as $reg)
		{
			$c=$reg["cod_alu"];
			$n=$reg["nom_alu"];
			$e=$reg["email_alu"];
			$cc++;
			echo $cc;
			echo "<br>$c | $n | $e";
			}
	}
	else
	{
	
	}