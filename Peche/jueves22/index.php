<table border=1>
<tr>
<td colspan=3><b>Alumnos</b></td>
</tr>
<tr>
	<td>Nombre</td>
	<td>Email</td>
	<td>Accion</td>
<?php
$con = new mysqli("10.10.10.106","clase","1234","jueves22");
$sql="SELECT * FROM alumnos";
$ejec=$con->query($sql);
foreach($ejec as $reg)
{
	$cod = $reg["cod_alu"];
	$nom = $reg["nom_alu"];
	$ema = $reg["email_alu"];
	$cadena=$cod.",".$nom.",".$ema;
	echo "<tr>
	<td>$nom</td>
	<td>$ema</td>
	<td><a href='formmodi.php?codigo=$cod'>IR</a></td>
	
	
	</tr>";
}
?>

</table>