<?php

    //Datos provenientes de registro.php

    $mail=base64_decode($_GET["envio"]);

    $con=new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");

    $sql="UPDATE usuarios SET activo_usu=1 WHERE email_usu='$mail'";

    if($con->query($sql))
    {
        $consultar = "SELECT * FROM usuarios WHERE email_usu='$mail'";
		$ejecutar = $con->query($consultar);
		$registro = $ejecutar->fetch_array();
		$cod = $registro["cod_usu"];
        $nombre=$registro["nombre_usu"];
        
        // $cod = $con->insert_id;

        //mkdir("./images/avatares/$cod",0777);	no vamos a crear una carpeta cada vez que se registre el usuario
        
        // usuario activado, le enviamos otro correo de confirmacion

        
	$para = "$mail";
	$asunto = "Su cuenta de bookbusters se ha activado";
	$mensaje = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>EMAIL</title>
            <script src="https://kit.fontawesome.com/7b8eabe9ec.js" crossorigin="anonymous"></script>
            <style>
        
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,600,400italic,600italic|Roboto+Slab:400,700");
            body{
                color: #7f888f;
        font-family: "Open Sans", sans-serif;
        font-size: 13pt;
        font-weight: 400;
        line-height: 1.65;
            }
            a{
                text-decoration:none;
                color:#ff39ba;
            }
            a:hover{
                color:#ff39bb;
            }
            hr{
                border:none;
            }
            </style>
        </head>
        <body>
        
            <div style="float:left; width:90%; margin-left:5%">
        
            
            <div style="float:left; width:50%">
            <a href="https://bookbusters.es/index.php" style="width: 15%; margin-top: 2%;"><img src="https://bookbusters.es/images/logo.png"></a>
            </div>    
            
            <div style="float:left; width:50%">
            <a style="font-size:large; text-align:right; margin-top: 2%; float: right;color:#ff39ba; text-decoration: none;" href="https://bookbusters.es/index.php" class="fa fa-home" aria-hidden="true"></a>
            </div>        
            <div style="float:left; width:100%">
                <hr style="background-color:#ff39ba; height:4px">
        
        
                <center>
                <h1>Hola '.$nombre.', bienvenido a Bookbusters</h1>
                </center>
        
                <br>
                                
                <p style="float:left; margin-left: 1%;">ya puedes acceder a bookbusters pinchando en el siguiente enlace:</p>
                <br>
                <br>
                <br>
        
        
                <a href="https://bookbusters.es/login.html">Accede a bookbusters</a>
                
                <br>
                <br>
        
        
                
                    <img style="margin-left:42.5%; width:15%;" src="https://bookbusters.es/images/Bookbusterspre.png" alt="" />
                    <h4 style="margin-left: 1%;">Nota: Este mail ha sido generado automáticamente desde bookbusters.es</h4>
                </div>
        
            
        
            </div>
        
        </body>
        </html>';

        
                // "<h1>Bienvenido a Bookbusters</h1>
                // <br>
                // <img src='https://bookbusters.es/images/Bookbusters (3).png'>
                // <br>
                // <p>Ya puedes acceder a tu cuenta pinchando en el siguiente enlace</p>
                // <br>
                // <a href='https://bookbusters.es/login.html'>Accede a Bookbusters</a>
                // ";

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