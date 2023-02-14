<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Perfil Privado</title>
        <style>
            img {
                width: 100px;
                height: 100px;
                object-fit: cover;
                border-radius: 50px;
                }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="offset-4 col-4">
                    <?php
                        session_start();
                        if(isset($_SESSION["usuario"])){
                            // Aquí irá todo lo que queremos que se vea porque pasaron por el LOGIN.
                            $codigo = $_SESSION["usuario"];
                            $conexion = new mysqli("10.10.10.199","febrero","1234","alumnos");
                            $sqlConsultaCodigo = "SELECT * FROM alumnado WHERE cod_alu='$codigo'";
                            $ejecutarSqlConsultaCodigo = $conexion->query($sqlConsultaCodigo);
                            $registro = $ejecutarSqlConsultaCodigo->fetch_array();
                            $nombre = $registro["nom_alu"];
                            $email = $registro["email_alu"];
                            echo "Perfil de $nombre<br><br>";
                            $imagen = $registro["avatar_alu"];
                            $ruta = "./imagenes/$codigo/$imagen";
                            
                            if($imagen==""){
                                echo "
                                    <img src='./imagenes/avatar.jpg'><br><br>                                   
                                ";
                            } else {
                                echo "<img src='$ruta'><br><br>";
                            }            
                        
                    ?>
                        <form action="modificaPerfil.php" method="POST" enctype="multipart/form-data">
                            <input type="text" name="nombre" value="<?php echo $nombre?>" placeholder="Nombre">
                            <br><br>
                            <input type="text" name="email" value="<?php echo $email?>" readonly>
                            <br><br>
                            <input type="file" name="imagen">
                            <br><br>
                            <input type="submit" value="Modificar">
                        </form>
                        
                    <?php    
                        echo "<br><a href='./index.php'>Volver</a>";
                            
                        } else {
                            // No ha pasado por el LOGIN, así que ....
                            header("location:./../index.html");
                        }
                    ?>
                </div>
            </div>
        </div>    
    </body>
</html>