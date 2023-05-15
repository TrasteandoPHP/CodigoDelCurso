<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$con=new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");
$sqlsel="SELECT
DATEDIFF(fprevista_pres,now()) as resta,
cod_lib,
cod_usu,
email_usu,
titulo_lib,
disponible_lib,
fentrega_pres,
fprevista_pres
FROM prestamos
INNER JOIN libros USING(cod_lib)
INNER JOIN usuarios  Using(cod_usu)
WHERE
(DATEDIFF(fprevista_pres,now()) <=2 && DATEDIFF(fprevista_pres,now())>=0) &&
disponible_lib = 1";
$fecha=new DateTime();
$ejec=$con->query($sqlsel);
$ejefech=$ejec;
if($ejefech->fetch_array())
{
    foreach($ejec as $reg)
    {   $usu=$reg["cod_usu"];
        $clib=$reg["cod_lib"];
        $dias=$reg["resta"];
        $para=$reg["email_usu"];
        $titulo=$reg["titulo_lib"];
        $asunto="Devolucion de libro en $dias dias";
        $mensaje = "
        <div style='display:flex;'>            
            <div>
               <img src='https://bookbusters.es/images/notificaemail.jpg'>
            </div>
            <div>
            </div>
            </div>
                    <div style='text-align:center;width:70%;height:50px;margin-left:15%;border-radius:9px;'><h5 style='padding:10px;'>Nos ponemos en contacto con ud. para recordarle que esta pendiente la devolucion del libro $titulo </h4></div>
                       ";
            $header = "MIME-Version: 1.0 \r\n";
            $header .= "Content-type:text/html;charset=UTF-8 \r\n";
            $header.= "Content-type:image/apng \r\n"; 
            $header .= "From: administracion@bookbusters.es";
                    if(mail($para, $asunto, $mensaje, $header))
                    {
                        $sql="INSERT INTO notificaciones (cod_usu,cod_lib,nom_lib,fentrega_not) 
                        VALUES ('$usu','$clib','$titulo',now())";
                        if($con->query($sql))
                        {
                           $badnerola =1; echo "<font color='white'>ffsffsdfdffdfffffd</font>";
                        }
                        else
                        {
                            echo "<font color='white'>NO GRABO</font>";
                        }
                            
                    }
                    else
                        {
                            echo "<font color='white'>NO MAIL</font>";
                        }
                            
                   

    
    }
              //  header('location:http://bookbusters.es');


              echo "<script>setTimeout('window.close();',2000);</script>";    
             
             
}else{
  
echo "dfsdf";
}
// echo "<script>setTimeout('window.close();',4000);</script>";
if($badnerola ==1)
{
    
}

?>


</body>
</html>