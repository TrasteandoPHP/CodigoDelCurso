<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
        <script src="./lib/jQuery-3.6.3.min.js"></script>   
        <title>Consulta</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="offset-3 col-6 center my-5">
                    <h1 class="py-3 text-center">Consulta de Personas</h1>
                    <table class="table table-striped text-center">
                        <tr>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Estado Persona</th>
                            
                        </tr>
                        <?php
                            $conexion = new mysqli ("10.10.10.199","bareto","1234","bar");
                            $sqlConsultaPersonas = "SELECT * FROM personas";
                            $ejecutarSqlConsultaPersonas = $conexion->query($sqlConsultaPersonas);
                            foreach($ejecutarSqlConsultaPersonas as $registro){
                                $codigoPersona = $registro["cod_per"];
                                $nombrePersona = $registro["nom_per"];
                                $edadPersona = $registro["edad_per"];
                                $estadoPersona = $registro ["estado_per"];

                                if($estadoPersona == "Abierto"){
                                    echo "
                                    <tr id='$codigoPersona' style='background-color:green'>
                                        <td>
                                            <a href='#' onclick='enviaCodigo(`$codigoPersona`, `$nombrePersona`)'>$nombrePersona</a>
                                        </td>
                                        <td>$edadPersona</td>
                                        <td>$estadoPersona</td>                                        
                                    </tr>                                
                                ";
                                } else {
                                    echo "
                                    <tr id='$codigoPersona' style='background-color:red'>
                                        <td>
                                            <a href='#' onclick='enviaCodigo(`$codigoPersona`, `$nombrePersona`)'>$nombrePersona</a>
                                        </td>
                                        <td>$edadPersona</td>
                                        <td>$estadoPersona</td>                                        
                                    </tr>                                
                                ";
                                }                                
                            }                        
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function enviaCodigo(codigo, nombre){
                $.post("./estadoPersona.php",
                       {codigoPersona:codigo, nombrePersona:nombre},
                       function(resultadoPHP){
                        alert(resultadoPHP);                        
                        window.location.href="./consulta.php";
                       }
                )               
            }
        </script>
    </body>
</html>