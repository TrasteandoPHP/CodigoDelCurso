<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta Alumnos</title>
    </head>
    <body>

        <table border="1">
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
    </body>
</html>