<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Respuestas</title>
    </head>
    <body>
        
        <?php
            // Recoger los datos del formulario
            $codigoPregunta = $_POST["pregunta"];
            $respuestaUno = $_POST["r1"];
            $respuestaDos = $_POST["r2"];
            $respuestaTres = $_POST["r3"];
            $validacionUno = $_POST["c1"];
            $validacionDos = $_POST["c2"];
            $validacionTres = $_POST["c3"];            

            // Me conecto a la base de datos
            //$conexion = new mysqli("10.10.10.199","escorpion","1234","encuestas");
            $conexion = new mysqli("localhost","root","","encuestas");

            // SQL grabación 1
            $sqlGrabacionRespuesta1 = "INSERT INTO respuestas (cod_pre, respuesta_res, correcta_res) 
                                       VALUES ('$codigoPregunta','$respuestaUno','$validacionUno')";

            // Ejecuto la grabación con comprobación           
            if ($conexion->query($sqlGrabacionRespuesta1)){

                // SQL grabación 2
                $sqlGrabacionRespuesta2 = "INSERT INTO respuestas (cod_pre, respuesta_res, correcta_res) 
                                           VALUES ('$codigoPregunta','$respuestaDos','$validacionDos')";

                if($conexion->query($sqlGrabacionRespuesta2)){

                    // SQL grabación 3
                    $sqlGrabacionRespuesta3 = "INSERT INTO respuestas (cod_pre, respuesta_res, correcta_res) 
                                               VALUES ('$codigoPregunta','$respuestaTres','$validacionTres')";

                    if($conexion->query($sqlGrabacionRespuesta3)){
                        echo "
                            <script>
                                alert('Todas las respuestas se han grabado correctamente');
                                window.location.href='./formularioRespuestasProf.php';
                            </script>
                        
                        ";

                    }else{
                        echo "
                            <script>
                                alert('Error en la grabación. Inténtelo de nuevo');
                                window.location.href='./formularioRespuestasProf.php';
                            </script>               
                         ";
                    }                           

                } else { 
                    echo "
                        <script>
                            alert('Error en la grabación. Inténtelo de nuevo');
                            window.location.href='./formularioRespuestasProf.php';
                        </script>               
                    ";
                } 

            } else {
                echo "
                    <script>
                        alert('Error en la grabación. Inténtelo de nuevo');
                        window.location.href='./formularioRespuestasProf.php';
                    </script>               
                ";
            }             
        ?>        
    </body>
</html>