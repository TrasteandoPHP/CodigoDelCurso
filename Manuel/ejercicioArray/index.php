<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrays</title>
    </head>
    <body>
        <?php
            $escuela = array(
                array(
                    array("Medellin","Cali","Conde"),
                    array("Fundación","Administración")                    
                ),
                array(
                    array("Fila1","Fila2","Fila3"),
                    array("Mesa1","Mesa2")
                ),
                array(
                array("Pablo","Javi"),
                array("Manolo","Javi"),
                array("Manu","Dani","Peter"),
                array("Mica","Sol"),
                array("Inés","Carlos","Rafa"),
                array("Aris"),
                array("Alba","Alejandra")
                )
            );
            
            for($i=0; $i < count($escuela);$i++){
                for($j=0; $j < count($escuela[$i]);$j++){
                    for($k=0; $k < count($escuela[$i][$j]); $k++){
                        echo $escuela[$i][$j][$k]."<br>";
                    }                                        
                }
            } 
            echo "<hr>";
            //echo $escuela[0][0][0];

            foreach($escuela as $escue){
                foreach($escue as $esc){
                    foreach($esc as $es){
                        echo $es."<br>";
                    }
                }
            }
        ?> 
    </body>
</html>