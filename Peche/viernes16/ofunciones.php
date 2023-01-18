<?php
function operar($n1,$n2)
{
  $suma = $n1 + $n2;
}
function mensaje()
{
	echo "Este es el resultado";
}
function pinta_boton($enlace,$texto)
{
	echo "<button onclick='window.location.href=`$enlace`'>$texto</button>";
}
// function consultar($tabla, $condicion)
// {
	// $sql = "SELECT * FROM $tabla $condicion";
	// $ejecutar = $conexion->query($sql);
	// foreach($ejecutar as $registro)
	// {
		// $nom = $registro["nombre"];
		// echo "$nom <br>";
	// }
// }

?>