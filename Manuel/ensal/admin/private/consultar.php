<?php
    session_start();
    if(isset($_SESSION["administrador"])){
        $codigoAdmin = $_SESSION["administrador"];
        $conexion = new mysqli("localhost","root","","ensal");
        $sqlConsultaAdmin = "SELECT * FROM administradores WHERE cod_adm='$codigoAdmin'";
        $ejecutarSqlConsultaAdmin = $conexion->query($sqlConsultaAdmin);
        $registro = $ejecutarSqlConsultaAdmin->fetch_array();
        $nombreAdmin = $registro["nom_adm"];
?>
        <!DOCTYPE html>
        <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.4.0/jquery.quicksearch.js" integrity="sha512-U+KdQxKTQfGIQJBs2QyDiU3PxJoSu+ffUJV5AAuMmwSFs1CjBz5Xk3/qWrT0mBHOM/C15q3DMko6HJL+37MYNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <title>Panel Administración</title>
            </head>
            <body>              
                <div class='container'>
                    <div class='row my-3'>
                        <div class='offset-2 col-12 col-md-8'>
                            <?php include('./menu.html')?>                            
                        </div>
                    </div>
                    <div class='row my-3'>
                        <div class='offset-2 col-12 col-md-8'>                           
                            <h1 class="text-center">Consultar entradas y salidas</h1>
                            <input class="my-4" id="buscar" type="text" placeholder="buscar....">
                            <br>
                            <a href="./consultarDes.php">Descargar Tabla</a>
                            <br>
                            <table class="table table-striped text-center">
                                <thead >
                                    <tr>
                                        <th>Fecha</th><th>Hora</th><th>Codigo Alumno</th><th>Nombre</th><th>Tipo Registro</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
                                    $sqlConsultaRegistros = "SELECT *FROM registros INNER JOIN alumnos USING(cod_alu)";
                                    $ejecutarSqlConsultaRegistros = $conexion->query($sqlConsultaRegistros);
                                    foreach($ejecutarSqlConsultaRegistros as $registro){
                                        $fechaRegistro = $registro["fecha_reg"];
                                        $horaRegistro = $registro["hora_reg"];
                                        $tipoRegistro = $registro["tipo_reg"];
                                        $codigoAlumno = $registro["cod_alu"];
                                        $nombreAlumno = $registro["nom_alu"];
?>                                      
                                        <tr>
                                            <td><?php echo $fechaRegistro ?></td>
                                            <td><?php echo $horaRegistro?></td>
                                            <td><?php echo $codigoAlumno?></td>
                                            <td><?php echo $nombreAlumno?></td>
                                            <td><?php echo $tipoRegistro?></td>
                                        </tr>
<?php
                                    }
?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
                <script type="text/javascript">
                    
                    $(function(){
                        $("#buscar").quicksearch("table tbody tr");                                             
                    });
                    
                </script> 
            </body>
        </html>                    
<?php     
            
    } else {
        echo "
            <script>
                alert ('Para acceder a esta página tienes que iniciar sesión como Administrador.');
                window.location.href='./../index.html';
            </script>
        "; 
    }        
?>        