<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>funciones</title>
    </head>
    <body>
        <h1>Selecciona Meses</h1>
        <label for="desde">Desde:</label>
        <select name="desde">
            <option value="">Desde...</option>
            <?php
                $mesActual = date("m");
                $yearActual = date("Y");
                for($i=1; $i<=$mesActual; $i++){
                    switch($i){
                        case 1: {$mesMostrar = "ENERO";
                                $valorDesde = $yearActual."-".$i."-01";   
                                break;
                        }
                        case 2: {$mesMostrar = "FEBRERO";
                                $valorDesde = $yearActual."-".$i."-01";
                                break;
                        }
                        case 3: {$mesMostrar = "MARZO";
                                $valorDesde = $yearActual."-".$i."-01";
                                break;
                        }
                        case 4: {$mesMostrar = "ABRIL";
                                $valorDesde = $yearActual."-".$i."-01";
                                break;
                        }
                        case 5: {$mesMostrar = "MAYO";
                                $valorDesde = $yearActual."-".$i."-01";
                                break;
                        }
                        case 6: {$mesMostrar = "JUNIO";
                                $valorDesde = $yearActual."-".$i."-01";
                                break;
                        }
                        case 7: {$mesMostrar = "JULIO";
                                $valorDesde = $yearActual."-".$i."-01";
                                break;
                        }
                        case 8: {$mesMostrar = "AGOSTO";
                                $valorDesde = $yearActual."-".$i."-01";
                                break;
                        }
                        case 9: {$mesMostrar = "SEPTIEMBRE";
                                $valorDesde = $yearActual."-".$i."-01";
                                break;
                        }
                        case 10: {$mesMostrar = "OCTUBRE";
                                $valorDesde = $yearActual."-".$i."-01";
                                break;
                        }
                        case 11: {$mesMostrar = "NOVIEMBRE";
                                $valorDesde = $yearActual."-".$i."-01";
                                break;
                        }    
                        case 12: {$mesMostrar = "DICIEMBRE";
                                $valorDesde = $yearActual."-".$i."-01";
                                break;
                        }                                   
                    }
                    echo "<option value='$valorDesde'>$mesMostrar</option>";
                }       
            ?>
        </select>
        
        <label for="hasta">Hasta:</label>
        <select name="hasta">
            <option value="">Hasta...</option>
            <?php                
                for($i=1; $i<=$mesActual; $i++){
                    switch($i){
                        case 1: {$mesMostrar = "ENERO";
                                $valorHasta = $yearActual."-".$i."-31";   
                                break;
                        }
                        case 2: {$mesMostrar = "FEBRERO";
                                $valorHasta = $yearActual."-".$i."-28";
                                break;
                        }
                        case 3: {$mesMostrar = "MARZO";
                                $valorHasta = $yearActual."-".$i."-31";
                                break;
                        }
                        case 4: {$mesMostrar = "ABRIL";
                                $valorHasta = $yearActual."-".$i."-30";
                                break;
                        }
                        case 5: {$mesMostrar = "MAYO";
                                $valorHasta = $yearActual."-".$i."-31";
                                break;
                        }
                        case 6: {$mesMostrar = "JUNIO";
                                $valorHasta = $yearActual."-".$i."-30";
                                break;
                        }
                        case 7: {$mesMostrar = "JULIO";
                                $valorHasta = $yearActual."-".$i."-31";
                                break;
                        }
                        case 8: {$mesMostrar = "AGOSTO";
                                $valorHasta = $yearActual."-".$i."-31";
                                break;
                        }
                        case 9: {$mesMostrar = "SEPTIEMBRE";
                                $valorHasta = $yearActual."-".$i."-30";
                                break;
                        }
                        case 10: {$mesMostrar = "OCTUBRE";
                                $valorHasta = $yearActual."-".$i."-31";
                                break;
                        }
                        case 11: {$mesMostrar = "NOVIEMBRE";
                                $valorHasta = $yearActual."-".$i."-30";
                                break;
                        }    
                        case 12: {$mesMostrar = "DICIEMBRE";
                                $valorHasta = $yearActual."-".$i."-31";
                                break;
                        }                                   
                    }
                    echo "<option value='$valorHasta'>$mesMostrar</option>";
                }       
            ?>
        </select>
    </body>
</html>