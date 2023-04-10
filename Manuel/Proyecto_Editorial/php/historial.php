<?php
    // Recoger los datos
    $usuario = $_POST["nombre"];
            
    $conexion = new mysqli("10.10.10.114","daniel","1234","biblioteca2");
                $sqlConsultaLibrosLeidos = "SELECT * FROM reservas WHERE cod_usu='$usuario'";
                $ejecutarSqlConsultaLibrosLeidos = $conexion->query($sqlConsultaLibrosLeidos);
                if($ejecutarSqlConsultaLibrosLeidos->fetch_array()){
                    foreach ($ejecutarSqlConsultaLibrosLeidos as $registro) {
                        $codigoLibro = $registro["cod_lib"];
                        $codigoUsuario = $registro["cod_usu"];
                        $fechaInicial = $registro["finicial"];
                        $fechaEntrega = $registro["fentrega"];

                        echo "
                            <article>
                                <a href='#' class='image'><img src='images/Libro_01.jpg' alt=''/></a>
                                <h3>Título</h3>
                                <p>$codigoLibro</p>
                                <p>$codigoUsuario</p>
                                <p>$fechaInicial</p>
                                <p>$fechaEntrega</p>
                                <ul class='actions'>
                                    <li><a href='#' class='button'>Ver</a></li>
                                </ul>
                            </article>                 
                        ";                        
                    }
                          
                } else {

                    echo "
                        <script>
                            alert ('No se encontraron registros.');                            
                        </script>
                    ";                     
                }                 
?>