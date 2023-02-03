<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crear Encuenta</title>
    </head>
    <body>
        <h1>Formulario Crear Respuestas</h1>
        <button id="volver" onclick="window.location.href='./index.html'">Volver</button><br><br>
        <form action="grabaRespuestasProf.php" method="POST">
            <label>Selecciona la pregunta:</label><br><br>
            <select name="pregunta" required>
                <option value="">Selecciona una pregunta</option>
                <?php
                    $conexion = new mysqli("10.10.10.199","escorpion","1234","encuestas");
                    $sqlConsultaPreguntas = "SELECT * FROM preguntas ORDER BY pregunta_pre ASC";
                    $ejecutarConsultaPreguntas = $conexion->query($sqlConsultaPreguntas);
                    foreach($ejecutarConsultaPreguntas as $registro){
                        $codigoPregunta = $registro["cod_pre"];
                        $pregunta = $registro["pregunta_pre"];
                        echo "<option value='$codigoPregunta'>$pregunta</option><br>";
                    }        
                ?>
            </select>
            <br><br>
            <label for="r1">Respuesta 1</label>
            <input type="text" name="r1" placeholder="Primera respuesta">
            <label for="c1">Es correcta?</label>
            <select name="c1">
                <option value="">Seleccionar</option>
                <option value="correcto">Correcta</option>
                <option value="incorrecto">Incorrecto</option>
            </select>   
            <br>
            <label for="r2">Respuesta 2</label>
            <input type="text" name="r2" placeholder="Segunda respuesta">
            <label for="c2">Es correcta?</label>
            <select name="c2">
                <option value="">Seleccionar</option>
                <option value="correcto">Correcta</option>
                <option value="incorrecto">Incorrecto</option>
            </select>  
            <br>
            <label for="r3">Respuesta 3</label>
            <input type="text" name="r3" placeholder="Tercera respuesta">
            <label for="c3">Es correcta?</label>
            <select name="c3">
                <option value="">Seleccionar</option>
                <option value="correcto">Correcta</option>
                <option value="incorrecto">Incorrecto</option>
            </select>
            <br><br>   
            <input type="submit" value="Grabar respuestas">
        </form>    
    </body>
</html>