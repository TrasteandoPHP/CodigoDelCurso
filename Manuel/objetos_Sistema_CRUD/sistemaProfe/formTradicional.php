<?php
    $datos = array(
                    array("1","Alfonso","Carro"),
                    array("2","Pablo","Gesto"),
                    array("3","Javier","Antón"),
                    array("4","Dino","Nuñez"),
                    array("5","Luis","Pazos"),
                    array("6","Isa","Ennes"),
                    array("7","Manolo","García")                    
    );
?>
<!DOCTYPE html>
<html lang="en">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <title>Formulario Tradicional</title>
    </head>
    <body class="offset-3 col-6">
        <table class="table table-striped my-5">
            <thead>
                <tr>
                    <th></th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                  foreach($datos as $registro){
                    $cod = $registro[0];
                    $nom = $registro[1];
                    $ape = $registro[2];
                  ?>  
                    <tr id="tr<?php echo $cod?>">
                        <td><button onclick="encender(<?php echo $cod?>)">Editar</button></td>
                        <form action="actualizaArray.php" method="GET">
                            <td>
                                <span><?php echo $nom?></span>
                                <input type="text" name="nombre" value="<?php echo $nom?>" style="display:none">    
                            </td>
                            <td>
                                <span><?php echo $ape?></span>
                                <input type="text" name="apellido" value="<?php echo $ape?>" style="display:none">
                            </td>
                            <td>
                                <input type="hidden" name="codigo" value="<?php echo $cod?>">
                                <button>Actualizar</button>
                            </td> 
                        </form>                       
                    </tr>                   
                <?php    
                  }              
                ?>                
            </tbody>
        </table>
        <script>
            function encender(id){
                    // $("table tbody span").show();
                    // $("table tbody input").hide();                    

                    $("tr#tr"+id +" input").toggle();
                    $("tr#tr"+id +" span").toggle();
                } 
        </script>           
    </body>
</html>
