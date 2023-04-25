<?php
function recoge(){
$sql="SELECT *,count(cod_lib) as conta FROM libros INNER JOIN prestamos using(cod_lib) group By cod_lib ORDER BY conta DESC limit 8";	
return conex()->query($sql);
}

function conex(){
    return new mysqli("10.10.10.199","busters","1234","biblioteca");
}

function consulta($tabla){
$sql="SELECT * FROM $tabla";
return conex()->query($sql);
}
function insertar($tabla, $campo,$nom)
{
    $sql="INSERT INTO $tabla($campo) VALUES('$nom')";
    return conex()->query($sql);
}

function verificar($campo,$tabla,$condi)
{
    $sql="SELECT $campo FROM $tabla WHERE $campo=$condi";
    $ej=conex()->query($sql);
    return $ej->fetch_array();
}
function estrella($valor)
{
$imprime="";
$sql="SELECT cod_lib, avg(puntos_val) as suma FROM valoraciones WHERE cod_lib=$valor";
$ejec= conex()->query($sql);
$reg=$ejec->fetch_array();
if($reg["suma"]!=NULL){
  $valor=$reg["suma"];  
  $eva=$valor - intval($valor);
for($x=1;$x<=$valor;$x++)
{
    $imprime.='<i class="fa fa-star" style="color:#ff39ba;"></i>';
}
if($eva){ 
    $imprime.='<i class="fa-solid fa-star-half-stroke" style="color:#ff39ba;"></i>';
}
}
return $imprime;
}

function valorar($id,$codlib){
    $sql="SELECT * FROM valoraciones WHERE cod_val='$id' AND act_val='0'";
    $ver=conex()->query($sql);
    if($ver->fetch_array())
    {
$a="comentar $codlib";

    }
    else
    {
$a= "link fue usado";
    }
return $a;



}
function pinta()
{
echo "";



}

?>