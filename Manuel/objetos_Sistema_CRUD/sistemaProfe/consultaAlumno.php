<?php
    include("./sistemaCRUD.php");
    $alumnos = new Consultar("alumnos","");
    $consultaTodosAlumnos = $alumnos->consultarQuery();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
              crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
                crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/7b8eabe9ec.js" crossorigin="anonymous"></script>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.4.0/jquery.quicksearch.js" 
                integrity="sha512-U+KdQxKTQfGIQJBs2QyDiU3PxJoSu+ffUJV5AAuMmwSFs1CjBz5Xk3/qWrT0mBHOM/C15q3DMko6HJL+37MYNA==" 
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <title>Formulario</title>
    </head>
    <body>
        <div class="container text-center mt-4">
            <div class="row offset-2 col-4 my-5">
                <button class="btn btn-primary col-2 py-2" onclick="window.location.href='index.html'">
                    <i class="fa fa-home"></i>
                </button> 
            </div>
            <div class="row mb-3">
                <div class="offset-2 col-8">
                    <h4 class="mb-3 display-4">Consulta de Alumnos</h4>                  
                </div>
                <div class="offset-2 col-8">
                    <div class="row">
                        <input class="form-control" type="text" id="buscador" placeholder="Buscar.........">
                    </div>
                    <div class="row py-4">
                        <table class="table table-striped">
                            <thead>
                                <tr class="table table-dark">
                                    <th>Nombre</th>
                                    <th>Primer Apellido</th>
                                    <th>Segundo Apellido</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>        
                            </thead>
                            <tbody>
                                <!-- bucle -->
                                <?php
                                    foreach($consultaTodosAlumnos as $registro){
                                        $nombre = $registro["nom_alu"];
                                        $apellidosCompletos = $registro["ap_alu"];
                                        $email = $registro["email_alu"];
                                        // Vamos a explotar el apellido PERO ojo porque tenemos un problema.
                                        $apellidos = explode(" ", $apellidosCompletos);
                                        $apellido1 = $apellidos[0];
                                        $apellido2 = $apellidos[1];
                                ?>        
                                        <tr>
                                            <td><?php echo $nombre?></td>
                                            <td><?php echo $apellido1?></td>
                                            <td><?php echo $apellido2?></td>
                                            <td><?php echo $email?></td>
                                            <td>
                                                <i class="fa fa-edit"></i>
                                                <i class="fa fa-trash"></i>
                                            </td>
                                        </tr>
                                <?php        
                                    }                            
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>          
            </div>          
        </div>
        
        <script>
            $(function(){
                $("#buscador").quicksearch("table tbody tr");
            }) 
        </script>
        
    </body>
</html>