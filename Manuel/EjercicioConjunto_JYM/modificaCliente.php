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
            // Recibimos los datos por POST
            $codigo = $_POST["codigo"];
            $nombre = $_POST["nombre"];
            $password = $_POST["password"];            

            // Establecemos conexion con la BBDD
            $conexion = new mysqli("10.10.10.102","javimanu","1234","ejercicioa2");  
            
            // Recuperar contraseña hash
            $sqlConsultaPasswordEncriptada = "SELECT pass_cli FROM altaclientes WHERE cod_cli='$codigo'";
            $ejecutarSqlConsultaPasswordEncriptada = $conexion->query($sqlConsultaPasswordEncriptada);
            $RegistroPasswordEncriptada = $ejecutarSqlConsultaPasswordEncriptada->fetch_array();
            $passwordEncriptada = $RegistroPasswordEncriptada["pass_cli"];

            if($password==$passwordEncriptada){

                // SQL para UPDATE
                $sqlModificarCliente = "UPDATE altaclientes SET nom_cli='$nombre' WHERE cod_cli='$codigo'";

                if($conexion->query($sqlModificarCliente)){

                // Se modifica el registro y se le reenvía al formulario inicial
                echo "<script>
                        alert('Registro modificado');
                        window.location.href='./verClientes.php';
                      </script>";                         

                } else { 

                // Ocurrio un error
                echo "Error al modificar el registro <br>
                    <a href='verClientes.php'>Volver</a>            
                ";
            }  

            } else {

                $passEncrypt = password_hash($password, PASSWORD_DEFAULT);

                // SQL para UPDATE
                $sqlModificarCliente = "UPDATE altaclientes SET nom_cli='$nombre', pass_cli='$passEncrypt' WHERE cod_cli='$codigo'";

                if($conexion->query($sqlModificarCliente)){

                // Se modifica el registro y se le reenvía al formulario inicial
                echo "<script>
                        alert('Registro modificado');
                        window.location.href='./verClientes.php';
                      </script>";                         

                } else { 

                    // Ocurrio un error
                    echo "Error al modificar el registro <br>
                        <a href='verClientes.php'>Volver</a>            
                    ";
                } 
               
            }
            
        ?>        
    </body>
</html>