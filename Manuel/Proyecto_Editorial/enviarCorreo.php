<?php

for ($i=1; $i<20;$i++){
	$para = "dani@medellin.ef";
	$asunto = "No me envíes más correos";
	$mensaje = "<h1>Bienvenido a Bookbusters</h1>
			<br>
            <p>Por favor, podrías dejar de enviarme correos, gracias</p>
            <br>
            <br>
            <a href='http://10.10.10.199/bookbusters/login.html'>Accede a Bookbusters</a>
			";

	$header = "MIME-Version: 1.0 \r\n";
	$header .= "Content-type:text/html;charset=UTF-8 \r\n";
	$header .= "From: informacion@medellin.ef";
	mail($para, $asunto, $mensaje, $header);
}	
	

?>