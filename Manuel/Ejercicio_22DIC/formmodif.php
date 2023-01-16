<?php
echo "<br><hr>";
$cod = $_GET["codigo"];
$nom = $_GET["nombre"];
//$bot = $_GET["boton"];
echo "<h3>Capturando datos de $nom</h3>";
echo "<hr>";

$conexion = new mysqli("10.10.10.106","clase","1234","jueves22");
$sqlConsulta = "SELECT * FROM alumnos WHERE cod_alu='$cod'";
$ejecutarConsulta = $conexion->query($sqlConsulta);

$registro = $ejecutarConsulta->fetch_array();
var_dump($registro);
echo "<hr><br>";

$nom = $registro["nom_alu"];
$ema = $registro["email_alu"];
$pas = $registro["pass_alu"];

echo "
	<form action='modifica.php' method='POST'>
		<input type='hidden' name='codigo' value='$cod'>
		<input type='text' name='nombre' placeholder='Introduce nombre de alumno.....' value='$nom' size='25' required>
		<input type='text' name='email' placeholder='Introduce email de alumno.....' value='$ema' size='25' required>
		<input type='text' name='password' placeholder='Introduce password de alumno.....' value='$pas' size='20' required>
		<input type='submit' value='Modificar'>
	</form>	
";
echo "<br><hr>";

if(isset($_GET["boton"])){
	echo "<br><button onclick='window.location.href=`index.php`'>Volver a Index</button>";	
}
?>