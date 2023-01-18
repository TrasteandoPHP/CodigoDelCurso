<?php
$nc=ucfirst($_POST["cat"]);
$con = new mysqli("localhost","root","","tienda");
//$con =new mysqli("10.10.10.108","escuela","1234","tienda"); 
$sql="SELECT * FROM categorias WHERE nombre_cat='$nc'";
$cons= $con->query($sql);
if($cons->fetch_array())
{
	echo "no se puede grabar ya existe";
	}
	else
	{$sql2="INSERT INTO categorias (nombre_cat) VALUES ('$nc')";
	if($con->query($sql2)){
		echo "Grabo";
			}
else{
	echo "no grabo";
}	
		
	}
	echo "<br><button onclick='window.location.href=`formulariocategoria.html`'>Volver</button>";
	
//	$p=1;
//	$sqltodascat="SELECT * FROM categorias ORDER BY codigo_cat DESC";
//	$ejecutartodo=$con->query($sqltodascat);
// foreach($ejecutartodo as $reg)
// {
	// $nomcat = $reg["nombre_cat"];
	// echo "$nomcat <br>";
// }
?>

