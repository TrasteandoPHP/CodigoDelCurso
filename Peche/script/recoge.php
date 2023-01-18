<?php
$v=$_POST["contador"];

for($i=0;$i<=$v;$i++)
{
    $nombre=$_FILES["archivo$i"]["name"];
    echo "$nombre <br>";
}
?>