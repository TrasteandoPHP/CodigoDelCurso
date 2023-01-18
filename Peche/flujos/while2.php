<form action="" method="">
<?php
$c=0;
while($c<10)
{
	echo "<input type='text' name='caja$c' placeholder='caja $c' >";
	echo "<br>";
	$c++;
}

?>
<input type="submit" value="Enviar">
</form>