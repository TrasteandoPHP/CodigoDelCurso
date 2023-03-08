<?php
if(isset($_POST["ema"])||isset($_POST["pwd"])){
    $ema=$_POST["ema"];
    $pwd=$_POST["pwd"];
    $con=new mysqli("localhost","fila3","fila3","fila3");
    $sql="SELECT * FROM administradores WHERE ema_adm='$ema'";
    $eje=$con->query($sql);
    if($reg=$eje->fetch_array()){
        $pas= $reg['pas_adm'];
        if(password_verify($pwd,$pas)){
            session_start();
            $_SESSION["usuario"]=$reg["cod_adm"];
            echo "<script>
                window.location.href='./../manuelcp/index.php'
                </script>
            ";
            } else {
                echo "<script>
                        alert('error');
                        window.location.href='login.php';
                    </script>
                ";
            }
    } else {
        echo "<script>
                alert('Error');
                window.location.href='login.php';
            </script>
        ";
    }
} else {
?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <link rel="stylesheet" href="./css/style.css">
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
            <title>Login</title>
        </head>
        <body>
            <div class="container">
                <div class="row my-5">
                    <div class="offset-2 col-8 my-5 text-center">
                        <h1 class="mt-5 mb-3">Login</h1>
                        <form action="./login.php" method="POST">
                            <input class=" col-5 my-3 p-1" type="text" name="ema" placeholder="Usuario" requiredd><br>
                            <input class="col-5 my-3 p-1" type="password" name="pwd" placeholder="Contraseña" required><br>
                            <input class="btn btn-success col-5 mt-3" type="submit" value="Login">
                        </form>
                        <div class="mt-5 text-center"><h6 class="text-center">&copy; Oleiros 2023</h6></div>
                    </div>
        </body>
    </html>
<?php
    }
?>