<?php
$email="pablo";
$conex= new mysqli("10.10.10.199","cachimba","pelicano","ejercicio");
$sql="SELECT * FROM usuarios WHERE email_usu='$email'";
$ejecutar = $conex->query($sql);
$reg = $ejecutar->fetch_array();
//var_dump($reg);
$pass = $reg["pass_usu"];
echo "<br>";
echo "$pass";
echo "<br>";

echo  $reg["pass_usu"];
?>