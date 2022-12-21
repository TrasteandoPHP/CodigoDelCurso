<?php
	$email = $_POST["email"];
	$password = $_POST["password"];
	//$nombre = "Toñito";
	
	$conexion = new mysqli("10.10.10.199","cachimba","pelicano","ejercicio");					
					$sqlConsultaLogin = "SELECT * FROM usuarios WHERE email_usu='$email' AND pass_usu='$password'";
					$ejecutarConsulta = $conexion->query($sqlConsultaLogin);
					
	if($registro = $ejecutarConsulta->fetch_array())
		{
			// Si ese registro existe
			$codigoUsuario = $registro["cod_usu"];			
			// var_dump($registro);			
			// Arrancamos la sesión
			//session_name("Prueba");
			session_start();
			
			$_SESSION["pegatina"]= $codigoUsuario;
			
			
			// Redirigimos a página privada
			header("location:indexPrivado.php");
		}
		else
		{
			echo "Email o password incorretos. Vuelva a intentarlo...";
			//$sqlRegistroLogin = "INSERT INTO usuarios(nom_usu, email_usu, pass_usu) VALUES ('$nombre','$email', '$password')";
			//$conexion->query($sqlRegistroLogin);
			//$sqlBorrarRegistro = "DELETE FROM usuarios WHERE cod_usu='7'";
			//$conexion->query($sqlBorrarRegistro);
		}
	
	echo "<br><br><button onclick='window.location.href=`./login.html`'>Volver</button>";					
?>