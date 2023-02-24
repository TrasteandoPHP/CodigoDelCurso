<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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
                        <select class="col-8 text-center" name="pais" id="paisSeleccionado" onchange="sacarPrefijo()" required>
                            <option value="">Elige País</option>
                            <?php
                                $conexion = new mysqli("localhost","root","","practica");
                                $sqlConsultaCodigoPais = "SELECT * FROM paises";
                                $ejecutarSqlConsultaCodigoPais = $conexion->query($sqlConsultaCodigoPais);
                                foreach($ejecutarSqlConsultaCodigoPais as $registro){
                                    $codigoPais = $registro["cod_pais"];
                                    $nombrePais = $registro["nom_pais"];
                                    $prefijoPais = $registro["pref_pais"];
                                    echo "<option value='$prefijoPais'>$nombrePais</option>";
                                }                                
                            ?>                                                        
                        </select>
                        <br><br> 
                        <input type="text" class="col-2 text-center text-muted" name="prefijo" id="pintoPrefijo" maxlength="4" readonly>
                        <input type="text" class="col-6 text-center" name="telefono" placeholder="Teléfono" maxlength="9" required><br><br>
                        <input type="submit" class="col-8 text-center btn btn-success" value="Grabar">
                    </form>
                </div>
            </div>
        </div>
        <script>
            function sacarPrefijo(){
                var prefijo = $("#paisSeleccionado").val();
                $("#pintoPrefijo").val("+"+prefijo);
            }
        </script>    
    </body>
</html> 

                             

                            