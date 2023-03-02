<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <title>Visualizar Registros Clicks</title>
    </head>
    <body>
        <div class="container">
            <div class="row text-center">
                <div class="offset-2 col-8 my-5">

                    <table class="table table-striped">
                        <tr>                           

                            <?php
                                $conexion = new mysqli("localhost","root","","contadorClicks");
                                
                                $sql1 = "SELECT * FROM botonPulsado WHERE num_bot='1'";
                                $ejecutarSql1 = $conexion->query($sql1);
                                $clicksBoton1 = $ejecutarSql1->num_rows;

                                $sql2 = "SELECT * FROM botonPulsado WHERE num_bot='2'";
                                $ejecutarSql2 = $conexion->query($sql2);
                                $clicksBoton2 = $ejecutarSql2->num_rows;

                                $sql3 = "SELECT * FROM botonPulsado WHERE num_bot='3'";
                                $ejecutarSql3 = $conexion->query($sql3);
                                $clicksBoton3 = $ejecutarSql3->num_rows;
                            ?>

                            <th>Botón1</th>
                            <th>Botón2</th>
                            <th>Botón3</th>
                        </tr>
                        <tr>
                            <td><?php echo $clicksBoton1 ?></td>
                            <td><?php echo $clicksBoton2 ?></td>
                            <td><?php echo $clicksBoton3 ?></td>
                        </tr>    
                    </table>
                    <div class='alert alert-primary my-4 py-4' role='alert'>El número total de clicks es <?php echo $clicksBoton1+$clicksBoton2+$clicksBoton3?><br></div>                  
                    <?php
                        
                        $ejecutarSql1->free_result();
                        $ejecutarSql2->free_result();
                        $ejecutarSql3->free_result();
                        $conexion->close();                        
                    ?>                                               
                </div>
            </div>
        </div>        
    </body>
</html>