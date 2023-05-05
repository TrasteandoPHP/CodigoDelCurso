<?php

    //Datos provenientes de registro.php

    $mail=base64_decode($_GET["mail"]);

    $con=new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");

    $sql="UPDATE usuarios SET activo_usu=1 WHERE email_usu='$mail'";

    if($con->query($sql))
    {
        $consultar = "SELECT * FROM usuarios WHERE email_usu='$mail'";
		$ejecutar = $con->query($consultar);
		$registro = $ejecutar->fetch_array();
		$cod = $registro["cod_usu"];
        
        // $cod = $con->insert_id;

        //mkdir("./images/avatares/$cod",0777);	no vamos a crear una carpeta cada vez que se registre el usuario
        
        // usuario activado, le enviamos otro correo de confirmacion

        
	$para = "$mail";
	$asunto = "Su cuenta de bookbusters se ha activado";
	$mensaje = "<h1>Bienvenido a Bookbusters</h1>
			<br>
            <img src='https://bookbusters.es/images/Bookbusters (3).png'>
            <br>
            <p>Ya puedes acceder a tu cuenta pinchando en el siguiente enlace</p>
            <br>
            <a href='https://bookbusters.es/login.html'>Accede a Bookbusters</a>
			";

	$header = "MIME-Version: 1.0 \r\n";
	$header .= "Content-type:text/html;charset=UTF-8 \r\n";
	$header .= "From: administracion@bookbusters.es";
	mail($para, $asunto, $mensaje, $header);

    header("location:https://bookbusters.es/login.html");


    }
    else
    {
        //no se ha activado, enviamos mail de error
        $para = "$mail";
        $asunto = "Su cuenta de bookbusters NO se ha activado";
        $mensaje = "<h1>Consulte con el Administrador</h1>
                <br>
                <img src='https://bookbusters.es/images/Bookbusters (3).png'>
                ";

        $header = "MIME-Version: 1.0 \r\n";
        $header .= "Content-type:text/html;charset=UTF-8 \r\n";
        $header .= "From: administracion@bookbusters.es";
        mail($para, $asunto, $mensaje, $header);

    }

    $con->close();

?>