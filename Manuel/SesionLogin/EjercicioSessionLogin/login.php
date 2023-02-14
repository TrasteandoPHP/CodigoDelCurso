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
            $nombre = $_POST["nombre"];
            $password = $_POST["password"];            

            $conexion = new mysqli("localhost","root","","EjercicioSessionLogin");
            $sqlConsultaNombre = "SELECT * FROM usuarios WHERE nom_user='$nombre'";
            $ejecutarConsultaNombre = $conexion->query($sqlConsultaNombre);

            if($registro = $ejecutarConsultaNombre->fetch_array()){

                // Extraemos el password y comprobamos si es correcto.
                $passwordEncriptado = $registro["pass_user"];

                $comprobacionPassword = password_verify($password, $passwordEncriptado);

                if($comprobacionPassword){
                    // El password es correcto. Vamos a extraer el código, para iniciar una sesión y dentro le metemos el código del alumno.
                    $codigo = $registro["cod_user"];
                    // Arrancamos la escucha de sesiones.
                    session_start();
                    // Creamos una sesión a la que le metemos el código.
                    $_SESSION["usuario"] = $codigo;
                    $fecha = date("Y-m-d");
                    $hora = date("H:i:s");   
                    
                    // Grabamos el registro de la sesión.
                    $sqlGrabacionSesion = "INSERT INTO registros(fecha_reg, hora_reg, cod_user, tipo_reg) VALUES ('$fecha','$hora','$codigo','Entrada')";
                    if($conexion->query($sqlGrabacionSesion)){
                        echo "
                        <script>
                            alert ('Login correcto. Se le redirecciona a la página de consulta de registro');
                            window.location.href='./consultaRegistro.php';
                        </script>
                    "; 


                    } else {
                        echo "
                            <script>
                                alert ('Error durante el inicio de sesión. Inténtelo de nuevo');
                                window.location.href='./index.html';
                            </script>
                        "; 
                    }                    

                } else {

                    echo "
                            <script>
                                alert ('Nombre o Contraseña incorrecto');
                                window.location.href='./index.html';
                            </script>
                        ";            
                }            

            } else {

                echo "
                            <script>
                                alert ('Nombre o Contraseña incorrecto');
                                window.location.href='./index.html';
                            </script>
                        ";                     
            }            
        ?>
    </body>
</html>