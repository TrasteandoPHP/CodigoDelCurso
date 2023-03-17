<?php
//1. recoger los datos dle formulario por post OK
//2. hasheamos el password OK
//3. me conecto OK
//4. sql para grabar OK
//5. ejecuto preguntando
//si bien mensaje a index
//si mal mensaje a index

//1.
	$nom = $_POST["nombre"];
	$ema = $_POST["email"];
	$pas = $_POST["pass"];
	$rol = $_POST["rol"];
//2. 
	$pasencriptada = password_hash($pas, PASSWORD_DEFAULT);
//3. 
	$conexion = new mysqli("localhost", "root", "", "ensal");
//4. 
	$sql = "INSERT INTO administradores (nom_adm, email_adm, pass_adm, rol_adm) VALUES ('$nom','$ema', '$pasencriptada', '$rol')";
//5. 
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



?>