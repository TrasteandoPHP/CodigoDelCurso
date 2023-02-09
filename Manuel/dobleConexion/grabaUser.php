<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alta Usuario</title>
    </head>
    <body>
        <?php
            $nombre = $_POST["nombre"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $passwordEncriptado = password_hash($password, PASSWORD_DEFAULT);

            //echo "$nombre - $email - $passwordEncriptado";
        
            $conexionBaseDatosRemota = new mysqli("10.10.10.199","fila3","1234","fila3");
            //$conexionBaseDatosRemota = new mysqli("localhost","fila3","1234","fila3");


            $sqlConsultaEmailRepetido = "SELECT email_cli FROM clientes WHERE email_cli='$email'";

            $ejecutarConsultaEmailRepetido = $conexionBaseDatosRemota->query($sqlConsultaEmailRepetido);

            if($ejecutarConsultaEmailRepetido->fetch_array()){

            echo "Este email ya se encuentra registrado. Regístrese con otro email distinto<br>"; 
            
            } else {
                $sqlGrabacionCliente = "INSERT INTO clientes(nom_cli, email_cli, pass_cli) VALUES ('$nombre','$email','$passwordEncriptado')";
                if($conexionBaseDatosRemota->query($sqlGrabacionCliente)){
                    echo "Grabación en Base de Datos remota correcta<br>";
                    
                    $conexionBaseDatosLocal = new mysqli("10.10.10.113","fila3","1234","fila3");
                    //$conexionBaseDatosLocal = new mysqli("localhost","fila3","1234","fila3");

                    if($conexionBaseDatosLocal->query($sqlGrabacionCliente)){
                        echo "Grabación en Base de Datos local correcta<br>";

                    } else {                        
                        echo "Ha ocurrido un error durante la grabación en Base de Datos local<br>";
                    }

                } else {
                    echo "Ha ocurrido un error durante la grabación en Base de Datos remota<br>";
                }
            }    
        ?>    
    </body>
</html>