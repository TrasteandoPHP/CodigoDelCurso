<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <title>Respuestas</title>
    </head>
    <body>    
        <div class="containerFormRespuesta">
            <h1>Formulario Crear Respuestas</h1>
            <button id="volver" onclick="window.location.href='./index.html'">Volver</button><br>
            <h3>Crear Respuestas</h3>
            <form action="./grabarRespuesta.php" method="POST">
                <select id="valorPregunta" name="cod_pre" required>
                                    <?php
                                        $conexion = new mysqli("10.10.10.199","escorpion","1234","encuestas");
                                        $sqlConsultaPreguntas = "SELECT * FROM preguntas";
                                        $ejecutarConsultaPreguntas = $conexion->query($sqlConsultaPreguntas);
                                        echo "<option disabled selected value> --- Elige una Pregunta --- </option>";
                                        foreach($ejecutarConsultaPreguntas as $registro)
                                        {
                                            $codigoPregunta = $registro["cod_pre"];
                                            $pregunta = $registro["pregunta_pre"];                                       
                                            echo "<option value='$cod_pre'>$pregunta</option><br>";
                                        }					
                                    ?>	
                </select>
                <input type="text"> <select name="" id="">
                    <option class="validacion" value="Correcta">Correcta</option>
                    <option class="validacion" value="Incorrecta">Incorrecta</option>
                </select>
                <input type="text">
                <input type="text">             
            </form>
        </div>
    </body>
</html>