<?php

	session_start();
	if(isset($_SESSION["administrador"]))
	{
		//////////ESTO ES LO QUE VEN LOS QUE ENTRAN DESDE LOGIN

		//para sacar el nombre:
		//1. sacar el codigo de la session OK
		//2. Conectarme a la bd OK
		//3. sql para buscar el adm por código OK
		//4. ejecutar y fetch array sacando el nom_adm OK

		//1
		$codadm = $_SESSION["administrador"];
		//2 
		$conexion = new mysqli("localhost","root","","ensal");
		//3
		$sqladm = "SELECT * FROM administradores WHERE cod_adm='$codadm'";
		//4
		$ejadm = $conexion->query($sqladm);
		$regadm = $ejadm->fetch_array();
		$nomadm = $regadm["nom_adm"];
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Administrador <?php echo $nomadm; ?></title>
		</head>
		<body>
			<button onclick="window.location.href='./index.php'">Inicio</button>
			<button onclick="window.location.href='./altaalumnos.php'">Alta alumnos</button>
			<button onclick="window.location.href='consultar.php'">Consultar</button>
			<button onclick="window.location.href='altaadm.php'">Alta ADM</button>
			<button onclick="window.location.href='salir.php'">Salir</button>
			<b><?php echo $nomadm; ?></b>
			<hr>
			<h1>Alta administrador</h1>
	<form action="grabaadm.php" method="POST">
		<input type="text" name="nombre" placeholder="Nombre" maxlength="50" required>
		<br>
		<input type="email" name="email" placeholder="Email" maxlength="100" required>
		<br>
		<input type="password" name="pass" placeholder="Password" maxlength="100" required>
		<br>
		<select name="rol" required>
			<option value="">Selecciona rol</option>
			<option value="1">Todo</option>
			<option value="2">Altas</option>
			<option value="3">Consultar</option>
		</select>
		<input type="submit" value="Grabar">
	</form>

		</body>
		</html>

	<?php	
	}
	else
	{
		////////////AQUÍ ESTÁN LOS QUE NO ENTRAN DESDE LOGIN
		header("location:./../index.html");
	}	

?>