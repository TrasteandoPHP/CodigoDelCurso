<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<title>Formulario</title>
</head>
<body>

	<div style="float:left;width:70%;margin-left: 15%;">
		<form action="graba.php" method="POST">
			<input type="text" name="nombre" placeholder="Nombre" style="width:100%;margin-top: 2%;">
			<input type="text" name="email" placeholder="Email" style="width: 100%;margin-top: 2%;">
			<input type="text" name="pass" placeholder="Password" style="width: 100%;margin-top: 2%;">
			<select name="pais" style="width:100%;margin-top: 2%;" id="meseleccionanpais" onchange="sacarprefijo()">


				<option>Selecciona País</option>
				<?php
					$conexion = new mysqli("localhost","root","","practica");
					$sql ="SELECT * FROM paises ORDER BY nom_pai ASC";
					$ej = $conexion->query($sql);
					foreach($ej as $reg)
					{
						$codpai = $reg["cod_pai"];
						$nompai = $reg["nom_pai"];
						$prepai = $reg["pre_pai"];
						echo "<option value='$prepai'>$nompai</option>";
					}

				?>
			</select>
			<input type="text" name="prefijo" placeholder="+00" style="width: 19%;margin-top: 2%; background-color: cyan;" id="aquipintoelprefijo" readonly>
			<input type="text" name="telefono" placeholder="Teléfono sin prefijo" style="width: 79%;margin-top: 2%;">
			<input type="submit" value="Grabar" style="width:100%;margin-top: 2%;">
		</form>
	</div>
	<script>
		function sacarprefijo()
		{
			var prefijo;
			prefijo = $("#meseleccionanpais").val();
			$("#aquipintoelprefijo").val(prefijo);
		}
	</script>
</body>
</html>