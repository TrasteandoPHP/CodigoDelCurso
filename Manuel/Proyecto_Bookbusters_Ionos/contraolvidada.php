<?php

    $ema=$_POST["email"];
    $emacod = base64_encode($_POST["email"]);

    $codunico=uniqid(); //hay que grabarlo en usuarios 

    $con=new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");


    $sql="SELECT * FROM usuarios WHERE email_usu='$ema'";
    $ejecutar=$con->query($sql);

    if($registro=$ejecutar->fetch_array())
    {
        $nombre=$registro["nom_usu"];
        $codusu=$registro["cod_usu"];
        $sqlcodunico="UPDATE usuarios SET uniq_usu='$codunico' WHERE cod_usu=$codusu";
        $con->query($sqlcodunico);
        $para = "$ema";
        $asunto = "Generación de nueva contraseña";
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
                <h1>Hola '.$nombre.'</h1>
                </center>
        
                <br>
                                
                <p style="float:left; margin-left: 1%;">pincha el siguiente enlace para cambiar tu contraseña:</p>
                <br>
                <br>
                <br>
        
                <!-- Enlace que corresponda -->
        
                <a href="https://bookbusters.es/change.php?envio='.$emacod.'&i='.$codunico.'">Modifica tu contraseña</a>
                
                <br>
                <br>
        
        
                
                    <img style="margin-left:42.5%; width:15%;"  src="https://bookbusters.es/images/Bookbusterspre.png" alt="" />
                    <h4 style="margin-left: 1%;">Nota: Este mail ha sido generado automáticamente desde bookbusters.es</h4>
                    </div>
        
            
        
            </div>
        
        </body>
        </html>';

        
                //  "<h1>Hola $nombre, pincha en el siguiente enlace para cambiar tu contraseña</h1>
                // <br>
                // <img src='https://bookbusters.es/images/Bookbusters (3).png'>
                // <br>
                // <a href='https://bookbusters.es/change.php?envio=$emacod&i=$codunico'>Modifica tu contraseña</a> -->
                

        $header = "MIME-Version: 1.0 \r\n";
        $header .= "Content-type:text/html;charset=UTF-8 \r\n";
        $header .= "From: administracion@bookbusters.es";
        mail($para, $asunto, $mensaje, $header);

        header("location:https://bookbusters.es/cambiarpass.html");
    }
    else
    {
        echo "No estás registrado en nuestra web, puedes registrarte ahora";
        header("location:https://bookbusters.es/registro.html");
    }

    $con->close();


?>