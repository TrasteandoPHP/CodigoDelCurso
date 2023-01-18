<?php
$a=$_POST["a1"];
$b=$_POST["a2"];
$serv="localhost";
$usu="root";
$pwd="";
$db="prueba";
$con = new mysqli($serv,$usu,$pwd,$db);
	for($i=0;$i<=10;$i++)
	{
	$a=$a.$i;
	$b=$b.$i;
	$sql = "INSERT INTO cliente (nomclie, apeclie) VALUES('$a','$b')";
	$con->query($sql);
	}
echo "$a<br>";
echo $b;
?>