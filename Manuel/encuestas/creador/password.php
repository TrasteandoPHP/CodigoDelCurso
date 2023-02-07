<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Encryption</title>
</head>
<body>
    <?php
        $password = "Manuel";
        
        $passwordEncriptado = password_hash($password, PASSWORD_DEFAULT);
        echo $passwordEncriptado."<br>";  
        $passwordVerificado = password_verify($password,$passwordEncriptado);
        if($passwordVerificado){
            echo "Contraseña correcta";
        } else {
            echo "Contraseña incorrecta";
        }    
    ?>
</body>
</html>