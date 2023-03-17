<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.rojo{
			color: red;
		}
		.green{
			color: green;
		}
	</style>
</head>
<body>

<?php

	include("fn.php");
	pinta_input("text","nombre","Escribe Nombre", "", "rojo","");
	pinta_input("password","pass","Escribe contraseña", "", "green","");
	pinta_input("date","fecha","Escribe fecha", "", "rojo","");
	pinta_input("radio","sexo","Masculino", "", "rojo","");
	pinta_input("checkbox","sexo","Cine", "", "green","");
	pinta_input("submit","boton","", "Enviar respuesta", "green","");


?>