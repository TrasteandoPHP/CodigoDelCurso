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
                $nombre = $_POST["nombre"];
                $password1 = $_POST["password1"];
                $password2 = $_POST["password2"];

                // Comprobamos los passwords para ver si son iguales
                if($password1==$password2){
                    // Los passwords coinciden, así que seguimos. Revisamos si el email existe en la BBDD.

                    $conexion = new mysqli("localhost","root","","EjercicioSessionLogin");
                    $sqlConsultaNombre = "SELECT * FROM usuarios WHERE nom_user='$nombre'";
                    $ejecutarSqlConsultaNombre = $conexion->query($sqlConsultaNombre);
                    if($ejecutarSqlConsultaNombre->fetch_array()){
                        echo "
                            <script>
                                alert ('Este nombre ya está registrado.');
                                window.location.href='./registro.html';
                            </script>
                        ";                   
                    } else {
                        // El nombre no existe, así que tenemos que: 
                    
                        // 1.- Encriptar la password.
                        $passwordEncriptado = password_hash($password1, PASSWORD_DEFAULT);
                        // 2.- Grabar usuario en la BBDD.
                        $sqlGrabacionUsuario = "INSERT INTO usuarios (nom_user, pass_user) VALUES ('$nombre','$passwordEncriptado')";
                        if($conexion->query($sqlGrabacionUsuario)){
                            // 3.- Conocer el código del registro que se acaba de grabar.
                            $codigo = $conexion->insert_id;                        
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
                            window.location.href='./registro.html';
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