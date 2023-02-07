<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Encuesta Directa</title>
    </head>
    <body>
        <form action="./grabaExamen.php" method="POST">
            <label>Nombre</label>
            <input type="text" name="nombre" size="40" placeholder="Escribe tu nombre" required>
            <br><br>
            <?php
                $letras = array("a", "b","c");
                $conexion = new mysqli("10.10.10.199","escorpion","1234","encuestas");
                $sqlPregunta = "SELECT * FROM preguntas LIMIT 10";
                $ejecutarSqlPregunta = $conexion->query($sqlPregunta);
                $numeroPregunta = 1;           
                            
                foreach($ejecutarSqlPregunta as $registroPregunta){
                    $textoPregunta = $registroPregunta["pregunta_pre"];
                    
                    if($numeroPregunta < 10){
                        $numeroPregunta = "0".$numeroPregunta;
                    }
                    
                    echo "<strong>$numeroPregunta.- $textoPregunta</strong><br>"; 
                    
                    $codigoPregunta = $registroPregunta["cod_pre"];
                    echo "<input type='hidden' value='$codigoPregunta' name='pregunta$numeroPregunta'><br>";
                    $sqlRespuestas = "SELECT * FROM respuestas WHERE cod_pre=$codigoPregunta";
                    $ejecutarSqlRespuestas = $conexion->query($sqlRespuestas);

                    $posicion = 0;
                    foreach($ejecutarSqlRespuestas as $registroRespuestas){
                        $textoRespuesta = $registroRespuestas["respuesta_res"];
                        $codigoRespuesta = $registroRespuestas["cod_res"];
                        
                        echo "<input type='radio' name='respuesta$numeroPregunta' value='$codigoRespuesta' required><b>$letras[$posicion]</b> - $textoRespuesta<br>";
                        $posicion++;
                    } 
                    echo "<br>"; 
                    $numeroPregunta++;                       
                }       
            ?>
            <br><br><input type="submit" value="Enviar">
        </form>
    </body>
</html>