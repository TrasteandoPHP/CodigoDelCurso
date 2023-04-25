<?php
	$mail = "pch@medellin.ef";
	$mailEncriptado = base64_encode($mail);
	
	$para = "manuel@medellin.ef";
	$asunto = "Active su cuenta de Bookbusters";
	$mensaje = "<h1>Activación de cuenta</h1>
			<br>
            <img src='http://10.10.10.199/bookbusters/images/Bookbusters (3).png'>
            <br>
            <p>Para activar su cuenta pinche el siguiente enlace</p>
            <br>
            <a href='http://10.10.10.199/bookbusters/activacion.php?mail=$mailEncriptado'>Active su cuenta</a>
			";

	$header = "MIME-Version: 1.0 \r\n";
	$header .= "Content-type:text/html;charset=UTF-8 \r\n";
	$header .= "From: informacion@medellin.ef";
	mail($para, $asunto, $mensaje, $header);

?>