<?php
  $var = " javier";
  $varmayus = ucfirst($var);
  echo "$varmayus";
  echo "<br>";
  
  $vartodomayus = strtoupper($var);
  $vartodominus = strtolower($vartodomayus);
  echo $vartodomayus;
  echo "<br>";
  echo $vartodominus;
  echo "<br>";
  echo strtolower($vartodomayus);
  $var2 = "jose maria";
  echo "<br>";
  echo ucwords($var2);
  //para eliminar espacios al principio
  echo "<br>";
  echo trim($var2);
  
  //ltrim
  //rtrim
  echo "<br>";
  echo ucfirst(trim("   alianza lima    "));
  echo "<br>";
  //$var = ucfirst(trim($_POST["var"]));
  //pruebas encriptacion en base 64
  $nombre = "Peche";
  $nombreencriptado = base64_encode($nombre);
  echo "$nombreencriptado<br>";
  
  $nombredecode = base64_decode($nombreencriptado);
  echo $nombredecode;
  ?>
  
  