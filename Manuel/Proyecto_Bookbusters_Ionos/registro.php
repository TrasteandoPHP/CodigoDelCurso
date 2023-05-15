<?php

	$nom = ucfirst($_POST["nombre"]);
	$ap1 = ucfirst($_POST["ap1"]);
	$ap2 = ucfirst($_POST["ap2"]);
	$ema=$_POST["email"];
	$emacod = base64_encode($_POST["email"]);
	$pass = $_POST["pass"];
	$activo = 0;
	$imagen ="avatares/Bookbusterspre.png";
	$falta = date("Y-m-d");

$pass = password_hash($pass, PASSWORD_DEFAULT);

$conexion = new mysqli("db5012901176.hosting-data.io", "dbu3726201", "PpJ_mP5WdLp!3mPpDb2i@bookaab", "dbs10835059");
$consulta = "SELECT * FROM usuarios WHERE email_usu='$ema'";

$ejcon = $conexion->query($consulta);

if ($ejcon->fetch_array())
{
	//Este usuario existe
	header("location:errormail.html");
}
else
{
	//Este usuario no existe
	$sql = "INSERT INTO usuarios(nom_usu, ap1_usu, ap2_usu, email_usu, pass_usu, activo_usu, img_usu, falta_usu) VALUES ('$nom', '$ap1', '$ap2', '$ema', '$pass', '$activo', '$imagen', '$falta')";
	$conexion->query($sql);

	$para = "$ema";
	$asunto = "Active su cuenta de Bookbusters";
	$mensaje = '
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>EMAIL</title>
		<script src="https://kit.fontawesome.com/7b8eabe9ec.js" crossorigin="anonymous"></script>
		<style>
	
	@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,600,400italic,600italic|Roboto+Slab:400,700");
		body{
			color: #7f888f;
	font-family: "Open Sans", sans-serif;
	font-size: 13pt;
	font-weight: 400;
	line-height: 1.65;
		}
		a{
			text-decoration:none;
			color:#ff39ba;
		}
		a:hover{
			color:#ff39bb;
		}
		hr{
			border:none;
		}
		</style>
	</head>
	<body>
	
		<div style="float:left; width:90%; margin-left:5%">
	
		
		<div style="float:left; width:50%">
		<a href="https://bookbusters.es/index.php" style="width: 15%; margin-top: 2%;"><img src="https://bookbusters.es/images/logo.png"></a>
		</div>    
		
		<div style="float:left; width:50%">
		<a style="font-size:large; text-align:right; margin-top: 2%; float: right;color:#ff39ba; text-decoration: none;" href="https://bookbusters.es/index.php" class="fa fa-home" aria-hidden="true"></a>
		</div>        
		<div style="float:left; width:100%">
			<hr style="background-color:#ff39ba; height:4px">
	
	
			<center>
			<h1>Hola '.$nombre.', bienvenido a Bookbusters</h1>
			</center>
	
			<br>
							
			<p style="float:left; margin-left: 1%;">para activar su cuenta, pinche en el siguiente enlace:</p>
			<br>
			<br>
			<br>
	
	
			<a href="https://bookbusters.es/activacion.php?envio='.$emacod.'">Active su cuenta</a>
			
			<br>
			<br>
	
	
			
				<img style="margin-left:42.5%; width:15%;"  src="https://bookbusters.es/images/Bookbusterspre.png" alt="" />
		</div>
	
		<h4 style="margin-left: 1%;">Nota: Este mail ha sido generado automáticamente desde bookbusters.es</h4>
	
		</div>
	
	</body>
	</html>';


	
	// "<h1>Activación de cuenta</h1>
	// 		<br>
    //         <img src='https://bookbusters.es/images/Bookbusters (3).png'>
    //         <br>
    //         <p>Para activar su cuenta pinche el siguiente enlace</p>
    //         <br>
    //         <a href='https://bookbusters.es/activacion.php?mail=$emacod'>Active su cuenta</a>
			// ';

	$header = "MIME-Version: 1.0 \r\n";
	$header .= "Content-type:text/html;charset=UTF-8 \r\n";
	$header .= "From: administracion@bookbusters.es";
	mail($para, $asunto, $mensaje, $header);

    // header ("location:https://bookbusters.es/activacion.php");
	header ("location:registrado.html");


}
$conexion->close();

?>