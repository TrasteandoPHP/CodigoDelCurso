<?php
    $para = "manuel@casado.ef";
    $asunto = "Hola, como estás?";
    //$mensaje = "Hola, que tal estás?";
    
    $mensaje = "<h1>Méñasaje de Prueba</h1>
                <br>
                <p>Estamos encantados</p>
                <img src='https://assets.puzzlefactory.pl/puzzle/349/536/original.webp' style='width:20%'>
    ";
   
   
    $header = "MIME-version:1.0  \r\n";
    $header .= "Content-type:text/html; charset=UTF-8 \r\n";
    $header = "From: asdasdasdasdasdasd@medellin.ef";
   
    //mail($para, $asunto, $mensaje);
    mail($para, $asunto, $mensaje, $header);

?>

