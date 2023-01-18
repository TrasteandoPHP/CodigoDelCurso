<?php
$nom = $_POST["nombre"];
$ema = $_POST["email"];
$pas = $_POST["password"];
$cod = $_POST["codigo"];
$con=new mysqli("10.10.10.106","clase","1234","jueves22");
$sql = "UPDATE alumnos SET nom_alu='$nom',email_alu='$ema',pass_alu='$pas' WHERE cod_alu='$cod'";
if($con->query($sql))
{
	echo "Actualizado bien";
	echo "<a href='formmodi.php?codigo=$cod&comprueba=0'>Volver</a>";
}
else
{
	echo "No Actualizado";
	echo "<a href='index.php'>Volver</a>";
}
?>