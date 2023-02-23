<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Registro</title>
    </head>
    <body>
        <div class="container" style="height:100vh">
            <div class="row" style="height:100vh">
                <div class="offset-3 col-12 col-md-6 mt-5 pt-5">
                    <h1 class="text-center my-2 pb-3">Registro Personas</h1>
                    <form class="text-center" action="./registrar.php" method="POST">
                        <input type="text" class="col-8 text-center" name="nombre" placeholder="Nombre" maxlength="50" required><br><br>
                        <input type="email" class="col-8 text-center" name="email" placeholder="Email" maxlength="100" required><br><br>
                        <input type="password" class="col-8 text-center" name="password" placeholder="Password" maxlength="100" required><br><br>
                        <select name="cod_prof" required>
                            <?php
                                $conexion = new mysqli("localhost","root","","centro_estudios");
                                $sqlConsultaProfesores = "SELECT * FROM profesores ORDER BY nom_prof ASC";
                                $ejecutarConsultaProfesores = $conexion->query($sqlConsultaProfesores);
                                echo "<option disabled selected value> --- Elige un Profesor --- </option>";
                                foreach($ejecutarConsultaProfesores as $registro)
                                    {
                                        $cod_prof = $registro["cod_prof"];
                                        $nom_prof = $registro["nom_prof"];
                                        $ape_prof = $registro["ape_prof"];
                                        
                                        echo "<option value='$cod_prof'>$nom_prof $ape_prof</option><br>";
                                    }					
                                ?>	
                        </select> 
                    </form>
                </div>
            </div>
        </div>    
    </body>
</html>