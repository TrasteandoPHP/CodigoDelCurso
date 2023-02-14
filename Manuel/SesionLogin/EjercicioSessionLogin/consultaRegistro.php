<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Consulta Registro</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="offset-3 col-12 col-md-5">
                    <?php
                        session_start();
                        if(isset($_SESSION["usuario"])){
                            $conexion = new mysqli("localhost","root","","EjercicioSessionLogin");
                            $sqlConsultaRegistros = "SELECT * FROM registros INNER JOIN usuarios USING (cod_user)";
                            $ejecutarSqlConsultaRegistros = $conexion->query($sqlConsultaRegistros);
                            $registro = $ejecutarSqlConsultaRegistros->fetch_array();
                            $nombreLogin = $registro["nom_user"];                            
                    ?>
                    <h1 class="text-center">Bienvenido <?php echo $nombreLogin?></h1><br><br>    
                    <table class="table table-striped text-center">
                        <thead>
                            <tr><th colspan=5>Registro de Accesos</th></tr>
                            <tr><th>Fecha</th><th>Hora</th><th>Usuario</th><th>Nombre </th><th>Registro</th></tr>           
                        </thead>
                        <tbody>
                    
                    <?php
                            foreach($ejecutarSqlConsultaRegistros as $registro){
                                $fechaRegistro = $registro["fecha_reg"];
                                $horaRegistro = $registro["hora_reg"];
                                $codigoUsuario = $registro["cod_user"];
                                $nombreUsuario = $registro["nom_user"];
                                $tipoRegistro = $registro["tipo_reg"];                    
                                echo "<tr><td>$fechaRegistro</td>
                                        <td>$horaRegistro</td>
                                        <td>$codigoUsuario</td>
                                        <td>$nombreUsuario</td>
                                        <td>$tipoRegistro</td>
                                ";
                            }            

                        } else { 
                            echo "
                            <script>
                                alert ('Para acceder a esta página tienes que iniciar sesión.');
                                window.location.href='./index.html';
                            </script>
                        "; 
                        }                              
                    ?>
                        </tbody>
                    </table>                    
                    <a href="./logout.php"><button class="btn btn-danger col-3 mt-2">Salir</button></a>
                </div> <!-- div.col -->
            </div> <!-- div.row -->
        </div> <!-- div.container -->       
    </body>
</html>