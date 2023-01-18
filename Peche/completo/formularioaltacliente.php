<h1>Formulario Alta Cliente</h1>

 <?php
 if(isset($_POST["BOTON"]))
 {
 $asdsad = $_POST["nomc"];
 echo $asdsad;
 }
 else
 {
//		no hace nada
	 }	
?>
<button onclick="window.location.href='index.html'">Inicio</button>
<button onclick="window.location.href='formularioaltaprovincia.html'">Alta Provincia</button>
<button onclick="window.location.href='formularioaltasexo.html'">Alta Sexo</button>
<button onclick="window.location.href='formularioaltacliente.php'">Alta Cliente</button>

<hr>
<table border=0>
<!--<form action="grabacliente.php" method="POST">-->
<form action="fcliente.php" method="POST">
<tr><td>Nombre</td><td><input type="text" name="nomc" placeholder="Nombre de Cliente"></td></tr>
<tr><td>Password</td><td><input type="password" name="passc" placeholder="Contraseña"></td></tr>
<tr><td>Email</td><td><input type="email" name="emac" placeholder="Escribe tu email"></td></tr>
<tr><td>Telefono</td><td><input type="number" name="telc" placeholder="Escribe Telefono"></td></tr>

<tr><td>Provincia</td><td>
<select name="provincia">

<?php

$con = new mysqli("localhost","root","","lunes5");
$sql = "SELECT * FROM provincias";
$ejecutar =  $con->query($sql);
foreach($ejecutar as $reg)
{
	$codp= $reg["codigo_pro"];
	$nomp= $reg["nombre_pro"];
	echo "<option value='$codp'>$nomp</option>";
}


?>
</td>
</tr>
</select>
<tr><td>Sexo</td><td>
<select name="sexo">


<?php
$sql= "SELECT * FROM sexo";
$ejecutar =  $con->query($sql);
foreach($ejecutar as $reg)
{
	$cods= $reg["codigo_sex"];
	$noms= $reg["nombre_sex"];
	echo "<option value='$cods'>$noms</option>";
}

echo "<tr><td></td><td><input type='submit' value='Grabar' name='BOTON'></td></tr>";
//grabar datos
// $nc=$_POST["nomc"];
// $pc=$_POST["passc"];
// $ec=$_POST["emac"];
// $tc=$_POST["telc"];
//$cp=$_POST[""];
//$cs=$_POST[""];
// $sql2 = "INSERT INTO cliente (nombre_cli, pass_cli, email_cli, tlf_cli, codigo_pro, codigo_sex) VALUES ('$nc','$pc','$ec','$tc','$codp','$cods')";

// if($con->query($sql2))
// {
	// echo "Se grabo ";
// }
// else
// {
	// echo "No se Grabo";
// }
// ?>
</td>
</tr>

</select>
</form>
</table>