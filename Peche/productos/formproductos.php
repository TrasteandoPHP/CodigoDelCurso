<form action="grabaproductos.php" method="POST">
<input type="text" name="nomp" placeholder="Escribe Nombre Producto" maxlength=50 required><br>
<textarea name="desp" placeholder="Escriba algo" ></textarea><br>
<input type="number" name="prec" placeholder="Precio Producto"><br>
<select name="opc">
<?php
$con = new mysqli("10.10.10.108","escuela","1234","tienda");
$sql = "SELECT * FROM categorias ORDER BY nombre_cat ASC";
$consulta = $con->query($sql);
foreach($consulta as $reg)
{
	$ncat=$reg["nombre_cat"];
	$ccat=$reg["codigo_cat"];
	echo "<option value='$ccat'>$ncat</option>";
}
?>
</select>
<input type="submit" value="Graba">

</form>
