<?php

$codlib=$_POST["codigo"];
$isbn=$_POST["isbn"];
$titulo=$_POST["tit"];
$subtit=$_POST["subt"];
$autor=$_POST["aut"];
$editorial=$_POST["edit"];
$genero=$_POST["gen"];
$resumen=$_POST["res"];
$idioma=$_POST["idi"];
$paginas=$_POST["pag"];
$img=$_FILES["img"]["name"];
$conexion=new mysqli("10.10.10.199","busters","1234","biblioteca");

if($img=="")
{

    $sql1="UPDATE libros SET isbn_lib='$isbn', titulo_lib='$titulo', subtitulo_lib='$subtit', autor_lib='$autor', 
    editorial_lib='$editorial', genero_lib='$genero', resumen_lib='$resumen',
idioma_lib='$idioma', paginas_lib='$paginas' WHERE cod_lib='$codlib'"; 

    if($conexion->query($sql1))
    {

        echo"<script>
                if(confirm('Libro modificado. Quieres modificar otro?'))
                {
                    window.location.href='libros.php';
                }
                else
                {
                    window.location.href='index_administrador.php';   
                }
                
            </script>";
    }
    else
    {
        echo"<script>
                alert('Ocurrió un error');
                window.location.href='modificalibros.php';
            </script>";
    }

}
else
{

    $sql2="UPDATE libros SET isbn_lib='$isbn', titulo_lib='$titulo', subtitulo_lib='$subtit', autor_lib='$autor', 
    editorial_lib='$editorial', genero_lib='$genero', resumen_lib='$resumen',
    idioma_lib='$idioma', paginas_lib='$paginas', imagen_lib='$img' WHERE cod_lib='$codlib'";
    $destino= "./../images/portadas/$codlib/$img";
    move_uploaded_file($_FILES["img"]["tmp_name"], $destino);


    if($conexion->query($sql2))
    {
        echo"<script>
                if(confirm('Libro modificado. Quieres modificar otro?'))
                {
                    window.location.href='libros.php';
                }
                else
                {
                    window.location.href='index_administrador.php';   
                }
                
            </script>";
    }
    else
    {
        echo"<script>
                alert('Ocurrió un error');
                window.location.href='modificalibros.php';
            </script>";
    }
}






















?>