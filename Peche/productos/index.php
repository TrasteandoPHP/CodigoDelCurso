<form action="verdescri.php" method="POST">
<select name="opc">
<?php
$con = new mysqli("10.10.10.108","escuela","1234","tienda");
$sql1 = "SELECT * FROM categorias ORDER BY nombre_cat";
//$sql2 = "SELECT * FROM productos ORDER BY nombre_pro";
$consulta1 = $con->query($sql1);
foreach($consulta1 as $reg){
	$nomcat=$reg["nombre_cat"];
	$codcat=$reg["codigo_cat"];
	echo "<option value='$codcat'>$nomcat</option>";
	}	
?>
</select>
<input type="submit" value="filtrar">
</form>
<hr>
<table border=1>
<tr>
<td>Nombre</td><td>Precio</td><td>Accion</td>
</tr>
<!--<form action="verdescrip.php" method="POST">-->
<?php
//$con = new mysqli("localhost","root","","tienda");
$sql = "SELECT * FROM productos ORDER BY nombre_pro DESC";
$consulta = $con->query($sql);
foreach($consulta as $reg)
{
	$nom=$reg["nombre_pro"];
	$pre=$reg["precio_pro"];
	//$desc=$reg["descripcion_pro"];
	//$codp=$reg["codigo_cat"];
	$codp=$reg["codigo_pro"];
echo "<tr><td>$nom</td><td>$pre</td><td><button onclick='window.location.href=`detalleproducto.php?mochila=$codp`'>Ver</button></td></tr>";
//echo "<br><button onclick='window.location.href=`formulariocategoria.html`'>Volver</button>";
//echo "<tr><td>$nom</td><td>$pre</td> <td><input type='submit' value='Ver'></td></tr>";
}
?>
<!--</form>-->
</table>



