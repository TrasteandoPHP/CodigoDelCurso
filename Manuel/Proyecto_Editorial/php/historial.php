<?php
    // Recoger los datos
    $usuario = $_POST["nombre"];
            
    $conexion = new mysqli("10.10.10.114","daniel","1234","biblioteca2");
    //$conexion = new mysqli("10.10.10.199","busters","1234","biblioteca");

    $sqlConsultaLibrosLeidos = "SELECT * FROM prestamos INNER JOIN libros USING(cod_lib) WHERE cod_usu='$usuario'";
    //$sqlConsultaLibrosLeidos = "SELECT * FROM prestamos INNER JOIN libros USING(cod_lib) WHERE cod_usu='$usuario'";
    $ejecutarSqlConsultaLibrosLeidos = $conexion->query($sqlConsultaLibrosLeidos);
    if($ejecutarSqlConsultaLibrosLeidos->fetch_array()){
        foreach ($ejecutarSqlConsultaLibrosLeidos as $registro) {
            $nombreImagen = $registro["imagen_lib"];
            $ruta = "./images/".$nombreImagen;
            $nombreLibro = $registro["titulo_lib"];
            $codigoUsuario = $registro["cod_usu"];

            $fechaInicial = $registro["fentrega_pres"];
            $fechaInicial = explode("-",$fechaInicial);                        
            $fechaPrestamo = $fechaInicial[2]."-".$fechaInicial[1]."-".$fechaInicial[0];                

            $fechaEntrega = $registro["fprevista_pres"];
            $fechaEntrega = explode("-",$fechaEntrega);                        
            $fechaDevolucion = $fechaEntrega[2]."-".$fechaEntrega[1]."-".$fechaEntrega[0];
            
            echo "                
                <article>
                    <a href='#' class='image'><img src='$ruta' alt='' /></a>
                    <div style='height:60px; width:80%; text-align:center; overflow: hidden;'>
                        <h4 style='font-family:cursive'>$nombreLibro</h4>
                    </div>
                    <p style='margin:0; font-family:auto;'>Fecha Préstamo</p>
                    <p style='margin:0; font-family:auto; font-size:auto;'>$fechaPrestamo</p>
                    <p style='margin:0; font-family:auto;'>Fecha Devolución</p>
                    <p style='margin:0; font-family:auto; font-size:auto; color:red'>$fechaDevolucion</p>                                
                </article>                  
            ";                      
        }
                          
    } else {
        echo "
            <article>
                <h2>Sin historial. Parece que no lees mucho....</h2>
            </article>    
        ";                     
    }                 
?>