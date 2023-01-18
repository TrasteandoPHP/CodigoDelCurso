<?php
session_start();
if(isset($_SESSION["pegatina"]))
{
		echo "estas dentro";
		echo "<br>";
		$coduser = $_SESSION["pegatina"];
		$hoy = date("Y-m-d");
		$ahora = date("H:i:s");
		$ip = $_SERVER["REMOTE_ADDR"];
		echo $coduser;
		echo $hoy;
		echo $ahora;
		$act=1;
		$con = new mysqli("10.10.10.199","cachimba","pelicano","ejercicio");
		$sql="INSERT INTO accesos (cod_usu, dia_ace, hora_ace, ip_ace) VALUES ('$coduser','$hoy','$ahora', '$ip')";
		$sql1 ="INSERT INTO usuarios (activo_usu) VALUES ($act) WHERE cod_usu='$coduser'";
		$con->query($sql);
		$con->query($sql);
}
else
{
	echo "No tienes permiso para estar aqui";
	header("location:login.html");
}



?>