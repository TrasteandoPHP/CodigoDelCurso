<?php
$cod=$_GET["codigo"];
$con = new mysqli("10.10.10.106","clase","1234","jueves22");
$sql="SELECT * FROM alumnos WHERE cod_alu='$cod'";
$ejec=$con->query($sql);
$reg=$ejec->fetch_array();

$nom = $reg["nom_alu"];
$ema = $reg["email_alu"];
$pas = $reg["pass_alu"];

echo "
<form action='modifica.php' method='POST'>
<input type='text' name='nombre' placeholder='Nombre Alumno' value='$nom'>
<input type='text' name='email' placeholder='Email Alumno' value='$ema'>
<input type='text' name='password' placeholder='Password Alumno' value='$pas'>
<input type='hidden' name='codigo' value='$cod'>
<input type='submit' value='Modificar'>

";

echo "<a href='index.php'>Volver</a>";
if(isset($_GET["comprueba"]))
{
	echo "<button onclick='window.location.href=`index.php1`'>Volver</button>";
}
?>