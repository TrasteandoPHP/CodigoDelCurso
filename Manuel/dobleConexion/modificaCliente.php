<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update User</title>
    </head>
    <body>
        <?php
            // Recibimos los datos por GET
            $codigo = $_POST["codigo"];
            $nombre = $_POST["nombre"];
            $email = $_POST["email"];

            // Establecemos conexion con la BBDD
            //$conexion = new mysqli("10.10.10.199","fila3","1234","fila3"); VOLVER
            $conexion = new mysqli("localhost","fila3","1234","fila3");

            // SQL para borrar
            $sqlModificarCliente = "UPDATE clientes SET nom_cli='$nombre', email_cli='$email' WHERE cod_cli='$codigo'";

            if($conexion->query($sqlModificarCliente)){

                // Se modifica el registro y se le reenvía al formulario inicial
                header("location:./verClientes.php"); 
                //echo "Registro modificado";           

            } else { 

                // Ocurrio un error
                echo "Error al modificar el registro <br>
                    <a href='verCliente.php'>Volver</a>            
                ";
            }   
        ?>
    </body>
</html>