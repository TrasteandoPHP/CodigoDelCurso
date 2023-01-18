<?php?
if(isset($_POST['opera']))
{
$op=$_GET["m"];
$men = $_GET["oper"];
$a=$_POST["vs1"];
$b=$_POST["vs2"];

echo "$a";
echo "$b";
switch($op)
{
	case 1:
	$r=$a+$b;
	break;
	case 2:
	$r=$a-$b;
	break;
	case 3:
	$r=$a*$b;
	break;
	case 4:
	$r=$a/$b;
	break;
	default:
	break;
}

}
echo "$a";
else{
	echo "$a";
echo "$b";
}
echo "El resultado de la $men:$r";
echo "$a";
echo "$b";
echo "<form action='index.php?m=1&oper=suma' method='POST'><input type='number' name='vs1' placeholder= 'Ingrese  numero 1' >
<input type='number' name='vs2' placeholder= 'Ingrese  numero 2' >
<input type='button' onclick='window.location.href=`index.php?m=1&oper=suma`' value='+'>
<input type='button' onclick='window.location.href=`index.php?m=2&oper=resta`' value='-'>
<input type='button' onclick='window.location.href=`index.php?m=3&oper=multiplicacion`' value='/'>
<input type='button' onclick='window.location.href=`index.php?m=4&oper=division`' value='*'>
<input type='submit' value='Enviar'></form>";
?>