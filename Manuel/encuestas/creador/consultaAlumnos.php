<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Consulta Alumnos</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
            <div class="col-2"></div>
            <div class="col-4">
                <table border="1" class="table table-striped">
                    <tr><td colspan="3" align="center"><strong>Listado Alumnos</strong></td></tr>
                    <tr><th>Código</th><th>Email</th><th>Password</th></tr>
                
                <?php
                    $conexion = new mysqli("10.10.10.199","escorpion","1234","encuestas");
                    $sqlConsultaAlumnos = "SELECT * FROM alumnos";
                    $ejecutarSqlConsultaAlumnos = $conexion->query($sqlConsultaAlumnos);

                    foreach ($ejecutarSqlConsultaAlumnos as $alumno){
                        $codigoAlumno = $alumno["cod_alu"];
                        $emailAlumno = $alumno["email_alu"];
                        $passwordAlumno = $alumno["pass_alu"];
                
                        echo "       
                                <tr>
                                    <td>$codigoAlumno</td><td>$emailAlumno</td><td>$passwordAlumno</td>
                                </tr>                    
                        ";
                    }    
                ?> 
                </table> 
            </div> <!-- div.row -->
        </div> <!-- div.container -->                
    </body>
</html>