<<?php
$user=$_POST["ema"];
$pass=$_POST["pwd"];
$act=0;

$con = new mysqli("10.10.10.199","cachimba","pelicano","ejercicio");
//$sql="SELECT * FROM usuarios WHERE email_usu='$user' AND pass_usu='$pass'";
$sql="SELECT * FROM usuarios WHERE email_usu='$user'";
$m1="email Erroneo";
$m2="password Erroneo ";

$cs=$con->query();
if($reg=$cs->fetch_array())
{
	if($pass==$reg["pws_usu"])
	{
		if($act==0)
		{
			
		}
		
	}
}


























 
//$c=$_GET["c"];
// if($consulta=$con->query($sql))
	// {
		// $passd=$consulta["pass_usu"];
		// if($passd==$pass)
		// {
			// $act=$consulta["activo_usu"];
			// if($act==0){
			// }
		// else
		// {
		// }
		// else{}
		
	// }
	// else{}
	// }	
	
		

//$_SESSION["$cont"] = "1";
// if($reg=$consulta->fetch_array())
// {
	// $codusu=$reg["cod_usu"];
	//arrancamos la session
	// $act=$reg["activo_usu"];
	// if($act==0){
	// session_start();
	//iniciamos la session
	// $_SESSION["pegatina"] = $codusu;
	// $_SESSION["activo"]=$act;
	//	vamos a redirigirlo
	// header("location:acceso.php");
	// }
	// else{
		// echo "fdfds";
	// }
	// }
// }
// else
// {
	
	
	
	
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
		
	//}
	
//}
?>
