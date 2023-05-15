<?php
  session_start();
  if(isset($_SESSION["bookbusters"])) {
    $codlibro = $_POST["codigolibro"];
    $coduser = $_POST["usuario"];
    $login = new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");
    
    $sqlborrarreserva = "DELETE FROM prestamos WHERE cod_lib='$codlibro' AND cod_usu='$coduser' AND fentrega_pres='0000-00-00'";
    $ejeborraresrva=$login->query($sqlborrarreserva);
    $sqlconsultabaja="SELECT * FROM prestamos WHERE cod_lib='$codlibro' AND cod_usu='$coduser' AND fentrega_pres='0000-00-00'";
    if($login->query($sqlconsultabaja)->fetch_array())
    {
      //No se ha borrado el registro
      echo "Error en anulación reserva préstamo libro";
    }
    else
    {
      //No se encuentra el registro, por lo que se ha anulado la reserva
      echo "Anulación reserva préstamo libro realizada correctamente";
      $sqlactualizarlibro = "UPDATE libros SET disponible_lib = 0 where cod_lib = $codlibro";
      $login->query($sqlactualizarlibro);
      $usumail = "select * from usuarios where cod_usu=$coduser";
      $exeusu = $login->query($usumail);
      $regu = $exeusu->fetch_array();
      $nom = $regu["nom_usu"];
      $ap1 = $regu["ap1_usu"];
      $ap2 = $regu["ap2_usu"];
      $ema = $regu["email_usu"];
      $bookmail = "select * from libros where cod_lib=$codlibro";
      $exebo = $login->query($bookmail);
      $regb = $exebo->fetch_array();
      $book = $regb["titulo_lib"];

      $login->close();

      $para = "reservas@bookbusters.es";
      //$para = el correo de administrador de la pagina
      $asunto = "Reserva Anulada";
      $mensaje ='<!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>EMAIL</title>
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
                      text-decoration: none;
                      color: #ff39ba;
                    }
                  a:hover{
                      color: #ff39bb;
                    }
                  hr{
                    border: none;
                    }
          </style>
      </head>
      <body>
          <div style="float:left; width:90%; margin-left:5%">    
              <div style="float:left; width:50%">
                <a href="https://bookbusters.es/index.php" style="width: 15%; margin-top: 2%;"><img src="https://bookbusters.es/images/logo.png"></a>
              </div>     
              <div style="float:left; width:100%">
                  <hr style="background-color:#ff39ba; height:4px">
                  <center>
                      <h1>Hey Boss</h1>
                  </center>
                  <br>
                  <p style="float:left; margin-left: 1%;">'.$nom.' '.$ap1.' '.$ap2.' anuló la reserva del libro '.$book.' </p>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>        
                  <img style="margin-left:42.5%; width:15%;"  src="https://bookbusters.es/images/Bookbusterspre.png" alt="" />
                  <h4 style="margin-left: 1%;">Nota: Este mail ha sido generado automáticamente desde bookbusters.es</h4>
              </div>              
          </div>
      </body>
      </html>';
      $header = "MIME-Version: 1.0 \r\n";
      $header .= "Content-type:text/html;charset=UTF-8 \r\n";
      $header .= "From: reservas@bookbusters.es";
      //correo generio para el envio desde la pagina
      mail($para, $asunto, $mensaje, $header);

      //$para = "alfonso@medellin.ef";
      $para = $ema;
      $asunto = "Reserva Anulada";
      $mensaje ='<!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>EMAIL</title>
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
                    text-decoration: none;
                    color: #ff39ba;
                  }
                  a:hover{
                    color: #ff39bb;
                  }
                  hr{
                    border: none;
                  }
          </style>
      </head>
      <body>
          <div style="float:left; width:90%; margin-left:5%">    
              <div style="float:left; width:50%">
                <a href="https://bookbusters.es/index.php" style="width: 15%; margin-top: 2%;"><img src="https://bookbusters.es/images/logo.png"></a>
              </div>   
              <div style="float:left; width:100%">
                  <hr style="background-color:#ff39ba; height:4px">
                  <center>
                      <h1>Hola '.$nom.' '.$ap1.' '. $ap2.'</h1>
                  </center>
                  <br>
                  <p style="float:left; margin-left: 1%;">Anulaste la reserva del libro '.$book.'</p>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>        
                  <img style="margin-left:42.5%; width:15%;"  src="https://bookbusters.es/images/Bookbusterspre.png" alt="" />
                  <h4 style="margin-left: 1%;">Nota: Este mail ha sido generado automáticamente desde bookbusters.es</h4>
              </div>
          </div>
      </body>
      </html>';
      $header = "MIME-Version: 1.0 \r\n";
      $header .= "Content-type:text/html;charset=UTF-8 \r\n";
      $header .= "From: reservas@bookbusters.es";
      //correo generico para envio desde la pagina
      mail($para, $asunto, $mensaje, $header);
    }
  }
  else
  {
    header("location:../../login.html");
    // echo "
    //   <script>
    //     alert('Area restringida');
    //     window.location.href='../login.html';
    //   </script>
    // ";
  }     
?>