<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <title>Desglose</title>
    </head>
    <body>
        <div class="container">
            <div class="row my-5">
                <div class="offset-4 col-4 my-5">
                    <table class="table table-striped text-center">
                        <?php
                            $estudio = $_GET["estudio"];
                            echo "<tr><td><strong>$estudio</strong></td></tr>";
                            $conexion = new mysqli("localhost","root","","agrupaciones"); 
                            $sqlConsultaNombreAlumnos = "SELECT nom_alu FROM alumnos INNER JOIN estudios USING(cod_alu) WHERE estudios.nom_est='$estudio'";
                            $ejecutarSqlConsultaNombreAlumnos = $conexion->query($sqlConsultaNombreAlumnos);
                            foreach($ejecutarSqlConsultaNombreAlumnos as $registro){
                                $nombreAlumno = $registro["nom_alu"];
                                echo "<tr><td>$nombreAlumno</td></tr>";
                            }                                
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>