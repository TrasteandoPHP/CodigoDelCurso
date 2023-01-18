<?php
$conex=new mysqli("localhost","root","","ejercicio");
$sql = "SELECT * FROM alumnos";
$consulta = $conex->query($sql);
?>