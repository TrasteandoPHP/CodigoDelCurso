<?php
	$whatForm = $_GET["whatForm"];
	$operacion = $_GET["operacion"];
	$conjuncion = $_GET["conjuncion"];
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	
		
	switch($whatForm)
	{
		case 1:				
			$resultado = $num1 + $num2;
			//echo "La $operacion de <b>$num1</b> mas <b>$num2</b> es <font color=blue><b>$resultado</b></font><br>";
			break;
			
		case 2:				
			$resultado = $num1 - $num2;
			//echo "La $operacion de <b>$num1</b> menos <b>$num2</b> es <font color=blue><b>$resultado</b></font><br>";
			break;
		
		case 3:				
			$resultado = $num1 * $num2;
			//echo "La $operacion de <b>$num1</b> por <b>$num2</b> es <font color=blue><b>$resultado</b></font><br>";
			break;
			
		case 4:	
			if($num2>0)
			{
				$resultado = $num1 / $num2;
				//echo "La $operacion de <b>$num1</b> entre <b>$num2</b> es <font color=blue><b>$resultado</b></font><br>";
				break;
			}
			else
			{
				$resultado = "<b>No se puede realizar.</b><br>";
			}
	}	
	echo "<br>";
	echo "La $operacion de <b>$num1</b> $conjuncion <b>$num2</b> es <font size=5><b>$resultado</b></font><br>";
	echo "<button onclick='window.location.href=`./index.html`'>Volver</button>";					
?>
