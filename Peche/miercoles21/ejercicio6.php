<?php
if(isset($_POST["envio"]))
{
$nom=$_POST["nom"];
$con=new mysqli("10.10.10.106","clase","1234","jueves22");
$sqlc="SHOW COLUMNS FROM materias";
$ejec=$con->query($sqlc);
$var="";
foreach($ejec as $consulta)
{
	$var.=$consulta["Field"].",";
}
$var=trim($var);
$var=substr($var,0,-1);
echo $var;
$sql1="INSERT INTO materias ($var) VALUES (NULL,'$nom')";
$ejecutar= $con->query($sql1);
}
else
{
	?>
	<form action ="ejercicio6.php" method="POST">
   <input type="text" name="nom">
	<input type="submit" name="envio" value="Enviar">
	</form>
	
	
	
	
	
	<?php
	}

?>