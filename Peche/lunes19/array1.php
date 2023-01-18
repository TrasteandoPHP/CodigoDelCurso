<?php
	//Hasta ahora
$alumno1="pablo";
$alumno2="javier";
$alumno3="pedro";

//array

$alumnos=array("pablo","javier","pedro");+
//$alumnos=array($alumno1,$alumno2,$alumno3);
var_dump($alumnos);
echo "<br>";
//sacar datos del array primero uno solo
echo $alumnos[0];
echo $alumnos[1];
echo $alumnos[2];
//echo $alumnos[3];//error

//sacar los datos con un bucle
//para cada elemento de $alumnos lo voy a conocer com $alumnito
foreach($alumnos as $alumnito)//elemento que voy a recorrer
{
	echo $alumnito;
}
//sacando los datos con un bucle for
for($i=0;$i<3;$i++)
{
	echo "$alumnos[$i]<br>";
}
//sacando los datos while
$c1=0;
while($c1<3)
{
	echo "$alumnos[$c1]<br>";
	$c1++;
}
echo "<br>";
echo count($alumnos);
echo "<br>";
$c=0;
while($c < count($alumnos))
{
	echo "$alumnos[$c]<br>";
	$c++;
}
echo "<hr>";
$arreglo=array("a","b","c","d");
//añadir elementos a un array
$arreglo[] = "e";
//forma correcta
array_push($arreglo,"f");
echo "<hr>";


for($i=100;$i>0;$i--)
{ 
$var[$i]=$i;
}
foreach($var as $rg)
{
	echo "$rg<br>";
}

$nume = array();
for($i=1;$i<=100;$i++)
{
	array_push($nume, $i);
}
var_dump($nume);


?>

