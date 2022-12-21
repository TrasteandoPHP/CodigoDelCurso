<html>
	<head>
		<meta charset="UTF-8">
		<title>Preparar SQL</title>
	</head>
	<body>
		<?php
			// Preparar SQL con arrays
			echo "<b>Preparar SQL</b><br>";
			echo "------------------<br><br>";
			$array1 = array("nom_alu","ape_alu","tlf_alu","dir_alu","cp_alu","sex_alu");
			$array2 = array("nom_pro","des_pro","precio_pro");
			
			$var_array1="";
			$var_array2="";			
			
			foreach($array1 as $a1)
			{
				$var_array1.= "$a1, ";
			}
			echo "$var_array1<br><br>";
			$var_array1_SinFinal = substr($var_array1,0,-2);
			echo "<b>$var_array1_SinFinal</b><br><br>";			

			echo "------------------------------------------------------------<br><br>";

			foreach($array2 as $a1)
			{
				$var_array2.= "$a1, ";
			}
			echo "$var_array2<br><br>";	
			$var_array2_SinFinal = substr($var_array2,0,-2);
			echo "<b>$var_array2_SinFinal</b><br><br>";	
			$sqlGrabacion = "INSERT INTO tabla ($var_array1_SinFinal)";	

			echo "------------------------------------------------------------<br><br>";	

			$arrayD1 = array("Alfonso","Carro","981667788","Cambre","15679","Hombre");	
			$arrayD2 = array("Boligrafo","boligrafo Bic","1€");

			$var_arrayD1="";
			$var_arrayD2="";
			foreach($arrayD1 as $D1)
			{
				$var_arrayD1.="'$D1', ";
			}
			$var_arrayD1_SinFinal = substr($var_arrayD1,0,-2);
			
			$sqlGrabacion1 = "<b>INSERT INTO tabla ($var_array1_SinFinal) VALUES ($var_arrayD1_SinFinal)</b>";	
			echo $sqlGrabacion1;
			
			echo "<br><br>";
			
			foreach($arrayD2 as $D2)
			{
				$var_arrayD2.="'$D2', ";
			}
			$var_arrayD2_SinFinal = substr($var_arrayD2,0,-2);
			
			$sqlGrabacion2 = "<b>INSERT INTO</b> <i>tabla</i> ($var_array2_SinFinal) <b>VALUES</b> ($var_arrayD2_SinFinal)";	
			echo $sqlGrabacion2;
			echo "<br><br>";
			echo "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br><br>";
		?>
	</body>
</html>