<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Registro Mensajes</title>
    </head>
    <body>
        <div class="container">                        
            <div class="row">                           
                <div class="offset-2 col-8 text-center">                                
                    <h1 class="text-center mt-5 pb-3">Envío de Mensajes</h1>
                    <form class="text-center" action="grabaMensaje.php" method="POST">
                        <select class="float-start offset-2 col-8 text-center p-1" name="alumno" required>
                            <option value="">Elige un Alumno</option>
                                <?php
                                    $conexion = new mysqli ("localhost","root","","escuela");
                                    $sqlConsultaAlumnos = "SELECT * FROM alumnos";
                                    $ejecutarSqlConsultaAlumnos = $conexion->query($sqlConsultaAlumnos);
                                    foreach($ejecutarSqlConsultaAlumnos as $registro){
                                        $codigoAlumno = $registro["cod_alu"];
                                        $nombreAlumno = $registro["nom_alu"];
                                        echo "<option value='$codigoAlumno'>$nombreAlumno</option>";
                                    }                        
                                ?>
                        </select>
                        <br><br>
                        <textarea id="mensaje" name="mensaje" rows="3" cols="60"></textarea>
                        <input type="submit" class="btn btn-success col-8 my-3" value="Registrar">
                    </form>
                </div>
            </div>
        </div>    
    </body>
</html>