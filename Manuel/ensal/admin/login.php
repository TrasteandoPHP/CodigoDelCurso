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
            // 1. Recibir los datos del formulario por POST.
            $email = $_POST["email"];
            $password = $_POST["password"];
            // 2. Conectarme a la BBDD.
            $conexion = new mysqli("localhost","root","","ensal");
            // 3. Buscar el email en la tabla administradores.
            $sqlConsultaEmail = "SELECT * FROM administradores WHERE email_adm='$email'";
            $ejecutarSqlConsultaEmail = $conexion->query($sqlConsultaEmail);
            // 4. Preguntar si existe ese mail.
            if($registro = $ejecutarSqlConsultaEmail->fetch_array()){
                // Si existe sacamos el pass.
                $passwordEncriptada = $registro["pass_adm"];
                // Comprobamos que el pass del formulario corresponda al pass de la tabla (pass) con el verify.
                if(password_verify($password, $passwordEncriptada)){
                    // Si está bien creamos sesión y redirigimos a private->principal.
                    session_start();
                    $_SESSION["administrador"] = $registro["cod_adm"];
                    header("location:./private/index.php"); 
                } else {
                    // Si está mal ... mensaje "ocurrio un error" y redirigir a index
                    echo "
                        <script>
                            alert('Email o contraseña incorrectos');
                            window.location.href='./index.html';
                        </script>               
                    ";
                };                
                
            } else {
                // Si no existe ... mensaje "ocurrio un error" y redirigir a index. 
                echo "
                    <script>
                        alert('Email o contraseña incorrectos');
                        window.location.href='./index.html';
                    </script>               
                ";
            }                
        ?>
    </body>
</html>