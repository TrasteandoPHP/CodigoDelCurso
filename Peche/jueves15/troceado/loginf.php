<form action='loginf.php' method='POST'>
<input type='text' name='ema' placeholder='Escriba el nombre de USUARIO'>
<input type='text' name='pwd' placeholder='Escriba la contraseña'>
<input type='hidden' name='opt' value='0'> 
<input type='submit' name='login' value='    LOGEAR    '>
</form>
<?php


if(isset($_POST['login']))
{
$opt = $_POST["opt"];	
$ema = $_POST["ema"];
$pwd = $_POST["pwd"];
//echo $opt;
$con = new mysqli("10.10.10.199","cachimba","pelicano","ejercicio");
$sql = "SELECT * FROM usuarios WHERE email_usu='$ema'";
$consulta = $con->query($sql); 
	if($reg=$consulta->fetch_array())
	{
		if($reg["pass_usu"]==$pwd)
		{
			echo "BIENVENIDO";
			}
		else{echo "PASSWORD ERRONEO";
			
		}
	}
	else{echo "EMAIL ERRONEO";
		
	}
}
else
{
	
}

?>

