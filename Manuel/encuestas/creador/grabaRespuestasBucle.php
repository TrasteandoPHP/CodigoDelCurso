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
            //$conexion = new mysqli("localhost","root","","encuestas");
            $conexion = new mysqli("10.10.10.199","escorpion","1234","encuestas");

            // SQL grabación

            // Primer ejemplo del bucle.
            // Recoger los datos por POST y meterlos en la tabla
            for($i=1; $i<=3; $i++){
                $respuesta = $_POST["r$i"];
                $correcta = $_POST["c$i"];
                $sqlGrabacion = "INSERT INTO respuestas(cod_pre, respuesta_res, correcta_res) VALUES ('$codpre','$respuesta', $correcta)";
                $conexion->query($sqlGrabacion);
            }

            // Segundo ejemplo del bucle
            // Los datos ya se han recogido fuera del bucle (Se necesita usar variables dinámicas)
            for ($i=1; $i<=3; $i++){
                $res = ${"respuesta".$i};
                $cor = ${"correcta".$i};
                $sqlGrabacion = "INSERT INTO respuestas(cod_pre, respuesta_res, correcta_res) VALUES ('$codpre','$res', '$cor')";
                $conexion->query($sqlGrabacion);                
            }
           
            // Tercer ejemplo del bucle
            // Recoger los datos del POST y meterlos en variables
            for ($i=1; $i<=3; $i++){
                ${"respuesta".$i} = $_POST["r$i"];
                ${"correcta".$i} = $_POST["c$i"];
            }

            for ($i=1; $i<=3; $i++){
                $res = ${"respuesta".$i};
                $cor = ${"correcta".$i};
                $sqlGrabacion = "INSERT INTO respuestas(cod_pre, respuesta_res, correcta_res) VALUES ('$codpre','$res', '$cor')";
                $conexion->query($sqlGrabacion);                
            }

            // Cuarto ejemplo del bucle
            // Recogemos los datos POST en el bucle PERO ya en el SQL
            for($i=1; $i<=3; $i++){
                // Vamos a concatenar
                $sqlGrabacion = "INSERT INTO respuestas(cod_pre, respuesta_res, correcta_res) 
                VALUES ('$cod_pre','".$_POST["r$i"]."','".$_POST["c$i"]."')";
                $conexion->query($sqlGrabacion);
            }

            echo "
                <script>
                    alert('Grabación correcta...');
                    window.location.href='./formularioRespuestaProf.php';
                </script>            
            ";        
        ?>
    </body>
</html>