<?php

$codigo = $_POST["c"];

$conexion = new mysqli("db5012901176.hosting-data.io", "dbu3726201", "PpJ_mP5WdLp!3mPpDb2i@bookaab", "dbs10835059");
$sql_consulta = "SELECT * FROM usuarios WHERE cod_usu='$codigo'";
$ejec = $conexion->query($sql_consulta);

    $reg = $ejec->fetch_array();
    $ema = $reg["email_usu"];
    $emacod = base64_encode($ema);

    // Mandamos mail

    $para = "$ema";
    $asunto = "Active su cuenta de Bookbusters";
    $mensaje = "<h1>Activación de cuenta</h1>
			<br>
            <img src='https://bookbusters.es/images/Bookbusters (3).png'>
            <br>
            <p>Para activar su cuenta pinche el siguiente enlace</p>
            <br>
            <a href='https://bookbusters.es/activacion.php?mail=$emacod'>Active su cuenta</a>
			";

    $header = "MIME-Version: 1.0 \r\n";
    $header .= "Content-type:text/html;charset=UTF-8 \r\n";
    $header .= "From: admministracion@bookbusters.es";
    mail($para, $asunto, $mensaje, $header);

    echo"Mail de activación enviado.";    

?>
