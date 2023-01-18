<table border=1>
<tr>
<td>Codigo</td><td>Nombre</td><td>Descripcion</td><td>Precio</td><td>Codigo Categoria</td>
</tr>
<?php
$var = $_GET["mochila"];
$con = new mysqli("localhost","root","","tienda");
$sql = "SELECT * FROM productos WHERE codigo_pro='$var'";
$consulta = $con->query($sql);
$reg = $consulta->fetch_array();
// foreach($consulta as $reg)
// {
	 $nom=$reg["nombre_pro"];
	 $pre=$reg["precio_pro"];
	 $desc=$reg["descripcion_pro"];
	 $codc=$reg["codigo_cat"];
	 $codp=$reg["codigo_pro"];
//	 echo "<tr><td>$nom</td><td>$pre</td><td>$desc</td><td><$codc/td><td>$codp</td></tr>";

// }
$sqlcat = "SELECT * FROM categorias WHERE codigo_cat = '$codc'";
$ejecutar = $con->query($sqlcat);
$regcat = $ejecutar->fetch_array();
$nombrecat = $regcat["nombre_cat"];
echo 




?>
</table>