<?php
	session_start();
	if(isset($_SESSION['bookbusters']))
	{
		if(isset($_POST["contrasena"]))
		 {
			 $con=$_POST["contrasena"];
			 $hash= password_hash($con, PASSWORD_DEFAULT);

			$codusuario = $_SESSION['bookbusters'];

			$conexion = new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");

			$sql= "UPDATE usuarios SET pass_usu ='$hash' WHERE cod_usu='$codusuario'";
			if($conexion->query($sql))
			{
			
				header("Location:./contracambiada.php");
			
			}
			else
			{
				echo"Ha ocurrido un error";
			}
		}	
		else
		{
			header("Location:./perfil.php");
		}	

	}
	

?>

