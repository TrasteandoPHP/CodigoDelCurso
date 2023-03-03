<?php
	$nom =$_POST["nombre"];
	$ape =$_POST["email"];
	
	$conexion = new mysqli("localhost","manuel","1234","manuelcp"); 
	$sql ="INSERT INTO personas(nom_per,email_per) VALUES ('$nom','$ape')";
	$conexion->query($sql);	
?>		

