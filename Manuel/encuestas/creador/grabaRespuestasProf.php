<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grabar Respuestas</title>
    </head>
    <body>
        <?php
            // Recoger los datos
            $codpre = $_POST["pregunta"];

            $respuesta1 = $_POST["r1"];  
            $respuesta2 = $_POST["r2"];
            $respuesta3 = $_POST["r3"];

            $correcto1 = $_POST["c1"];
            $correcto2 = $_POST["c2"];
            $correcto3 = $_POST["c3"];

            // Me conecto a la Base de Datos            
            $conexion = new mysqli("10.10.10.199","escorpion","1234","encuestas");

            // SQL grabación
            $sqlGrabacionRespuesta1 = "INSERT INTO respuestas(cod_pre, respuesta_res, correcta_res) 
                                       VALUES ('$codpre', '$respuesta1', '$correcto1')";
            
            $conexion->query($sqlGrabacionRespuesta1);

            $sqlGrabacionRespuesta2 = "INSERT INTO respuestas(cod_pre, respuesta_res, correcta_res) 
            VALUES ('$codpre', '$respuesta2', '$correcto2')";

            $conexion->query($sqlGrabacionRespuesta2);

            $sqlGrabacionRespuesta3 = "INSERT INTO respuestas(cod_pre, respuesta_res, correcta_res) 
            VALUES ('$codpre', '$respuesta3', '$correcto3')";

            $conexion->query($sqlGrabacionRespuesta3); 
            
            echo "
                <script>
                    alert('Grabación correcta...');
                    window.location.href='./formularioRespuestaProf.php';
                </script>            
            ";        
        ?>
    </body>
</html>