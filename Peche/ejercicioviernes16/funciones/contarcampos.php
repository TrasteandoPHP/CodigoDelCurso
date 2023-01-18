<?php
$con = new mysqli("localhost","root","","lunes5");
 $sql2 = "SELECT * FROM pruebas";
 $consult=$con->query($sql2);
 $reg=$consult->fetch_array();
 var_dump(count($reg)/2);
  ?>