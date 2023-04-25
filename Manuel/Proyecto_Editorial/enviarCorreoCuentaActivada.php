<?php

	$para = "manuel@medellin.ef";
	$asunto = "Su cuenta de bookbusters se ha activado";
	$mensaje = "<h1>Bienvenido a Bookbusters</h1>
			<br>
            <img src='http://10.10.10.199/bookbusters/images/Bookbusters (3).png'>
            <br>
            <p>Ya puedes acceder a tu cuenta pinchando en el siguiente enlace</p>
            <br>
            <a href='http://10.10.10.199/bookbusters/login.html'>Accede a Bookbusters</a>
			";

	$header = "MIME-Version: 1.0 \r\n";
	$header .= "Content-type:text/html;charset=UTF-8 \r\n";
	$header .= "From: informacion@medellin.ef";
	mail($para, $asunto, $mensaje, $header);

?>