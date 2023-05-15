<?php
session_start();
if (isset($_SESSION["admin"])) {
        $con = new mysqli("db5012901176.hosting-data.io", "dbu3726201", "PpJ_mP5WdLp!3mPpDb2i@bookaab", "dbs10835059");
        $sql = "SELECT *
FROM usuarios
INNER JOIN
prestamos
ON
prestamos.cod_usu=usuarios.cod_usu
INNER JOIN
libros
ON
libros.cod_lib=prestamos.cod_lib
WHERE libros.disponible_lib=1 AND prestamos.fdevolucion_pres ='0000-00-00'"; //ESTO ES UNA BUSQUEDA DE LIBROS PRESTADOS SIN DEVOLVER
        function fecha_invertida($fecha)
        {
                $fecha = strtotime($fecha);
                $fecha_invertida = date("d-m-Y", $fecha);
                echo $fecha_invertida;
        }
        if ($ej = $con->query($sql)) {
                foreach ($ej as $reg) {
                        $codusu = $reg["cod_usu"];
                        $Avatar = $reg["img_usu"];
                        $Nombre = $reg["nom_usu"];
                        $Ap1 = $reg["ap1_usu"];
                        $Ap2 = $reg["ap2_usu"];
                        $email = $reg["email_usu"];
                        $libro = $reg["titulo_lib"];
                        $codlibro = $reg["cod_lib"]; //Para enviar en el correo de valoracion
                        $Fecha_Reserva_Prevista = $reg["freserva_pres"];
                        $Fecha_Entrega_Prevista = $reg["fentrega_pres"];
                        $Fecha_Prevista_Prestamo = $reg["fprevista_pres"];
                        $disponibilidad = $reg["disponible_lib"];
                        $Faltas = $reg["falta_usu"];
                        $avatar = $reg["img_usu"];
                        $rutaavatar = "https://bookbusters.es/privado/" . $avatar; //RUTA CONCADENADA AVATAR
?>
                        <tr>
                                <td style="margin:5px, "><?php echo "<img src='$rutaavatar' height='50' style='border-radius: 10px; vertical-align: middle'>" ?></td>
                                <td>
                                        <?php
                                        if ($reg["fentrega_pres"] == "0000-00-00") {
                                        ?>
                                                <i id="confirm<?php echo $codusu ?>" onclick="confirmacion('<?php echo $Nombre ?>','<?php echo $email ?>')" onmouseover="icono_rojo('confirm<?php echo $codusu ?>')" onmouseleave="icono_negro('confirm<?php echo $codusu ?>')" class="fas fa-envelope" style="color:black"></i>
                                        <?php
                                        } else {
                                        ?>
                                                <i class="fas fa-check-double"></i>
                                        <?php
                                        }
                                        ?>
                                </td>
                                <td>
                                        <?php
                                        $hoy = date('Y-m-d');
                                        if ($reg["fentrega_pres"] == "0000-00-00") { //ICONOS DE AVION ENTREGA Y DEVOLUCION
                                        ?>
                                                <i id="departure<?php echo $codusu ?>" onclick="entrega('<?php echo $codusu ?>','<?php echo $Nombre ?>','<?php echo $email ?>','<?php echo $hoy ?>')" onmouseover="icono_rojo('departure<?php echo $codusu ?>')" onmouseleave="icono_negro('departure<?php echo $codusu ?>')" class="fa-solid fa-plane-departure" style="color:black"></i>
                                        <?php
                                        } else {
                                        ?>
                                                <i id="arrival<?php echo $codusu ?>" onclick="valoracion('<?php echo $codusu ?>','<?php echo $Nombre ?>','<?php echo $email ?>','<?php echo $codlibro ?>')" onmouseover="icono_rojo('arrival<?php echo $codusu ?>')" onmouseleave="icono_negro('arrival<?php echo $codusu ?>')" class="fa-solid fa-plane-arrival" style="color:black"></i>
                                        <?php
                                        }
                                        ?>

                                </td>
                                <td><?php echo "$Nombre $Ap1 $Ap2" ?></td>
                                <td><?php echo $libro ?></td>
                                <td><?php echo $email ?></td>
                                <td><?php fecha_invertida($Fecha_Reserva_Prevista) ?></td>
                                <?php
                                if ($reg["fentrega_pres"] == "0000-00-00") { //Sino esta entregado, no mostrar fecha
                                ?>
                                        <td></td>
                                <?php
                                } else {
                                ?>
                                        <td><?php fecha_invertida($Fecha_Entrega_Prevista) ?></td>
                                <?php
                                }
                                ?>

                                <?php
                                if ($reg["fentrega_pres"] == "0000-00-00") { //Sino esta entregado, no mostrar fecha
                                ?>
                                        <td></td>
                                <?php
                                } else {
                                ?>
                                        <td><?php fecha_invertida($Fecha_Prevista_Prestamo) ?></td>
                                <?php
                                }
                                ?>
                                <tds tyle="display:none"><?php fecha_invertida($Fecha_Devolucion_Prestamo) ?></td>
                                        <td style="display:none"><?php echo $disponibilidad ?></td>
                                        <td><?php echo $Faltas ?></td>

                                <?php
                        }
                }

                if (isset($_POST["enviarmail"])) {
                        if (($_POST["enviarmail"]) == "confirmacion") {

                                //CORREO ADMINISTRACION, HA VISTO LA RESERVA DEL USUARIO Y NOTIFICA QUE MAÑANA PUEDE RETIRARLO
                                $usuario = $_POST["usuario"];
                                $para = $_POST["email"];
                                $asunto = "Confirmación, reserva de libro Bookbusters";

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

                body {
                color: #7f888f;
                font-family: "Open Sans", sans-serif;
                font-size: 13pt;
                font-weight: 400;
                line-height: 1.65;
                }

                hr {
                border: none;
                }
        </style>
        </head>

        <body>

        <div style="float:left; width:90%; margin-left:5%">


                <div style="float:left; width:50%">
                <a href="https://bookbusters.es" style="width: 15%; margin-top: 2%;"> <img
                        src="https://bookbusters.es/images/logo.png"></a>
                </div>

                <!-- <div style="float:left; width:50%">
        <a style="font-size:large; text-align:right; margin-top: 2%; float: right;color:#ff39ba; text-decoration: none;" href="https://bookbusters.es/index.php" class="fa fa-home" aria-hidden="true"></a>
        </div>         -->
                <div style="float:left; width:100%">
                <hr style="background-color:#ff39ba; height:4px">


                <center>
                        <h1>Hola '.$usuario.' </h1>
                </center>

                <br>

                <!-- Texto del mensaje -->

                <p style="float:left; margin-left: 1%;">El administrador ha gestionado tu reserva, puedes retirarlo mañana</p>
                <br>
                <br>
                <br>

                <!-- Enlace que corresponda -->

                <!-- <a href="https://bookbusters.es/login.html">Accede a Bookbusters</a> -->

                <br>
                <br>



                <img style="margin-left:42.5%; width:15%;" src="https://bookbusters.es/images/Bookbusterspre.png" alt="" />
                <h4 style="margin-left: 1%;">Nota: Este mail ha sido generado automáticamente desde bookbusters.es</h4>

                </div>


        </div>

        </body>

        </html>

        ';

                                $header = "MIME-Version: 1.0 \r\n";
                                $header .= "Content-type:text/html;charset=UTF-8 \r\n";
                                $header .= "From: administracion@bookbusters.es";
                                mail($para, $asunto, $mensaje, $header);
                        } else if (($_POST["enviarmail"]) == "entrega") {

                                //CORREO ADMINISTRADOR HA ENTREGADO LIBRO, ACTUALIZACION FECHAS PRESTAMOS (ENTREGA)
                                //ACTUALIZACION TABLA
                                $codusu = $_POST["codususuario"];
                                $fecha = $_POST["fecha"];
                                $fentrega = date('Y-m-d');
                                $fprevista = date('Y-m-d', strtotime($fecha . ' +15 day'));
                                $sql_entrega = "UPDATE prestamos
                SET fentrega_pres='$fentrega',fprevista_pres='$fprevista'
                WHERE prestamos.cod_usu=$codusu";
                                $con->query($sql_entrega);

                                //ENVIO CORREO
                                $usuario = $_POST["usuario"];
                                $para = $_POST["mail"];
                                $fprevista_invertida = strtotime($fprevista);
                                $fprevista_correo = date("d-m-Y", $fprevista_invertida);
                                $asunto = "Confirmación entrega, libro Bookbusters";

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

                body {
                color: #7f888f;
                font-family: "Open Sans", sans-serif;
                font-size: 13pt;
                font-weight: 400;
                line-height: 1.65;
                }

                hr {
                border: none;
                }
        </style>
        </head>

        <body>

        <div style="float:left; width:90%; margin-left:5%">


                <div style="float:left; width:50%">
                <a href="https://bookbusters.es" style="width: 15%; margin-top: 2%;"> <img
                        src="https://bookbusters.es/images/logo.png"></a>
                </div>

                <!-- <div style="float:left; width:50%">
        <a style="font-size:large; text-align:right; margin-top: 2%; float: right;color:#ff39ba; text-decoration: none;" href="https://bookbusters.es/index.php" class="fa fa-home" aria-hidden="true"></a>
        </div>         -->
                <div style="float:left; width:100%">
                <hr style="background-color:#ff39ba; height:4px">


                <center>
                        <h1>Hola '.$usuario.' </h1>
                </center>

                <br>

                <!-- Texto del mensaje -->

                <p style="float:left; margin-left: 1%;">Hemos registrado tu reserva, la fecha máxima para devolver es: '.$fprevista_correo.'</p>
                <br>
                <br>
                <br>

                <!-- Enlace que corresponda -->

                <!-- <a href="https://bookbusters.es/login.html">Accede a Bookbusters</a> -->

                <br>
                <br>



                <img style="margin-left:42.5%; width:15%;" src="https://bookbusters.es/images/Bookbusterspre.png" alt="" />
                <h4 style="margin-left: 1%;">Nota: Este mail ha sido generado automáticamente desde bookbusters.es</h4>

                </div>


        </div>

        </body>

        </html>

        ';

                                $header = "MIME-Version: 1.0 \r\n";
                                $header .= "Content-type:text/html;charset=UTF-8 \r\n";
                                $header .= "From: administracion@bookbusters.es";
                                mail($para, $asunto, $mensaje, $header);
                        } else {

                                //ADMINISTRADOR HA RECIBIDO EL LIBRO DE VUELTA
                                include("./../../privado/php/funciones.php");
                                var_dump($_POST);
                                //ACTUALIZACION FECHA DEVOLUCION TABLA PRESTAMOS Y LIBROS DISPONIBLE (0)
                                $codusu = $_POST["codususuario"];

                                $hoy = date('Y-m-d');
                                $sql_devolucion = "UPDATE prestamos
                INNER JOIN libros
                USING(cod_lib)
                SET prestamos.fdevolucion_pres='$hoy', libros.disponible_lib=0
                WHERE prestamos.cod_usu=$codusu";
                                $con->query($sql_devolucion);

                                // PREPARACION VARIABLES DEL CORREO VALORACION (URL ENCRIPADA)
                                //Se crea un registro sin valorar, eso ocurrira luego cuando el usuario elija una ESTRELLA con un UPDATE

                                $coduniq = uniqid(); //CODIGO DE AUTENTICACION
                                $codlibro = $_POST["codlibro"];

                                $sql_valoracion = "INSERT INTO valoraciones (cod_lib,val_uniq,fecha_val) VALUES ('$codlibro','$coduniq','$hoy')";
                                $ej_val = $con->query($sql_valoracion);

                                $id = $con->insert_id;
                                $texto_a_encrip = $codlibro . "$$" . $id;
                                $encrip = encriptado("e", $texto_a_encrip);

                                //PREPARACION DE CORREO
                                $usuario = $_POST["usuario"];
                                $para = $_POST["email"];
                                $asunto = "Valora el libro Bookbusters leido";


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
                        
                                        body {
                                        color: #7f888f;
                                        font-family: "Open Sans", sans-serif;
                                        font-size: 13pt;
                                        font-weight: 400;
                                        line-height: 1.65;
                                        }
                        
                                        hr {
                                        border: none;
                                        }

                                        .estrellas {
                                                font-size: 0;
                                                display: inline-block;
                                        }
                                        .estrellas a {
                                                text-decoration: none;
                                                display: inline-block;
                                                font-size: 32px;
                                                font-size: 2rem;
                                                color: #888;
                                        }
                                        .estrellas:hover a {
                                                color: rgb(39, 130, 228);
                                        }
                                        .estrellas > a:hover ~ a {
                                                color: #888;
                                        }
                                        
                                </style>
                                </head>
                        
                                <body>
                        
                                <div style="float:left; width:90%; margin-left:5%">
                        
                        
                                        <div style="float:left; width:50%">
                                        <a href="https://bookbusters.es" style="width: 15%; margin-top: 2%;"> <img
                                                src="https://bookbusters.es/images/logo.png"></a>
                                        </div>
                        
                                        <!-- <div style="float:left; width:50%">
                                <a style="font-size:large; text-align:right; margin-top: 2%; float: right;color:#ff39ba; text-decoration: none;" href="https://bookbusters.es/index.php" class="fa fa-home" aria-hidden="true"></a>
                                </div>         -->
                                        <div style="float:left; width:100%">
                                        <hr style="background-color:#ff39ba; height:4px">
                        
                        
                                        <center>
                                                <h1>Hola '.$usuario.' </h1>
                                        </center>
                        
                                        <br>
                        
                                        <!-- Texto del mensaje -->
                        
                                        <p style="float:left; margin-left: 1%;">Tú opinión es muy valiosa para nosotros y para otros usuarios.
                Si tienes un momento libre, puedes dejar tú valoración a través de nuestro sitio web o redes sociales.
                Gracias por su colaboración.</p>
                <p>Por favor, valora nuestro libro:</p>
                <div class="estrellas">
                        <a href="https://bookbusters.es/privado/valorar.php?valoracion=1&m='.$encrip.'&u='.$coduniq.'" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                        <a href="https://bookbusters.es/privado/valorar.php?valoracion=2&m='.$encrip.'&u='.$coduniq.'" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                        <a href="https://bookbusters.es/privado/valorar.php?valoracion=3&m='.$encrip.'&u='.$coduniq.'" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                        <a href="https://bookbusters.es/privado/valorar.php?valoracion=4&m='.$encrip.'&u='.$coduniq.'" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                        <a href="https://bookbusters.es/privado/valorar.php?valoracion=5&m='.$encrip.'&u='.$coduniq.'" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                </div>
                                        
                                        </p>
                                        <br>
                                        <br>
                                        <br>
                        
                                        <!-- Enlace que corresponda -->
                        
                                        <!-- <a href="https://bookbusters.es/login.html">Accede a Bookbusters</a> -->
                        
                                        <br>
                                        <br>
                        
                        
                        
                                        <img style="margin-left:42.5%; width:15%;" src="https://bookbusters.es/images/Bookbusterspre.png" alt="" />
                                        <h4 style="margin-left: 1%;">Nota: Este mail ha sido generado automáticamente desde bookbusters.es</h4>
                        
                                        </div>
                        
                        
                                </div>
                        
                                </body>
                        
                                </html>
                        
                                ';

                                $header = "MIME-Version: 1.0 \r\n";
                                $header .= "Content-type:text/html;charset=UTF-8 \r\n";
                                $header .= "From: administracion@bookbusters.es";
                                mail($para, $asunto, $mensaje, $header);
                        }
                } else {
                        echo "No hay reservas pendientes...";
                }
        } else {
                echo "sin session";
        }
                ?>