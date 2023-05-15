<?php
	session_start();
	if(isset($_SESSION["bookbusters"])) {
      $codlibro = $_POST["codigolibro"];
      $coduser = $_POST["usuario"];
      $fecha = date("Y-m-d");
      $fechares = explode("-",date("Y-m-d"));
      $dateres = "$fechares[2]-$fechares[1]-$fechares[0]";
      $login = new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");
      $check="select * from libros where cod_lib = $codlibro";
      $dispo = $login->query($check);
      $regc = $dispo->fetch_array();
      $disp = $regc["disponible_lib"];
      if($disp == 1)
      {
        echo "1";
      }
      else
      {
        $rec = "insert into prestamos (cod_lib,cod_usu,freserva_pres) values ('$codlibro','$coduser','$fecha')";
        if($login->query($rec))
        {
          //echo "$codlibro";
          $reserva = $login->insert_id;
          $change = "update libros set disponible_lib = 1 where cod_lib = $codlibro";
          $login->query($change);

          $tomail = "select * from prestamos inner join libros using(cod_lib) inner join usuarios using(cod_usu) where cod_pres=$reserva";
          $exdat = $login->query($tomail);
          $reg = $exdat->fetch_array();
          $book = $reg["titulo_lib"];
          $nom = $reg["nom_usu"];
          $ap1 = $reg["ap1_usu"];
          $ap2 = $reg["ap2_usu"];
          $ema = $reg["email_usu"];

          $login->close();

          $para = "reservas@bookbusters.es";
          //para el correo de administrador de la pagina
          $asunto = "Reserva realizada";
          $mensaje = '<!DOCTYPE html>
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
                      <p style="float:left; margin-left: 1%;">'.$nom.' '.$ap1.' '.$ap2.' solicitó la reserva del libro '.$book.' </p>
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

          $para = $ema;
          $asunto = "Reserva realizada";
          $mensaje = '<!DOCTYPE html>
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
                      <p style="float:left; margin-left: 1%;">Solicitaste la reserva del libro '.$book.'.</p>
                      <p style="float:left; margin-left: 1%;">Los Administradores se pondrán en contacto contigo para gestionar la entrega.</p>
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
          echo "0";
        }
        else
        {
          echo "Error en la reserva préstamo libro";
        }
      }
    }
    else
    {
      header("location:../../login.html");
    }  
?>