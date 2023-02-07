<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alumnos</title>
    </head>
    <body>
        <?php
            $email = $_POST["email"];
            $password = $_POST["password"];

            $passwordCodificado = password_hash($password, PASSWORD_DEFAULT);
            
            //echo $passwordCodificado;
            $conexion = new mysqli("10.10.10.199","escorpion","1234","encuestas");
            $sqlGrabacion = "INSERT INTO alumnos (email_alu, pass_alu) VALUES ('$email','$passwordCodificado')"; 
            if($conexion->query($sqlGrabacion)){
                echo "Grabación Correcta";
            } else {
                echo "Error durante la grabación. Inténtelo de nuevo...";
            }             
        ?>
    </body>
</html>