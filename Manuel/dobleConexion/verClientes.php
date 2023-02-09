<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/7b8eabe9ec.js" crossorigin="anonymous"></script>
        <title>Consulta Clientes</title>
    </head>
    <body>
        <div class="container" style="margin-top:20px;">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <h4>Clientes de la empresa</h4>
                    <hr>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th><th>Email</th><th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                //$conexion = new mysqli("10.10.10.199","fila3","1234","fila3"); VOLVER
                                $conexion = new mysqli("localhost","fila3","1234","fila3");
                                $sqlConsultaClientes = "SELECT * FROM clientes";
                                $ejecutarSqlConsultaClientes = $conexion->query($sqlConsultaClientes);
                                foreach($ejecutarSqlConsultaClientes as $registro){
                                    $codigo = $registro["cod_cli"];
                                    $nombre = $registro["nom_cli"];
                                    $email = $registro["email_cli"];
                                    echo "
                                        <tr>
                                            <td>$nombre</td>
                                            <td>$email</td>
                                            <td>
                                                <a href='editarCliente.php?c=$codigo'style='margin-right:10px; margin-left:10px'>
                                                    <i class='fa-solid fa-edit' style='color:black'></i>
                                                </a> 
                                                <a href='borraCliente.php?c=$codigo'>
                                                    <i class='fa-solid fa-trash' style='color:black'></i>
                                                </a>
                                            </td>
                                        </tr>
                                    ";
                                }                            
                            ?>
                        </tbody>
                    </table>
                </div> <!-- div.col-4 -->
            </div> <!-- div.row-->
        </div> <!-- div.container -->       
    </body>
</html>