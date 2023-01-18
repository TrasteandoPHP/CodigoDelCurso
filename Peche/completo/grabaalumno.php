<?php
include 'conecta.php';
$d1=$_POST["nom"];
$d2=$_POST["ape"];
$d1e=base64_encode($d1);
$d2e=base64_encode($d2);
$sql="INSERT INTO alumnos (nom_alu, ape_alu, nomencri_alu, apeencri_alu) VALUES ('$d1','$d2','$d1e','$d2e')";
$sql2="SELECT * FROM alumnos WHERE nomencri_alu='$d1e' AND apeencri_alu='$d2e'"; 
$consulta =$con->query($sql2);
if($consulta->fetch_array())
{
		echo "no graba ya existe nom encrip ape encrip";
}else
	{if($con->query($sql))
			{
				echo "Grabo";
			}
	else
			{
				echo "no grabo";
			}
}
?>
<table border=1>
<tr><td>Codigo</td><td>Nombre</td><td>Apellido</td><td>Nombre Encriptado</td><td>Apellido Encriptado</td><tr>
<?php
 $sql3 = "SELECT * FROM alumnos";
 $consult=$con->query($sql3);
foreach($consult as $reg)
{
	$d1=$reg["cod_alu"];
	$d2=$reg["nom_alu"];
	//$d2=base64_decode($d2);
	$d3=$reg["ape_alu"];
	$d4=$reg["nomencri_alu"];
	$d5=$reg["apeencri_alu"];
	echo "<tr><td>$d1</td><td>$d2</td><td>$d3</td><td>$d4</td><td>$d5</td></tr>";
	//$sqlgraba hacia otra trabla
 	
} 
 ?>
</tr>
</table> 
