<?php
$con=new mysqli("localhost","root","","lunes5");
$sqlc="SHOW COLUMNS FROM alumnos";
$sql="SELECT * FROM alumnos";
$as="";
$ejec=$con->query($sqlc);
$ejecu=$con->query($sql);
$ar=array();




$c=count($cons=$ejec->fetch_all());
//$c=count($cons);
echo $c;
echo "<br>";
$cons=$ejecu->fetch_all();
$c=count($cons);
echo $c;

// echo "<table border=1>";
// echo "<tr>";
// foreach($ejec as $consulta)
// {
// array_push($ar,$consulta["Field"]);
// $as=$consulta["Field"];
// echo "<td>$as</td>";
// }
	// echo "<tr>";
	// foreach($ejecu as $reg)
	// {
		// for($i=0;$i<count($ar);$i++)
// {
		// echo "<td>";
	// echo $reg[$ar[$i]];
	// echo "</td>";
	// }
	// echo "</tr>";
// }
// echo "</tr>";
// echo "</table>";
?>




