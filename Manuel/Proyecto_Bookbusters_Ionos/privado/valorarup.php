<?php 
if(isset($_POST["comen"]))
{
require_once("./php/funciones.php");
$cod=$_POST["c"];
$com=$_POST["comen"];
$cod=encriptado("d",$cod);
$sql="UPDATE valoraciones SET texto_val='$com',act_val=1 WHERE cod_val='$cod'";
if(conex()->query($sql))
{
    header ("Cache-Control: no-cache, must-revalidate"); //no guardar en CACHE 
    header ("Pragma: no-cache"); 
    header('location:https://bookbusters.es');
        echo "valorado";
    }
}
else
{
    header('location:https://bookbusters.es');
}
?>