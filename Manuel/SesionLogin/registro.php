<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
    </head>
    <body>
        <?php

        if(isset($_POST["password1"])){
            // Recoger los datos
            $password1 = $_POST["password1"];
            $password2 = $_POST["password2"];

            // Comprobamos los passwords para ver si son iguales
            if($password1==$password2){
                // Los passwords coinciden, así que seguimos. Revisamos si el email existe en la BBDD.

                $email = $_POST["email"];

                $conexion = new mysqli("10.10.10.199","febrero","1234","alumnos");
                $sqlConsultaEmail = "SELECT * FROM alumnado WHERE email_alu='$email'";
                $ejecutarSqlConsultaEmail = $conexion->query($sqlConsultaEmail);
                if($ejecutarSqlConsultaEmail->fetch_array()){
                    echo "
                        <script>
                            alert ('Este email ya está registrado.');
                            window.location.href='./registro.php';
                        </script>
                    ";                   
                } else {
                    // El email no existe, así que tenemos que: 
                    // 1.- Recoger el nombre.
                    $nombre = $_POST["nombre"];
                    // 2.- Encriptar la password.
                    $passwordEncriptado = password_hash($password1, PASSWORD_DEFAULT);
                    // 3.- Grabar usuario en la BBDD.
                    $sqlGrabacionUsuario = "INSERT INTO alumnado (nom_alu, email_alu, pass_alu) VALUES ('$nombre','$email','$passwordEncriptado')";
                    if($conexion->query($sqlGrabacionUsuario)){
                        // 4.- Conocer el código del registro que se acaba de grabar.
                        $ruta = $conexion->insert_id;
                        // 5.- Crear la carpeta de usuario dentro del directorio imagenes.
                        mkdir("./privado/imagenes/$ruta", 0777);
                        // Mensaje de registro correcto.
                        echo "
                        <script>
                            alert ('Usuario registrado correctamente.');
                            window.location.href='./index.html';
                        </script>
                    ";    

                    } else {
                       
                        echo "
                        <script>
                            alert ('Error en la grabación del registro. Inténtelo de nuevo');
                            window.location.href='./registro.html';
                        </script>
                    ";    
                    }
                }

            } else {

                // Los passwords no coinciden ... Muestro en pantalla y redirecciono
                echo "
                    <script>
                        alert ('Los passwords no coinciden');
                        window.location.href='./registro.php';
                    </script>
                ";
            }   

        } else {
            echo "
            <script>
                alert ('Tienes que introducir los datos de registro desde el formulario');
                window.location.href='./registro.html';
            </script>
        ";

        }
                 
        ?>
    </body>
</html>