<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Cliente</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <?php
                        // Recibimos los datos por GET
                        $codigo = $_GET["c"];

                        // Establecemos conexion con la BBDD
                        $conexion = new mysqli("10.10.10.199","fila3","1234","fila3");

                        // SQL para buscar
                        $sqlConsultaCliente = "SELECT * FROM clientes WHERE cod_cli='$codigo'";

                        $ejecutarSqlConsultaCliente = $conexion->query($sqlConsultaCliente);
                            
                        $registro = $ejecutarSqlConsultaCliente->fetch_array();           
                        $nombre = $registro["nom_cli"];  
                        $email = $registro["email_cli"];                    
                    ?>   
                    
                    <form action="modificaCliente.php" method="POST">
                        <input type="text" name="nombre" value="<?php echo $nombre;?>"><br>
                        <input type="text" name="email" value="<?php echo $email;?>"><br>
                        <input type="hidden" name="codigo" value="<?php echo $codigo?>">
                        <input type="submit" value="Update">
                    </form>
                </div> <!-- div.col-6 -->
            </div> <!-- div.row -->
        </div> <!-- div.container -->
        

    </body>
</html>