<?php
$user=$_POST["ema"];
$pass=$_POST["pwd"];
$con = new mysqli("10.10.10.199","cachimba","pelicano","ejercicio");
$sql="SELECT * FROM usuarios WHERE email_usu='$user' AND pass_usu='$pass'";
$cont=0;
//$c=$_GET["c"];
$consulta=$con->query($sql);
$cont=0;


//$_SESSION["$cont"] = "1";
if($reg=$consulta->fetch_array())
{
	$codusu=$reg["cod_usu"];
	//arrancamos la session
	session_start();
	//iniciamos la session
	$_SESSION["pegatina"] = $codusu;
		//vamos a redirigirlo
	header("location:indexprivado.php");
	
}
else
{
	//echo $cont;
	//$cont++;
	// if($cont==3)
	// {
		// echo "Se intento muchas veces";
	// }
	// else
	// {
		// session_start();
	//iniciamos la session
			// echo $cont;
	// echo "USUARIO O CONTRASEÑA ERRONEO VUELVA INTENTARLO";
	// header("location:login.html?c=$cont");
		
	}
	
//}
?>
