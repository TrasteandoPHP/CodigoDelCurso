<?php
$con = new mysqli("10.10.10.199", "busters", "1234", "biblioteca");
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
WHERE disponible_lib=1";

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
                $Fecha_Devolucion_Prestamo = $reg["fdevolucion_pres"];
                $disponibilidad = $reg["disponible_lib"];
                $Faltas = $reg["falta_usu"];
?>
                <tr>
                        <td style="margin:5px, "><?php echo "<img src='./../images/Bookbusters (1).png' height='50' style='border-radius: 10px; vertical-align: middle'>" ?></td>
                        <td><i id="confirm<?php echo $codusu ?>" onclick="confirmacion('<?php echo $email ?>')" onmouseover='icono_rojo(confirm<?php echo $codusu ?>)' onmouseleave='icono_negro(confirm<?php echo $codusu ?>)' class="icon solid fa-envelope" style="color:black"></i></td>
                        <td>
                                <?php
                                if ($reg["fentrega_pres"] == "0000-00-00") {
                                ?>
                                <i id="departure<?php echo $codusu ?>" onclick="entrega('<?php echo $email ?>')" onmouseover='icono_rojo(departure<?php echo $codusu ?>)' onmouseleave='icono_negro(departure<?php echo $codusu ?>)' class="fa-solid fa-plane-departure"></i>
                                        <!-- <button onclick="entrega('<?php echo $email ?>')" type="button" class="button fit small">entrega</button> -->
                                <?php
                                } else {
                                ?>
                                <i id="arrival<?php echo $codusu ?>" onclick="valoracion('<?php echo $email ?>','<?php echo $codlibro ?>')" onmouseover='icono_rojo(arrival<?php echo $codusu ?>)' onmouseleave='icono_negro(arrival<?php echo $codusu ?>)' class="fa-solid fa-plane-arrival"></i>
                                        <!-- <button onclick="valoracion('<?php echo $email ?>','<?php echo $codlibro ?>')" type="button" class="button fit small">Devolucion</button> -->
                                <?php
                                }
                                ?>

                        </td>
                        <td><?php echo "$Nombre $Ap1 $Ap2" ?></td>
                        <td><?php echo $libro ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $Fecha_Reserva_Prevista ?></td>
                        <td><?php echo $Fecha_Entrega_Prevista ?></td>
                        <td><?php echo $Fecha_Prevista_Prestamo ?></td>
                        <td><?php echo $Fecha_Devolucion_Prestamo ?></td>
                        <td style="display:none"><?php echo $disponibilidad ?></td>
                        <td><?php echo $Faltas ?></td>





        <?php
        }
}



if (isset($_POST["enviarmail"])) {
        if (($_POST["enviarmail"]) == "enviar") {
                $para = $_POST["email"];
                $asunto = "Confirmación, reserva de libros Bookbusters";
                $mensaje = "<h1>El administrador ha gestionado tu reserva, puedes retirarlo mañana</h1>
                                        <br>
                                <img src='http://10.10.10.199/bookbusters/images/Bookbusters (3).png'>";
                $header = "MIME-Version: 1.0 \r\n";
                $header .= "Content-type:text/html;charset=UTF-8 \r\n";
                $header .= "From: dani@medellin.ef";
                mail($para, $asunto, $mensaje, $header);

                echo "Confirmacion Enviada";
        } elseif (($_POST["enviarmail"]) == "valorar") {

                $para = $_POST["email"];
                $asunto = "Valora el libro Bookbusters leido";
                $mensaje = <<<HTML
                
                <head>
                <style>
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
                <h1>Valoración de libro</h1>
                <p>Por favor, valora nuestro libro:</p>
                <div class="estrellas">
                        <a href="http://10.10.10.199/bookbusters/admin/php/valoracion.php?valoracion=1&usu=$codusu&lib=$codlibro" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                        <a href="http://10.10.10.199/bookbusters/admin/php/valoracion.php?valoracion=2&usu=$codusu&lib=$codlibro" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                        <a href="http://10.10.10.199/bookbusters/admin/php/valoracion.php?valoracion=3&usu=$codusu&lib=$codlibro" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                        <a href="http://10.10.10.199/bookbusters/admin/php/valoracion.php?valoracion=4&usu=$codusu&lib=$codlibro" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                        <a href="http://10.10.10.199/bookbusters/admin/php/valoracion.php?valoracion=5&usu=$codusu&lib=$codlibro" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                </div>
                HTML;

                $header = "MIME-Version: 1.0 \r\n";
                $header .= "Content-type:text/html;charset=UTF-8 \r\n";
                $header .= "From: dani@medellin.ef";
                mail($para, $asunto, $mensaje, $header);

                // PREPARACION VARIABLES DEL CORREO VALORACION
                $codlibro = $_POST["codlibro"];
                $coduniq = uniqid();
                $sql_valoracion = "INSERT INTO valoraciones (cod_lib,val_uniq) VALUES ('$codlibro','$coduniq')";
                $ej_val = $con->query($sql_valoracion);
                $id = $con->insert_id;
        }
} else {
        echo "No hay reservas pendientes...";
}
        ?>