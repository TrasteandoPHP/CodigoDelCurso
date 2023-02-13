<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <?php
            $email = $_POST["email"];
            $password = $_POST["password"];

            $conexion = new mysqli("10.10.10.199","febrero","1234","alumnos");
            $sqlConsultaEmail = "SELECT * FROM alumnado WHERE email_alu='$email'";
            $ejecutarConsultaEmail = $conexion->query($sqlConsultaEmail);

            if($registro = $ejecutarConsultaEmail->fetch_array()){

                // Extraemos el password y comprobamos si es correcto.
                $passwordEncriptado = $registro["pass_alu"];

                $comprobacionPassword = password_verify($password, $passwordEncriptado);

                if($comprobacionPassword){
                    // El password es correcto. Vamos a extraer el código, para iniciar una sesión y dentro le metemos el código del alumno.
                    $codigo = $registro["cod_alu"];
                    // Arrancamos la escucha de sesiones.
                    session_start();
                    // Creamos una sesión a la que le metemos el código.
                    $_SESSION["usuario"] = $codigo;
                    // Redireccionar a donde queremos ir (privado->index.php).
                    header("location:./privado/index.php");

                } else {

                    echo "
                            <script>
                                alert ('Email o Contraseña incorrecto');
                                window.location.href='./index.html';
                            </script>
                        ";            
                }            

            } else {

                echo "
                            <script>
                                alert ('Email o Contraseña incorrecto');
                                window.location.href='./index.html';
                            </script>
                        ";                     
            }            
        ?>
    </body>
</html>