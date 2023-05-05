<?php

	$ema = $_POST['email'];
	$pass = $_POST['pass'];
	
	$conexion = new mysqli("db5012901176.hosting-data.io", "dbu3726201", "PpJ_mP5WdLp!3mPpDb2i@bookaab", "dbs10835059");
	$sql = "SELECT * FROM usuarios WHERE email_usu = '$ema'";

	$ejecutar = $conexion->query($sql);

	if($registro = $ejecutar->fetch_array()) 
	{
		$pasbd = $registro["pass_usu"];
		if(password_verify($pass, $pasbd))
		{
			//Tiene contraseña correcta
			$activo = $registro["activo_usu"];
			if ($activo== 1)
			{

				session_start();

				$codusu = $registro["cod_usu"];
				$_SESSION["bookbusters"]= $codusu;
				header("location:./privado/index.php");
				
			}
			else
			{
				?>
				<script>

				alert("usuario no activo");
				window.location.href='login.html';	
				</script>

				<?php
			}

		}
		else
		{
			?>

				<script>
					alert("usuario o contraseña errónea");
					window.location.href='login.html';
						
				</script>	

				<?php
			

		}
	}
	else
	{
		?>
		<script>
			alert("usuario o contraseña errónea");
			window.location.href='login.html';			
		</script>	

		<?php
		
	}
	$conexion->close();


?>