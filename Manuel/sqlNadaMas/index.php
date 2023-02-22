<?php
    $conexion = new mysqli("localhost","root","","");

    // Lenguaje SQL para crear una base de datos.
    $crearBD ="CREATE database IF NOT EXISTS nombreBD DEFAULTCHARACTER SET utf8mb4_general_ci";

    // Lenguaje SQL para crear una tabla.
    $crearTabla = "CREATE table IF NOT EXISTS nombreTabla(
                        cod_cli int(3) NOT NULL,
                        nom_cli varchar(50) NOT NULL,
                        ap1_cli varchar(50) NOT NULL,
                        ap2_cli varchar(50) NOT NULL,
                        nac_cli date NOT NULL,
                        registro_cli time NOT NULL
                        )";

    // Lenguaje para añadir una columna. Modificaciones.
    $anadirColumna = "ALTER TABLE nombreTabla 
                            ADD COLUMN email_cli varchar(100),
                            ADD COLUMN pass_cli varchar(100)";

    // Vamos a decir en la tabla quién es la clave primaria y quién es el autoincremental.
    $anadirPrimaryKey = "ALTER TABLE nombreTabla 
                            ADD PRIMARY KEY cod_cli";     


    // Modificar datos de una columna y añadir el autoincremental. 
    $modificarColumna = "ALTER TABLE nombreTabla(
                            MODIFY cod_cli int(5) AUTO_INCREMENT, AUTOINCREMENT = 2)"; 
?>