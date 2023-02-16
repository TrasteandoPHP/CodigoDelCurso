<?php
    session_start();
    if(isset($_SESSION["administrador"])){
        $codigoAdmin = $_SESSION["administrador"];
        $conexion = new mysqli("localhost","root","","ensal");
        $sqlConsultaAdmin = "SELECT * FROM administradores WHERE cod_adm='$codigoAdmin'";
        $ejecutarSqlConsultaAdmin = $conexion->query($sqlConsultaAdmin);
        $registro = $ejecutarSqlConsultaAdmin->fetch_array();
        $nombreAdmin = $registro["nom_adm"];        
        
        if(isset($_POST["dni"])){
            $dniAlumno = $_POST["dni"];
            $nombreAlumno = $_POST["nombre"];
            $fechaSistema = date("Y-m-d");
            // Comprobar que el alumno no está registrado.
            $sqlConsultaAlumno = "SELECT * FROM alumnos WHERE dni_alu='$dniAlumno'";
            $ejecutarSqlConsultaAlumno = $conexion->query($sqlConsultaAlumno);
            if($ejecutarSqlConsultaAlumno->fetch_array()){
                echo "
                    <script>
                        alert ('El alumno ya se encuentra registrado.');
                        window.location.href='./altaalumnos.php';
                    </script>
                "; 

            } else {
                
                $sqlGrabacionAlumno = "INSERT INTO alumnos (cod_adm, dni_alu, nom_alu, fechaalta_alu ) VALUES ('$codigoAdmin','$dniAlumno','$nombreAlumno','$fechaSistema')";
                if($conexion->query($sqlGrabacionAlumno)){
                    echo "
                        <script>
                            alert ('Alumno registrado correctamente.');
                            window.location.href='./altaalumnos.php';
                        </script>
                    "; 
    
                } else {
                    echo "
                        <script>
                            alert ('Error durante el registro del alumno. Inténtolo de nuevo.');
                            window.location.href='./altaalumnos.php';
                        </script>
                    "; 
                };
            }           

        } else {
?>
        <!DOCTYPE html>
        <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
                <title>Panel Administración</title>
            </head>
            <body>              
                <div class='container'>
                    <div class='row my-3'>
                        <div class='offset-2 col-12 col-md-8'>
                            <nav class='nav bg-light'>
                                <!-- <button onclick="window.location.href'./index.php'">Inicio</button> -->
                                <a class='nav-link btn btn-info text-white px-4' href='./index.php'>Inicio</a>
                                <a class='nav-link btn btn-info text-white' href='./altaalumnos.php'>Alta Alumnos</a>                        
                                <a class='nav-link btn btn-info text-white' href='./consultar.php'>Consulta Registros</a>
                                <a class='nav-link btn btn-info text-white' href='./altaadm.php'>Alta Administradores</a>
                                <a class='nav-link btn btn-danger text-white px-4' href='./salir.php'>salir</a>
                                <a class='nav-link mx-5'><?php echo $nombreAdmin?></a>                                
                            </nav>
                            <hr>
                        </div>
                    </div>        
                    <div class="row my-3">
                        <div class='offset-3 col-12 col-md-6'>
                            <h1 class="text-center my-2 pb-3">Alta Alumnos</h1>
                            <form class="text-center" action="altaalumnos.php" method="POST">
                                <input class="col-8 text-center my-2" type="text" name="dni" minlength=9 maxlength=9 placeholder="DNI..." required>
                                <input class="col-8 text-center my-2" type="text" name="nombre" placeholder="Nombre....." required >
                                <input type="submit" class="btn btn-success col-8 my-3" value="Registrar">
                            </form>
                        </div>    
                    </div>                         
                </div> 
            </body>
        </html> 
<?php
         }        
?>
             
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
   