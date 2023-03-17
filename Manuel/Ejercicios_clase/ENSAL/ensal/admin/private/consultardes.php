<?php

	session_start();
	if(isset($_SESSION["administrador"]))
	{
		
		//2 
		$conexion = new mysqli("localhost","root","","ensal");
		$hoy = date("d-m-Y");
		$nombrearchivo = "tabla_$hoy".".xls";
		header("Content-Type: application/vns.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=$nombrearchivo");
		?>
		<html>
		<head>
			<meta charset="utf-8">
			
		</head>
		<body>
			<table border=1>
				<thead>
					<tr style="background-color: red;">
						<th>Fecha</th>
						<th>Hora</th>
						<th>Código alumno</th>
						<th>Nombre alumno</th>
						<th>Tipo Registros</th>
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
							</tr>
							<?php
						}			
					?>
				</tbody>
			</table>
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

