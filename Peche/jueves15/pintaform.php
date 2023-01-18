<?php
function inicioform($accion,$metodo)
{
	echo "<form action='$accion' method='$metodo'>";
} 
function finform()
{
	echo "</form>";
}
function pintainput($tipo,$nombre,$place)
{
	echo "<input type='$tipo' name='$nombre' placeholder='$place'>";
}


inicioform("graba.php","POST");
pintainput("text","nom_cli","Nombre del Cliente");
pintainput("text","ape_cli","Apellido del Cliente");
pintainput("number","eda_cli","Edad del Cliente");
finform();
?>