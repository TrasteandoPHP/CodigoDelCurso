<form action="" method="">
<input type="text" name="" placeholder="sds">
<select>
<?php
$con = new mysqli("localhost","root","","rompecabezas");
$sql= "SELECT * FROM provincias";
$ejecutar = $con->query($sql);
	foreach($ejecutar as $registro)
	{
		$cod = $registro["codigo"];
		$nom = $registro["nombre"];
		echo "<option value='$cod'>$nom</option>";
	}
?>
</select>


</form>