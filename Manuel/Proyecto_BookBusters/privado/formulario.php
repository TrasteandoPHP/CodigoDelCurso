<?php

$nom=$_POST['demo-name'];
$ema=$_POST['demo-email'];
$tex=$_POST['demo-message'];


$para = $ema;
    $asunto = "Contacto desde Bookbusters";
    $mensaje = "<h1></h1>
            <p>$tex</p>";

    $header = "MIME-Version: 1.0 \r\n";
    $header .= "Content-type:text/html;charset=UTF-8 \r\n";
    $header .= "From: informacion@medellin.ef";
    if (mail(alfonso@medellin.ef, $asunto, $mensaje, $header)) echo "ok";





?>