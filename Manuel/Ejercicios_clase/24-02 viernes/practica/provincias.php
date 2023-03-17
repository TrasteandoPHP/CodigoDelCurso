<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<title>Provincias</title>
</head>
<body>
	<select name="provincias" id= "provincia" onchange="cargaconcellos()">
		<option value="AQUI OCULTO">Selecciona provincia</option>
		<?php
		$conexion = new mysqli("localhost","root","","practica");
		$sql = "SELECT * FROM provincias";
		$ej = $conexion->query($sql);
		foreach($ej as $reg)
		{
			$codpro = $reg["cod_pro"];
			$nompro = $reg["nom_pro"];
			echo "<option value='$codpro'>$nompro</option>";
		}

		?>
	</select>

	<select name="concellos" id ="concello" style="display:none">
		
		
	</select>


	<script>
		function cargaconcellos()
		{
			var valor_de_la_provincia;
			valor_de_la_provincia = $("#provincia").val();
			$("#concello").html("");
			if(valor_de_la_provincia != "AQUI OCULTO")
			{
				$("#concello").show();
				
				$.post(
						"./buscaconcello.php",
						{codigodelaprovincia:valor_de_la_provincia},
						function(recojodelphp)
						{
							
							$("#concello").append(recojodelphp);
						}
					);
			}
			else
			{
				$("#concello").hide();
			}	
		}

	</script>
</body>
</html>