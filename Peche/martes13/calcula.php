<form>
<h1></h1>
<input type="text" name="n1" placeholder="">
<input type="text" name="n2" placeholder="">
<input type="button" onclick="window.location.href='calcula.php?opt=1'" name="suma" value="suma">
<input type="button" onclick="window.location.href='calcula.php?opt=2'" name="resta" value="resta">
<input type="button" onclick="window.location.href='calcula.php?opt=3'" name="multi" value="multicion">
<input type="button" onclick="window.location.href='calcula.php?opt=4'" name="divi" value="division">
</form>
if(isset($_POST))

<?php
$op=$_GET["m"];
$men = $_GET["oper"];
$a=$_POST["vs1"];
$b=$_POST["vs2"];
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
echo "El resultado de la $men:$r";

?>