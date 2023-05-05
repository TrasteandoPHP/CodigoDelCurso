<?php

$con=new mysqli("db5012901176.hosting-data.io", "dbu3726201", "PpJ_mP5WdLp!3mPpDb2i@bookaab", "dbs10835059");

$sql="SELECT * FROM administradores ORDER BY nom_adm";

if ($ej=$con->query($sql))
{
        foreach ($ej as $reg) {
                
                $cod=$reg["cod_adm"];
                $nom=$reg["nom_adm"];
                $email=$reg["email_adm"];
                ?>
                <tr id="campo_<?php echo $cod ?>">
                        <td><?php echo $nom?></td>
                        <td><?php echo $email?></td>
                        <td>
                                <i id = "dele_<?php echo $cod ?>" class="fa-solid fa-trash-can bs-danger" style="cursor:pointer;" onclick = "borrar_administrador(this.id)" onmouseover="pintar(this.id)" onmouseleave="despintar(this.id)"></i>
                        </td>
                </tr>

        <?php
        }
$con->close();
}
else{
        echo "No hay reservas pendientes...";
}
?>


