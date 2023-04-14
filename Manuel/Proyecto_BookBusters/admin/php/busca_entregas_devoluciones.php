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
WHERE usuarios.cod_usu=2 AND disponible_lib=1";
//  disponible_lib=1
if ($ej = $con->query($sql)) {
        foreach ($ej as $reg) {

                $Avatar = $reg["img_usu"];
                $Nombre = $reg["nom_usu"];
                $Ap1 = $reg["ap1_usu"];
                $Ap2 = $reg["ap2_usu"];
                $email = $reg["email_usu"];
                $Fecha_Reserva_Prevista = $reg["freserva_pres"];
                $Fecha_Entrega_Prevista = $reg["fentrega_pres"];
                $Fecha_Prevista_Prestamo = $reg["fprevista_pres"];
                $Fecha_Devolucion_Prestamo = $reg["fdevolucion_pres"];
                $disponibilidad = $reg["disponible_lib"];
                $Faltas = $reg["falta_usu"];
?>
                <tr>
                        <td style="margin:5px, "><?php echo "<img src='./../images/Bookbusters (1).png' height='50' style='border-radius: 10px; vertical-align: middle'>
" ?></td>
                        <td><?php echo $Nombre ?></td>
                        <td><?php echo $Ap1 ?></td>
                        <td><?php echo $Ap2 ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $Fecha_Reserva_Prevista ?></td>
                        <td><?php echo $Fecha_Entrega_Prevista ?></td>
                        <td><?php echo $Fecha_Prevista_Prestamo ?></td>
                        <td><?php echo $Fecha_Devolucion_Prestamo ?></td>
                        <td><?php echo $disponibilidad ?></td>
                        <td><?php echo $Faltas ?></td>
                        <td>
                                <button type="button" class="button fit small">Devolución</button>
                        </td>

                </tr>

<?php
        }
} else {
        echo "No hay reservas pendientes...";
}
?>