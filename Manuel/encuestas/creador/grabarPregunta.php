<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Respuestas</title>
    </head>
    <body>
        <h1>Formulario Crear Respuestas</h1>
        <?php
            // Recoger los datos del formulario
            $pregunta = $_POST["pregunta"];

            // Pongo la primera letra en mayúsculas:
            $pregunta = ucfirst($pregunta);

            // Me conecto a la base de datos
            $conexion = new mysqli("10.10.10.199","escorpion","1234","encuestas");

            // SQL grabación
            $sqlGrabacion = "INSERT INTO preguntas (pregunta_pre) VALUES ('$pregunta')";

            // Ejecuto la grabación con comprobación

            if ($conexion->query($sqlGrabacion)){

                echo "
                    <script>
                        alert('Pregunta grabada correctamente');
                        window.location.href='./index.html';
                    </script>               
                ";
            } else {
                echo "
                    <script>
                        alert('Error en la grabación. Inténtelo de nuevo');
                        window.location.href='./index.html';
                    </script>               
                ";
            }   
        ?>
    </body>
</html>