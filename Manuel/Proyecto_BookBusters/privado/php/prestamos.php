  <?php
    $codlibro = $_POST["codigolibro"];
    $coduser = $_POST["usuario"];
    $fecha = date("Y-m-d");
    $fechares = explode("-",date("Y-m-d"));
    $dateres = "$fechares[2]-$fechares[1]-$fechares[0]";
    $login = new mysqli("10.10.10.199","busters","1234","biblioteca");
    $rec = "insert into prestamos (cod_lib,cod_usu,freserva_pres) values ('$codlibro','$coduser','$fecha')";
    if($login->query($rec))
    {
      echo "Reserva préstamo libro realizada correctamente";
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

      $para = "primero@manolo.gg";
      $asunto = "Reserva realizada";
      $mensaje = "<p>El libro $book fue solicitado el $dateres por $nom $ap1 $ap2</p>
                  <p>$ema</p>";
      $header = "MIME-Version: 1.0 \r\n";
      $header .= "Content-type:text/html;charset=UTF-8 \r\n";
      $header .= "From: informacion@manolo.gg";
      mail($para, $asunto, $mensaje, $header);

    }
    else
    {
      echo "Error en la reserva préstamo libro";
    }   
  ?>