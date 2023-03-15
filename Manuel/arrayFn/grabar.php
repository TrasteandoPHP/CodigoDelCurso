<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Resultados</title>
    </head>
    <body class="container row offset-4 col-4 mt-5">
       
            <table class="table table-striped">
                <tr>
                    <th>Producto</th><th>Resultado</th>
                </tr>
            <?php
                include("./funciones.php");
                $numLineas = $_POST["lineas"];
                $datos = array();   

                for($i=1; $i<=$numLineas; $i++){
                    if($_POST["caja$i"]!=""){            
                        array_push($datos, $_POST["caja$i"]);
                    }
                }

                $respuestaDeGrabaciones = recibirArray($datos);

                // foreach($respuestaDeGrabaciones as $respuesta){
                //     echo $respuesta."<br>";
                // }
                // echo "<br><hr>";
                
                $arrayFinal = montarArrayRespuestas($datos, $respuestaDeGrabaciones);


                foreach($arrayFinal as $registroFinal){        
                    $producto = $registroFinal[0];
                    $respuesta = $registroFinal[1];
                    echo "
                        <tr><td>$producto</td><td>$respuesta</td><br>
                    ";
                }    
            ?>
        </table>
    </body>
</html>



