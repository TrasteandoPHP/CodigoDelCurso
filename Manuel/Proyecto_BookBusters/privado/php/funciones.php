<?php
function recoge(){
$sql="SELECT * FROM libros ORDER BY RAND() LIMIT 6";
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



?>