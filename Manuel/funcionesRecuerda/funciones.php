<?php
    function rellena_desde(){
        $mesActual = date("m");
        $yearActual = date("Y");
        for ($i = 1; $i <= $mesActual; $i++) {
            switch ($i) {
                case 1: {
                        $mesMostrar = "ENERO";
                        $valorDesde = $yearActual . "-" . $i . "-01";
                        break;
                    }
                case 2: {
                        $mesMostrar = "FEBRERO";
                        $valorDesde = $yearActual . "-" . $i . "-01";
                        break;
                    }
                case 3: {
                        $mesMostrar = "MARZO";
                        $valorDesde = $yearActual . "-" . $i . "-01";
                        break;
                    }
                case 4: {
                        $mesMostrar = "ABRIL";
                        $valorDesde = $yearActual . "-" . $i . "-01";
                        break;
                    }
                case 5: {
                        $mesMostrar = "MAYO";
                        $valorDesde = $yearActual . "-" . $i . "-01";
                        break;
                    }
                case 6: {
                        $mesMostrar = "JUNIO";
                        $valorDesde = $yearActual . "-" . $i . "-01";
                        break;
                    }
                case 7: {
                        $mesMostrar = "JULIO";
                        $valorDesde = $yearActual . "-" . $i . "-01";
                        break;
                    }
                case 8: {
                        $mesMostrar = "AGOSTO";
                        $valorDesde = $yearActual . "-" . $i . "-01";
                        break;
                    }
                case 9: {
                        $mesMostrar = "SEPTIEMBRE";
                        $valorDesde = $yearActual . "-" . $i . "-01";
                        break;
                    }
                case 10: {
                        $mesMostrar = "OCTUBRE";
                        $valorDesde = $yearActual . "-" . $i . "-01";
                        break;
                    }
                case 11: {
                        $mesMostrar = "NOVIEMBRE";
                        $valorDesde = $yearActual . "-" . $i . "-01";
                        break;
                    }
                case 12: {
                        $mesMostrar = "DICIEMBRE";
                        $valorDesde = $yearActual . "-" . $i . "-01";
                        break;
                    }
            }
            echo "<option value='$valorDesde'>$mesMostrar</option>";
        }
    }

    function rellena_hasta(){
        $mesActual = date("m");
        $yearActual = date("Y");
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
    }
?>