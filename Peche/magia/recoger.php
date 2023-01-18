<?php
$nom=$_POST["nombre"];
$tel=$_POST["telefono"];
$ser = "localhost";
$usu = "root";
$pwd = "";
$bd= "magia";
$con= new mysqli($ser, $usu, $pwd, $bd);//conexion servidor-usuario-password-basededatos
//creamos una nueva instancia del objeto con parametros para la conexion 
$sql = "INSERT INTO personas (nombre, telefono) VALUES ('$nom','$tel')";//script sql
$con->query($sql); //ejecutar// enviamos como parametros  
echo "El nombre $nom y el telefono $tel se grabaron";
echo "<br>";
echo '<a href="index.html">Volver</a>';

?>