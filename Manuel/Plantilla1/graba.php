<?php
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    // $pass = $_POST["pass"];
    $encryptedPass = base64_encode($_POST["pass"]);

    include ("./assets/php/conexion.php");

    $sqlExisteCliente = "SELECT * FROM clientes WHERE email_cli='$email'";
    $ejecutarSqlExisteCliente = $conexion->query($sqlExisteCliente);    

    if(!$ejecutarSqlExisteCliente->fetch_array()){
        $sqlRegistroCliente = "INSERT INTO clientes (nom_cli, email_cli, pass_cli) VALUES ('$nombre','$email','$encryptedPass')";
        $ejecutarRegistroCliente = $conexion->query($sqlRegistroCliente);

        if($ejecutarRegistroCliente)
        {
            // Aquí se grabó correctamente. Pero vamos a enviar un correo para verificar
            // Siempre para enviar un email necesito un PARA:, un ASUNTO:, y un MENSAJE:
            $para = $email;
            $asunto = "Bienvenido a mi Web";
            $mensaje = "Hola $nombre, te damos la bienvenida a esta página web dedicada a la formación OnLine";
            $header = "From: miweb@miweb.es";
            
            // Para enviar un email:
            # mail($para, $asunto, $mensaje, $header); // Descomentar esta línea para enviar correo

            echo "Cliente registrado correctamente";
        }
            else
        {
            echo "Ha ocurrido un error durante el registro de los datos";
        }
    }
    else 
    {
        echo "Este email ya está registrado";
    }

    echo "<br><br><button onclick='window.location.href=`./alta.php`'>Volver</button>";
?>    