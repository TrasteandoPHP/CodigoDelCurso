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
$con=new mysqli("localhost","root","","biblioteca");
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
      
                <div style='display:flex;background:#fdf7df;width:80%;margin-left:10%;border-radius:9px;margin-top:10px;'>            
                    <div>
                    <img style='width:150px;height:150px;margin-left:40%;margin-top:10px;' src='data:image/png;base64,
                    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'>
                    </div>
                       
                <div>
                                <div style='padding:5px;width:100%;height:50px;font-size:13px;margin-top:50px;margin-left:10%;border-radiux:9px;'>
                                ██████╗░░█████╗░░█████╗░██╗░░██╗██████╗░██╗░░░██╗░██████╗████████╗███████╗██████╗░░██████╗
                                ██╔══██╗██╔══██╗██╔══██╗██║░██╔╝██╔══██╗██║░░░██║██╔════╝╚══██╔══╝██╔════╝██╔══██╗██╔════╝
                                ██████╦╝██║░░██║██║░░██║█████═╝░██████╦╝██║░░░██║╚█████╗░░░░██║░░░█████╗░░██████╔╝╚█████╗░
                                ██╔══██╗██║░░██║██║░░██║██╔═██╗░██╔══██╗██║░░░██║░╚═══██╗░░░██║░░░██╔══╝░░██╔══██╗░╚═══██╗
                                ██████╦╝╚█████╔╝╚█████╔╝██║░╚██╗██████╦╝╚██████╔╝██████╔╝░░░██║░░░███████╗██║░░██║██████╔╝
                                ╚═════╝░░╚════╝░░╚════╝░╚═╝░░╚═╝╚═════╝░░╚═════╝░╚═════╝░░░░╚═╝░░░╚══════╝╚═╝░░╚═╝╚═════╝░
                                </div>
                                <div><h5 style='text-align:center;margin-top:40px;'>C@wbr3  2023</h5>
                                </div>
                              
                                </div>
                              
                            </div>
                            <div style='text-align:center;width:70%;height:50px;margin-left:15%;background-color:#fff2c4;border-radius:9px;'><h4>Nos ponemos en contacto con ud. para recordarle que esta pendiente la devolucion del libro $titulo </h4></div>
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