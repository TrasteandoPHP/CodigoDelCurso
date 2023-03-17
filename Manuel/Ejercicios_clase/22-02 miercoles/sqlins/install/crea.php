<?php

	//tengo que hacer lo siguiente:
		// 1. Crear una tabla de administradores
		// 	Insertar el administrador en la tabla
		// 2. Crear una tabla de identidad
		// 	Insertar en la tabla de indetidad datos
		// 3. Crear la tabla de productos
		// 4. Crear una carpeta en el directorio raíz llamada imagenes

	//nos conectamos a nuestra BD
	$conexion = new mysqli("localhost","root","","alfonso");

	
	//LO PRIMERO QUE VOY A HACER ES CREAR LAS TABLAS EN LA BASE DE DATOS:

	//crear las tablas (administrador, identidad y productos)

	//creamos administradores
	$creatablaadm = "CREATE TABLE administradores(
			cod_adm int(3) NOT NULL,
			nom_adm varchar(20) NOT NULL,
			email_adm varchar(100) NOT NULL,
			pass_adm varchar(100) NOT NULL
		)
	";			
	//ejecutamos la creación de la tabla administradores
	$conexion->query($creatablaadm);


	//creamos identidad
	$creatablaide = "CREATE TABLE identidad(
			cod_ide int(3) NOT NULL,
			nom_ide varchar(50) NOT NULL,
			des_ide varchar(300) NOT NULL
		)
	";			
	//ejecutamos la creación de la tabla identidad
	$conexion->query($creatablaide);

	//creamos productos
	$creatablapro = "CREATE TABLE productos(
			cod_pro int(3) NOT NULL,
			nom_pro varchar(50) NOT NULL,
			imagen_pro varchar(300) NOT NULL
		)
	";			
	//ejecutamos la creación de la tabla identidad
	$conexion->query($creatablapro);	


	//YA tenemos las tablas creadas, ahora vamos a definir las claves primarias de cada una de las tablas (administradores, identidad, productos)

	//vamos con administradores
		$claveprimariaadm = "ALTER TABLE administradores
								ADD PRIMARY KEY (cod_adm)
		";
		//ejecutamos la sentencia
		$conexion->query($claveprimariaadm);

	//vamos con identidad
		$claveprimariaide = "ALTER TABLE identidad
								ADD PRIMARY KEY (cod_ide)
		";
		//ejecutamos la sentencia
		$conexion->query($claveprimariaide);	


	//vamos con productos
		$claveprimariapro = "ALTER TABLE productos
								ADD PRIMARY KEY (cod_pro)
		";
		//ejecutamos la sentencia
		$conexion->query($claveprimariapro);


	//VAMOS AHORA A HACER QUE LAS CLAVES PRIMARIAS SEAN AUTOINCREMENTALES EN LAS TABLAS CREADAS ANTERIORMENTE
	
	//vamos con ADMINISTRADORES
		$claveprimariaadm = "ALTER TABLE administradores
								MODIFY cod_adm int(3) NOT NULL AUTO_INCREMENT
		";
		//ejecutamos la sentencia
		$conexion->query($claveprimariaadm);			

	//vamos con IDENTIDAD
		$claveprimariaide = "ALTER TABLE identidad
								MODIFY cod_ide int(3) NOT NULL AUTO_INCREMENT
		";
		//ejecutamos la sentencia
		$conexion->query($claveprimariaide);	


	//vamos con productos
		$claveprimariapro = "ALTER TABLE productos
								MODIFY cod_pro int(3) NOT NULL AUTO_INCREMENT
		";
		//ejecutamos la sentencia
		$conexion->query($claveprimariapro);		

	//ya tenemos todas las tablas listas. AHORA VAMOS A METER REGISTROS EN LA TABLA ADMINISTRADORES E IDENETIDAD (nos vienen volando por POST)
	
	$nomide = $_POST["nombreide"];
	$nomadm = $_POST["nombrea"];
	$email = $_POST["email"];
	$pass = $_POST["pass"];
	$des = $_POST["deside"];

	//vamos a insertar registro en la tabla administradores. Primero tenemos que hashear el password
	$passen = password_hash($pass, PASSWORD_DEFAULT);

	$grabaadm = "INSERT INTO administradores (nom_adm, email_adm, pass_adm) VALUES ('$nomadm','$email','$passen')";
	//ejecutamos la grabación
	$conexion->query($grabaadm);

	//vamos a insertar registro en la tabla identidad.

	$grabaide = "INSERT INTO identidad (nom_ide, des_ide) VALUES ('$nomide','$des')";
	//ejecutamos la grabación
	$conexion->query($grabaide);

	//creamos la carpeta de imagenes en el raíz
	mkdir("./../imagenes",0777);

	echo "La instalación ha finalizado. Gracias";

?>