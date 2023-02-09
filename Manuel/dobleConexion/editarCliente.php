<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Editar Cliente</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6" style="margin-top:40px;">
                    <?php
                        // Recibimos los datos por GET
                        $codigo = $_GET["c"];

                        // Establecemos conexion con la BBDD
                        //$conexion = new mysqli("10.10.10.199","fila3","1234","fila3"); VOLVER
                        $conexion = new mysqli("localhost","fila3","1234","fila3");

                        // SQL para buscar
                        $sqlConsultaCliente = "SELECT * FROM clientes WHERE cod_cli='$codigo'";

                        $ejecutarSqlConsultaCliente = $conexion->query($sqlConsultaCliente);
                            
                        $registro = $ejecutarSqlConsultaCliente->fetch_array();           
                        $nombre = $registro["nom_cli"];  
                        $email = $registro["email_cli"];                    
                    ?>   
                    
                    <form action="modificaCliente.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" value="<?php echo $nombre;?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" value="<?php echo $email;?>" class="form-control">
                        </div>
                        <div class="mb-3">                            
                            <input type="hidden" name="codigo" value="<?php echo $codigo?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary mb-3">Actualizar</button>
                        </div>
                    </form>                        
                </div> <!-- div.col-6 -->
            </div> <!-- div.row -->
        </div> <!-- div.container -->
        

    </body>
</html>