<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
    </head>
    <body>
        <?php
            // Recoger los datos del formulario por POST.
            $nombre = $_POST["nombre"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $rol = $_POST["rol"];

            // Hasheamos el password.
            $passwordEncriptada = password_hash($password, PASSWORD_DEFAULT);

            // Creamos conexión.
            $conexion = new mysqli("localhost","root","","ensal");
            //Crear sentencia SQL.
            $sqlGrabacionAdmin = "INSERT INTO administradores (nom_adm, email_adm, pass_adm, rol_adm) 
                                         VALUES ('$nombre','$email','$passwordEncriptada','$rol')";

            // Ejecutar comprobando. Si existe mensaje, si no existe otro mensaje.
            if($conexion->query($sqlGrabacionAdmin)){
                // Grabó correctamente.
                echo "
                    <script>
                        alert('Administrador registrado');
                        window.location.href='./index.html';
                    </script>        
                ";
            } else {
                echo "
                    <script>
                        alert('Ocurrio un error. Inténtelo de nuevo.');
                        window.location.href='./index.html';
                    </script>        
                ";
            }    
        ?>
    </body>
</html>