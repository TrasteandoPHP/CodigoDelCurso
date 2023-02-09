<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>
    <?php
        // Recibimos los datos por GET
        $codigo = $_GET["c"];

        // Establecemos conexion con la BBDD
        $conexion = new mysqli("10.10.10.199","fila3","1234","fila3");
        //$conexion = new mysqli("localhost","fila3","1234","fila3");

        // SQL para borrar
        $sqlBorrarCliente = "DELETE FROM clientes WHERE cod_cli='$codigo'";

        if($conexion->query($sqlBorrarCliente)){

            // Se borra el registro y se le reenvía al formulario inicial
            header("location:./verClientes.php"); 
            //echo "Registro borrado";           

        } else { 

            // Ocurrio un error
            echo "Error al borrar el registro <br>
                <a href='verCliente.php'>Volver</a>            
            ";
        }   
    ?>
</body>
</html>