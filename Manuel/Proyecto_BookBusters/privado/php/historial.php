<?php

    session_start();

    if(isset($_SESSION["bookbusters"])){
        // Recogemos el código de usuario de los datos recibidos en la sesión.
        $usuario = $_SESSION["bookbusters"];
        
		// Creamos una conexión	
        $conexion = new mysqli("localhost","busters","1234","biblioteca");
		
		// Buscamos el nombre del usuario a través del código de usuario
		$sqlConsultaNombreUsuario = "SELECT nom_usu FROM usuarios WHERE cod_usu='$usuario'";
		$ejecutarSqlConsultaNombreUsuario = $conexion->query($sqlConsultaNombreUsuario)->fetch_assoc();		
		$nombreUsuario = $ejecutarSqlConsultaNombreUsuario["nom_usu"];
		
		// Consultamos los libros que tiene en préstamo el usuario para generar el historial	
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
                
				// Se devuelve el historial de libros para mostrar en el historial.html
                echo "
                    <article style='display:flex;flex-direction:column;align-items:center;'>
                        <a href='#' class='image'style='text-align:-webkit-center'><img src='$ruta' height='350px' alt=''/></a>
                        <div style='height:60px; width:80%; text-align:center; overflow: hidden;'>
                            <h4>$nombreLibro</h4>
                        </div>
                        <p style='margin:0; font-family:auto;'>Fecha Préstamo</p>
                        <p style='margin:0; font-family:auto; font-size:auto;'>$fechaPrestamo</p>
                        <p style='margin:0; font-family:auto;'>Fecha Devolución</p>
                        <p style='margin:0; font-family:auto; font-size:auto; color:red'>$fechaDevolucion</p>                                
                    </article>                 
                ";                       
            }
                            
        } else {
			
			// Se devuelve mensaje si el usuario no tiene libros en el historial
            echo "
                <message>
                    <h2>Sin historial ............... !!! Parece que no lees mucho....!!!</h2>
                </message>    
            ";                     
        } 
		
	// Se envía el nombre de usuario para mostrar en la cabecera de historial.html
	echo "
		<script>
				$(function(){
					$('#header a.logo strong').last().text('$nombreUsuario');
				})
			
		</script>
	";
		
    } else {
		
		// Se devuelve mensaje si el usuario no tiene sesión abierta
		echo "
            <message>
                <h2>No tienes permisos para estar aquí.  Por favor, inicia sesión.</h2>
                <br><br><br>
		        <button onclick='window.location.href=`./../login.html`'>Volver</button>
            </message>
        ";
	}
              			  
?>