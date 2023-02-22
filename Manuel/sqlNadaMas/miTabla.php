<?php
    $conexion = new mysqli("10.10.10.199","todos","1234","clase");

    $crearTabla = "CREATE TABLE if not exists manuelcp(
                        cod_cli int(3) NOT NULL,
                        nom_cli varchar(50) NOT NULL,
                        aps_cli varchar(50) NOT NULL,
                        email_cli varchar(100) NOT NULL,                                              
                        registro_cli time NOT NULL
                        )";

    if($conexion->query($crearTabla)){
        echo "Tabla creada correctamente<br>";

        $anadirColumna = "ALTER TABLE manuelcp                            
                            ADD COLUMN if not exists pass_cli varchar(100) NOT NULL";
        
        if($conexion->query($anadirColumna)){
            echo "Añadida columna. Tabla modificada correctamente<br>";

            $anadirPrimaryKey = "ALTER TABLE manuelcp 
            ADD PRIMARY KEY (cod_cli)";    

            if($conexion->query($anadirPrimaryKey)){
                echo "Añadida clave primaria. Tabla modificada correctamente<br>";

                $modificarColumna = "ALTER TABLE manuelcp
                    MODIFY cod_cli int(5) AUTO_INCREMENT, AUTO_INCREMENT = 1"; 

                    if($conexion->query($modificarColumna)){
                        echo "Añadido campo cod_cli autoincremental. Tabla modificada correctamente<br>";

                    } else {
                        echo "Error al modificar la tabla.";
                    }

            } else {
                echo "Error al modificar tabla.";
            }
        } else {
            echo "Error al modificar tabla.";
        }

    } else {
        echo "Error al crear tabla.";
    }                    

?>