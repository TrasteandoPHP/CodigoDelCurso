<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Examen</title>
    </head>
    <body>
        <?php

            // Vamos a recibir el nombre del alumno, conectarnos, grabar en la tabla examenes y si graba
            $nom = $_POST["nombre"];
            $hoy = date("Y-m-d");
            $ahora = date("H:i:s");
            $nota = 0;

            $conexion = new mysqli("10.10.10.199","escorpion","1234","encuestas");

            $sqlGrabacionExamen = "INSERT INTO examenes(nom_alu, fecha_exa, hora_exa) VALUES ('$nom','$hoy','$ahora')";

            if($conexion->query($sqlGrabacionExamen)){
                // Aquí se grabó el examen. Tengo que conocer el código del examen que se acaba de grabar:
                $codigoExamen = $conexion->insert_id; 

                for($i=1; $i<=10; $i++){
                    if($i<10){
                        $codigopregunta = $_POST["pregunta0".$i];
                        $codigoRespuesta = $_POST["respuesta0".$i];  
                    } else {
                        $codigopregunta = $_POST["pregunta".$i];
                        $codigoRespuesta = $_POST["respuesta".$i];
                    }
                    
                    $sqlGrabacionRespuesta = "INSERT INTO respuestas_alumno(cod_exa, cod_pre, cod_res)
                                                    VALUES ('$codigoExamen','$codigopregunta','$codigoRespuesta')";

                    $conexion->query($sqlGrabacionRespuesta);
                    
                    $sqlBuscaRespuestaCorrecta = "SELECT * FROM respuestas WHERE cod_res='$codigoRespuesta'
                                                           AND correcta_res='correcto'";
                                                           
                    $ejecutarSqlBuscaRespuestaCorrecta = $conexion->query($sqlBuscaRespuestaCorrecta);

                    if($ejecutarSqlBuscaRespuestaCorrecta->fetch_array()){
                        $nota++;
                    }                                       
                }                  

                echo "Grabación correcta<br><br>";
                echo "Tú nota de examen ha sido un <strong>".$nota."</strong>";

            } else {

                echo "Error en grabación. Inténtelo de nuevo";
            }             
        ?>        
    </body>
</html>