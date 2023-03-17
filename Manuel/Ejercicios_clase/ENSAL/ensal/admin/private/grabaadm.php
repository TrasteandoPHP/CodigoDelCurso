<?php

session_start();
	if(isset($_SESSION["administrador"]))
	{


	$nom = $_POST["nombre"];
	$ema = $_POST["email"];
	$pas = $_POST["pass"];
	$rol = $_POST["rol"];

	$pasencriptada = password_hash($pas, PASSWORD_DEFAULT);

	$conexion = new mysqli("localhost", "root", "", "ensal");

		


	$sql = "INSERT INTO administradores (nom_adm, email_adm, pass_adm, rol_adm) VALUES ('$nom','$ema', '$pasencriptada', '$rol')";

	if($conexion->query($sql))
	{
		//grabó
		echo "<script>
			alert('Administrador registrado');
			window.location.href='index.html';
		</script>";
	}
	else	
	{
		//no grabó
		echo "<script>
			alert('Ocurrió un error');
			window.location.href='index.html';
		</script>";
	}	

}
else
{
		////////////AQUÍ ESTÁN LOS QUE NO ENTRAN DESDE LOGIN
		header("location:./../index.html");
}	

?>