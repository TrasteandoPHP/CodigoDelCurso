<?php
	$email = $_POST["email"];
	$password = $_POST["password"];
		
	$conexion = new mysqli("10.10.10.199","cachimba","pelicano","ejercicio");					
					$sqlConsultaLogin = "SELECT * FROM usuarios WHERE email_usu='$email'";
					$ejecutarConsulta = $conexion->query($sqlConsultaLogin);
					
	if($registro = $ejecutarConsulta->fetch_array())
		{
			// Si ese registro existe
			$passwordUsuario = $registro["pass_usu"];
			
			// Comprobamos password	
			if ($passwordUsuario==$password)
			{
				$usuarioActivo = $registro["activo_usu"];
				if ($usuarioActivo==0)
				{
					// Arrancamos la sesión			
					session_start();
					$codigoUsuario = $registro["cod_usu"];
					$_SESSION["pegatina"]=$codigoUsuario;
						
					// Redirigimos a página privada
					header("location:indexPrivadoUserActivo.php");
				}
				else
				{
					echo "Tu cuenta no está activa...";
				}
			}
			else
			{
				echo "El password es incorrecto...";
			}
		}
	else
		{
			echo "No existe un usuario registrado con ese Email...";
		}
	
	echo "<br><br><button onclick='window.location.href=`./loginUserActivo.html`'>Volver</button>";					
?>