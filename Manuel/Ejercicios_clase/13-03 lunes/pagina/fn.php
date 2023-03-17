<?php

	function pinta_input($tipo, $nombre, $texto, $valor, $clase, $cosas)
	{
		echo "
		<label>$texto</label>
		<input  class='$clase' type='$tipo' name='$nombre' placeholder='$texto' value='$valor' $cosas>
		";
	}

?>