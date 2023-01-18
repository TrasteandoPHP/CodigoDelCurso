<?php
$ser="localhost";
$usu="root";
$pwd="";
$bd="rompecabezas";

$con=new mysqli($ser,$usu,$pwd,$bd);
$sql="SELECT * FROM productos ORDER BY codprod DESC LIMIT 1";
$recibe=$con->query($sql);
echo "<table border='4px'>";
echo  "<tr><td colspan='3'><b><center>PRODUCTOS</b></center></td></tr>";
echo "<tr><td>Codigo</td><td>Nombre</td><td>Descripcion</td></tr>";
//echo "<form action='' method=''>";
//$cp=5;
//echo "<select name='$cp'>";	
foreach($recibe as $reg)

{echo "<tr>";


		$cod=$reg["codprod"];
	
		//echo "<option value='$cod'>$cod";
		//echo "<option value='Scod'>$cod</option>";
		
		$nom=$reg["nomprod"];
		$des=$reg["descripcion"];
		echo "<td>$cod</td>";
		echo "<td>$nom</td>";
		echo "<td>$des</td>";
		echo "</tr>";
		
		
}
//echo "</option>";
//echo "</select>";
//echo "</form>";
echo "</table>";
//echo "<form ac>"; 
//echo"<>";




?>