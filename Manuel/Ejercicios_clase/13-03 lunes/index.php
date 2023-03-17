<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Selecciona meses</h1>
	<label>Desde</label>
	<select>
		<option>Desde...</option>
		<?php
			//yo quiero saber en que mes estoy
			$mes = date("m");
			$ano = date("Y");
			for($i = 1; $i<=$mes; $i++)
			{
				switch($i)
				{
					case 1:
							$mesmostrar = "ENERO";
							$valordesde = $ano."-".$i."-01";
							break;
					case 2:
							$mesmostrar = "FEBRERO";
							$valordesde = $ano."-".$i."-01";
							break;	
					case 3:
							$mesmostrar = "MARZO";
							$valordesde = $ano."-".$i."-01";
							break;			
					case 4:
							$mesmostrar = "ABRIL";
							$valordesde = $ano."-".$i."-01";
							break;
					case 5:
							$mesmostrar = "MAYO";
							$valordesde = $ano."-".$i."-01";
							break;
					case 6:
							$mesmostrar = "JUNIO";
							$valordesde = $ano."-".$i."-01";
							break;						
					case 7:
							$mesmostrar = "JULIO";
							$valordesde = $ano."-".$i."-01";
							break;
					case 8:
							$mesmostrar = "AGOSTO";
							$valordesde = $ano."-".$i."-01";
							break;
					case 9:
							$mesmostrar = "SEPTIEMBRE";
							$valordesde = $ano."-".$i."-01";
							break;
					case 10:
							$mesmostrar = "OCTUBRE";
							$valordesde = $ano."-".$i."-01";
							break;
					case 11:
							$mesmostrar = "NOVIEMBRE";
							$valordesde = $ano."-".$i."-01";
							break;
					case 12:
							$mesmostrar = "DICIEMBRE";
							$valordesde = $ano."-".$i."-01";
							break;		
				}
				echo "<option value='$valordesde'>$mesmostrar</option>";
			}
		?>
	</select>
	<br>
	<label for="hasta">Hasta</label>
	<select name="hasta">
		<option>Hasta...</option>
			<?php
				for($i=1; $i<=$mes;$i++)
				{
					switch($i)
					{
						case 1: 
								$mesmuestra = "ENERO";
								$valorhasta = $ano."-".$i."-31";
								break;
						case 2: 
								$mesmuestra = "FEBRERO";
								$valorhasta = $ano."-".$i."-28";
								break;	
						case 3: 
								$mesmuestra = "MARZO";
								$valorhasta = $ano."-".$i."-31";
								break;
						case 4: 
								$mesmuestra = "ABRIL";
								$valorhasta = $ano."-".$i."-30";
								break;					
						case 5: 
								$mesmuestra = "MAYO";
								$valorhasta = $ano."-".$i."-31";
								break;			
						case 6: 
								$mesmuestra = "JUNIO";
								$valorhasta = $ano."-".$i."-30";
								break;
						case 7: 
								$mesmuestra = "JULIO";
								$valorhasta = $ano."-".$i."-31";
								break;
						case 8: 
								$mesmuestra = "AGOSTO";
								$valorhasta = $ano."-".$i."-31";
								break;
						case 9: 
								$mesmuestra = "SEPTIEMBRE";
								$valorhasta = $ano."-".$i."-30";
								break;
						case 10: 
								$mesmuestra = "OCUTBRE";
								$valorhasta = $ano."-".$i."-31";
								break;
						case 11: 
								$mesmuestra = "NOVIEMBRE";
								$valorhasta = $ano."-".$i."-30";
								break;
						case 12: 
								$mesmuestra = "DICIEMBRE";
								$valorhasta = $ano."-".$i."-31";
								break;					
					}
					echo "<option value='$valorhasta'>$mesmuestra</option>";
				}	
			?>	
	</select>
</body>
</html>