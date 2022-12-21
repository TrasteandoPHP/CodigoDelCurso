<form action="" method="">
	<?php
		$cont = 0;
		while($cont<10)
		{
			echo "<input type='text' name='caja$cont' placeholder='Caja$cont'><br>";
			$cont++;
		}	
	?>
	<input type ="submit" value="Enviar">
</form>
	