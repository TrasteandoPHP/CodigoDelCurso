<?php
//1. Recibir los datos del formulario por post OK
//2. Conectarme a la BD OK
//3. Buscar el email en la tabla administradores OK
//4. Preguntar si existe ese email OK
	// si existe sacamos el pass_
	//comprobamos que el pass del formulario corresponda al pass de la tabla (pass_) con el verify
		//si está bien creamos sesión y redirigimos a private->principal
		//si está mal... pantalla ocurrió un error redirigir a index
	//si no existe pantalla ocurrió un error redirigir a index
//1. 
	$ema = $_POST["email"];
	$pas = $_POST["pass"];
//2. 
	$conexion = new mysqli("localhost","root","","ensal");
//3.
	$sql = "SELECT * FROM administradores WHERE email_adm = '$ema'";
	$ejsql = $conexion->query($sql);
	if($registro = $ejsql->fetch_array())
	{
		//existe
		$pasbd = $registro["pass_adm"];
		if(password_verify($pas, $pasbd))
		{
			//el pass está bien:
			session_start();
			$_SESSION["administrador"] = $registro["cod_adm"];
			 header("location:./private/index.php");
		}
		else
		{
			echo "<script>
				alert('Email o contraseña incorrectos');
				window.location.href='index.html'
			</script>";
		}	
	}
	else
	{
		echo "<script>
				alert('Email o contraseña incorrectos');
				window.location.href='index.html'
			</script>";
	}


?>