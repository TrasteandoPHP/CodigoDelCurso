<?php
function fronteo($n1, $n2)
{
	$suma = $n1 + $n2;
	return $suma;
}
function grabar($tabla, $campos, $valores)
{
	$con = new mysqli("","","","");
	$sql="INSERT INTO $tabla ($campo) VALUES ($valores)";
	return $con->query($sql);
}


?>