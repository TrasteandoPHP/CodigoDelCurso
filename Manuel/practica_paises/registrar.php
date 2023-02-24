<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Registrar Datos</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="offset-2 col-8 text-center my-5">
                    <?php
                        // 1. Recibir los datos del formulario por POST.
                        $nombre = $_POST["nombre"];
                        $email = $_POST["email"];
                        $password = $_POST["password"];
                        $prefijo = $_POST["prefijo"];
                        $telefono = $_POST["telefono"];

                        $passwordEncriptada = password_hash($password, PASSWORD_DEFAULT);

                        // 2. Conectarme a la BBDD.
                        $conexion = new mysqli("localhost","root","","practica");
                        // 3. SQL para grabar persona.
                        $sqlGrabacionPersona = "INSERT INTO personas (nom_per, email_per, pass_per, pref_per, tel_per)
                                                        VALUES ('$nombre','$email','$passwordEncriptada','$prefijo','$telefono')";
                        // 4. Ejecutar grabación SQL                                
                        if($conexion->query($sqlGrabacionPersona)){
                            // Si va bien, mensaje y redirigir a index.php
                    ?>        
                            <div class="alert alert-success my-2" role="alert">
                                <h3 p-5>Datos grabados correctamente.</h3>
                                <button class="btn btn-success my-3 px-5" onclick="window.location.href='./index.php'">Volver</button> 
                            </div>                            
                    <?php                        
                        } else {
                            // Si va mal ... mensaje "ocurrio un error" y redirigir a index
                    ?>        
                            <div class="alert alert-danger my-2" role="alert">
                                <h2 p-3>Error en la grabación de datos. Inténtelo de nuevo.</h2>
                                <button class="btn btn-danger my-3 px-5" onclick="window.location.href='./index.php'">Volver</button> 
                            </div>
                    <?php  
                        };                     
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>