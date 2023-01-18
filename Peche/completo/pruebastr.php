<?php
include 'conexion.php';

$ne =base64_encode(ucfirst($_POST["str"]));
//$sql = "INSERT INTO pruebas (texto_pru) VALUES ('$ne')";
if($con->query("INSERT INTO pruebas (texto_pru) VALUES ('$ne')"))
//if($con->query($sql))
{
echo "grabo<br>";
echo "<button onclick='window.location.href=`formprueba.html`'>Volver</button>";

 }
 else
 {
// echo "no grabo<br>";
 echo "<button onclick='window.location.href=`formprueba.html`'>Volver</button>";
 }
?> 
<table border=1>
<tr><td>Codigo</td><td>Nombre</td><tr>
<?php
 $sql2 = "SELECT * FROM pruebas ORDER BY cod_pru DESC";
 $consult=$con->query($sql2);
foreach($consult as $reg)
{
	$d1=$reg["cod_pru"];
	$d2=$reg["texto_pru"];
	$d2=base64_decode($d2);
	echo "<tr><td>$d1</td><td>$d2</td></tr>";
} 
 ?>

</table> 
<!--//$con->query($sql);-->

