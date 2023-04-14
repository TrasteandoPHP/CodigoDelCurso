<?php

    session_start();

    if(isset($_SESSION["bookbusters"])){
        // Recoger los datos
        $usuario = $_SESSION["bookbusters"];
        echo $usuario;
                
        $conexion = new mysqli("10.10.10.114","daniel","1234","biblioteca2");
        //$conexion = new mysqli("localhost","busters","1234","biblioteca");

        $sqlConsultaLibrosLeidos = "SELECT * FROM prestamos INNER JOIN libros USING(cod_lib) WHERE cod_usu='$usuario'";    
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
                    <article style='display:flex;flex-direction:column;align-items:center;'>
                        <a href='#' class='image'style='text-align:-webkit-center'><img src='$ruta' height='350px' alt=''/></a>
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
                    <h2>Sin historial ............... !!! Parece que no lees mucho....!!!</h2>
                </article>    
            ";                     
        }  
    } else {
		echo "
            <article>
                <h2>No tienes permisos para estar aquí.  Por favor, inicia sesión.</h2>
                <br><br><br>
		        <button onclick='window.location.href=`./index.html`'>Volver</button>
            </article>
        ";
	}
                   
?>