<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Private</title>
    </head>
    <body>
        <?php
            session_start();
            if(isset($_SESSION["administrador"])){
                $codigoAdmin = $_SESSION["administrador"];
                $conexion = new mysqli("localhost","root","","ensal");
                $sqlConsultaAdmin = "SELECT * FROM administradores WHERE cod_adm='$codigoAdmin'";
                $ejecutarSqlConsultaAdmin = $conexion->query($sqlConsultaAdmin);
                $registro = $ejecutarSqlConsultaAdmin->fetch_array();
                $nombreAdmin = $registro["nom_adm"];
                
                echo "
                    <div class='container'>
                        <div class='row my-3'>
                            <div class='offset-2 col-12 col-md-12'>
                                <nav class='nav bg-light'>
                                    <a class='nav-link btn btn-info text-white px-4' href='#'>Inicio</a>
                                    <a class='nav-link btn btn-info text-white' href='#'>Alta Alumnos</a>                        
                                    <a class='nav-link btn btn-info text-white' href='#'>Consulta Registros</a>
                                    <a class='nav-link btn btn-info text-white' href='#'>Alta Administradores</a>
                                    <a class='nav-link btn btn-danger text-white px-4' href='./../../index.html'>salir</a>
                                    <a class='nav-link mx-5'>$nombreAdmin</a>
                                </nav>
                            </div>
                        </div>
                    </div>             
                ";
            
            } else {
                echo "
                    <script>
                        alert ('Para acceder a esta página tienes que iniciar sesión como Administrador.');
                        window.location.href='./index.html';
                    </script>
                "; 
             }        
        ?>        
    </body>
</html>