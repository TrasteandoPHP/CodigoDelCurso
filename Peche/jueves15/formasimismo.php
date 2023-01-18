<form action="formasimismo.php" method="POST">
<input type="text" name="nombre" placeholder="NOMBRE">
<input type="text" name="apellido" placeholder="APELLIDO">
<input type="submit" name="boton" value="Enviar"> 
</form>
<?php
if(isset($_POST["boton"]))
{
	echo $_POST["nombre"];
	echo "<br>";
	echo $_POST["apellido"];
}
else
{
	//echo "no";
}


?>