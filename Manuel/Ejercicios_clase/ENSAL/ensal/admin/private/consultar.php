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
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.4.0/jquery.quicksearch.js" integrity="sha512-U+KdQxKTQfGIQJBs2QyDiU3PxJoSu+ffUJV5AAuMmwSFs1CjBz5Xk3/qWrT0mBHOM/C15q3DMko6HJL+37MYNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		</head>
		<body>
			<button onclick="window.location.href='./index.php'">Inicio</button>
			<button onclick="window.location.href='./altaalumnos.php'">Alta alumnos</button>
			<button onclick="window.location.href='consultar.php'">Consultar</button>
			<button onclick="window.location.href='altaadm.php'">Alta ADM</button>
			<button onclick="window.location.href='salir.php'">Salir</button>
			<b><?php echo $nomadm; ?></b>
			<hr>
			<h1>Consultar entradas y salidas</h1>
			<input id="buscar" type="text" placeholder="buscar..." onkeyup="filtrar()">
			<br>
			<a href="./consultardes.php">Descargar</a>
			<table border=1>
				<thead>
					<tr>
						<th>Fecha</th>
						<th>Hora</th>
						<th>Código alumno</th>
						<th>Nombre alumno</th>
						<th>Tipo Registros</th>
						<th style="display:none">dni</th>
					</tr>	
				</thead>
				<tbody>
					<?php
						$sqlreg = "SELECT * FROM registros 
									INNER JOIN alumnos USING(cod_alu)";
						$ejreg = $conexion->query($sqlreg);
						foreach($ejreg as $registroreg)
						{
							$fecha = $registroreg["fecha_reg"];
							$hora = $registroreg["hora_reg"];
							$tipo = $registroreg["tipo_reg"];
							$codalu = $registroreg["cod_alu"];
							$nomalu = $registroreg["nom_alu"];
							$dni = $registroreg["dni_alu"];
							?>
							<tr>
								<td><?php echo $fecha;?></td>
								<td><?php echo $hora;?></td>
								<td><?php echo $codalu;?></td>
								<td><?php echo $nomalu;?></td>
								<td><?php echo $tipo;?></td>
								<td style="display:none"><?php echo $dni;?></td>
							</tr>
							<?php
						}			
					?>
				</tbody>
			</table>

			

		<script>
			function filtrar()
			{
				$("#buscar").quicksearch("table tbody tr");
			}


		</script>
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

