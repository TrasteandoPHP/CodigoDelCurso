<?php

$con=new mysqli("db5012901176.hosting-data.io", "dbu3726201", "PpJ_mP5WdLp!3mPpDb2i@bookaab", "dbs10835059");

$sql="SELECT * FROM usuarios ORDER BY nom_usu";

if ($ej=$con->query($sql))
{
        foreach ($ej as $reg) {
                
                $cod=$reg["cod_usu"];
                $nom=$reg["nom_usu"];
                $aps=$reg["ap1_usu"]." ".$reg["ap2_usu"];
                $email=$reg["email_usu"];
                $act=$reg["activo_usu"];
                $fal=$reg["falta_usu"];
                ?>
                
                        <tr class="datos" id="campo_<?php echo $cod ?>">
                                <td>
                                        <a href="./php/historial_usu_adm_visual.php?cod=<?php echo $cod ?>"><?php echo $nom?></a>
                                </td>
                                <td>
                                        <a href="./php/historial_usu_adm_visual.php?cod=<?php echo $cod ?>"><?php echo $aps?></a></td>
                                <td><a href="./php/historial_usu_adm_visual.php?cod=<?php echo $cod ?>"><?php echo $email?></a></td>
                                <td><a href="./php/historial_usu_adm_visual.php?cod=<?php echo $cod ?>"><?php echo $act?></a></td>
                                <td><a href="./php/historial_usu_adm_visual.php?cod=<?php echo $cod ?>"><?php echo $fal?></a></td>
                                <td>
                                        <i id = "modif_<?php echo $cod ?>" class="fa-solid fa-user-pen" title="Modificar usuario" style="cursor:pointer;" onclick="modif_usu(this.id)" onmouseover="pintar(this.id)" onmouseleave="despintar(this.id)"></i>
                                        <i id = "activ_<?php echo $cod ?>" class="fa-solid fa-paper-plane" title="Enviar mail de activación" style="cursor:pointer;" onclick="enlace_activar(this.id)" onmouseover="pintar(this.id)" onmouseleave="despintar(this.id)"></i>
                                        <i id = "mail_<?php echo $cod ?>" class="fa-solid fa-lock" title="Enviar solicitud de contraseña" style="cursor:pointer;" onclick="cambio_contusu('<?php echo $email?>')" onmouseover="pintar(this.id)" onmouseleave="despintar(this.id)"></i>
                                        <i id = "dele_<?php echo $cod ?>" class="fa-solid fa-trash-can bs-danger" title="Eliminar usuario" style="cursor:pointer;" onclick = "borrar_usuario(this.id)" onmouseover="pintar(this.id)" onmouseleave="despintar(this.id)"></i>
                                </td>
                        </tr>
                
                <tr class="cambio_datos" id="escondido_<?php echo $cod ?>" style="display:none">
                        <td>
                                <input id="nom_<?php echo $cod ?>" type="text" name="nom" value="<?php echo $nom ?>">
                        </td>
                        <td>
                                <div style="width:50%;float:left" >
                                        <input id="ap1_<?php echo $cod ?>" type="text" name="ap1" value="<?php echo $reg["ap1_usu"] ?>">
                                </div>
                                <div style="width:50%;float:left">
                                        <input id="ap2_<?php echo $cod ?>" type="text" name="ap2" value="<?php echo $reg["ap2_usu"] ?>">
                                </div>
                        </td>
                        <td>
                                <input id="mail_<?php echo $cod ?>" type="email" name="mail" value="<?php echo $email ?>" readonly>
                        </td>
                        <td><?php echo $act?></td>
                        <td><?php echo $fal?></td>
                        <td>
                                <input id="but_<?php echo $cod ?>" type="button" onclick="modif_total(this.id)" name="save" value="GRABAR">
                        </td>
                </tr>
                        

        <?php
        }
        echo "
                <script>
                function quick()
                {
                
                        $('#buscador').quicksearch('table tbody tr.datos');
                        $('tr.cambio_datos').each(function(){
                                $(this).hide()
                                });
                }
                
                </script>
        ";
$con->close();
}
else{
        echo "No hay reservas pendientes...";
}
?>
<script src="https://kit.fontawesome.com/7b8eabe9ec.js" crossorigin="anonymous"></script>

