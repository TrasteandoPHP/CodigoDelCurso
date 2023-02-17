<?php
    session_start();
    if(isset($_SESSION["administrador"])){
        $codigoAdmin = $_SESSION["administrador"];
        $conexion = new mysqli("localhost","root","","ensal");
        $sqlConsultaAdmin = "SELECT * FROM administradores WHERE cod_adm='$codigoAdmin'";
        $ejecutarSqlConsultaAdmin = $conexion->query($sqlConsultaAdmin);
        $registro = $ejecutarSqlConsultaAdmin->fetch_array();
        $nombreAdmin = $registro["nom_adm"];        
        
        if(isset($_POST["email"])){
            $nombreAdmin = $_POST["nombre"];
            $emailAdmin = $_POST["email"];
            $passwordAdmin = $_POST["password"];            
            $rolAdmin = $_POST["rol"];
            // Comprobar que el admin no está registrado.
            $sqlConsultaAdmin = "SELECT * FROM administradores WHERE email_adm='$emailAdmin'";
            $ejecutarSqlConsultaAdmin = $conexion->query($sqlConsultaAdmin);
            if($ejecutarSqlConsultaAdmin->fetch_array()){
                echo "
                    <script>
                        alert ('El administrador ya se encuentra registrado.');
                        window.location.href='./altaadmin.php';
                    </script>
                "; 

            } else {
                $passwordAdminEncriptada = password_hash($passwordAdmin, PASSWORD_DEFAULT);
                $sqlGrabacionAdmin = "INSERT INTO administradores(nom_adm, email_adm, pass_adm, rol_adm ) 
                                            VALUES ('$nombreAdmin','$emailAdmin','$passwordAdminEncriptada','$rolAdmin')";
                if($conexion->query($sqlGrabacionAdmin)){
                    echo "
                        <script>
                            alert ('Administrador registrado correctamente.');
                            window.location.href='./index.php';
                        </script>
                    "; 
    
                } else {
                    echo "
                        <script>
                            alert ('Error durante el registro del alumno. Inténtolo de nuevo.');
                            window.location.href='./altaadm.php';
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
                    <div class="container">
                        <div class='row my-3'>
                            <div class='offset-2 col-12 col-md-8'>
                                <?php include('./menu.html')?>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="offset-3 col-12 col-md-6">
                                <h1 class="text-center my-2 pb-3">Alta Administradores</h1>
                                <form class="text-center" action="./altaadm.php" method="POST">
                                    <input type="text" class="col-8 text-center" name="nombre" placeholder="Nombre" maxlength="50" required><br><br>
                                    <input type="email" class="col-8 text-center" name="email" placeholder="Email" maxlength="50" required><br><br>
                                    <input type="password" class="col-8 text-center" name="password" placeholder="Password" maxlength="100" required><br><br>
                                    <select class="float-start offset-2 col-8 text-center" name="rol" required>
                                        <option>Elige un rol</option>
                                        <option value="1">Todo</option>
                                        <option value="2">Altas</option>
                                        <option value="3">Consultar</option>
                                    </select>
                                    <br><br>
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