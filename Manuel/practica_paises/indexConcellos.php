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
                <div class="col-12 text-center float-left">
                    <h1 class="text-center">Listado Concellos</h1>
                    <select class="col-4 text-center" name="provincia" id="provinciSeleccionada" required>
                        <option value="">Elige Provincia</option>
                        <?php
                            $conexion = new mysqli("localhost","root","","practica");
                            $sqlConsultaProvincias = "SELECT * FROM provincias";
                            $ejecutarSqlConsultaProvincias = $conexion->query($sqlConsultaProvincias);
                            foreach($ejecutarSqlConsultaProvincias as $registro){
                                $codigoProvincia = $registro["cod_prov"];
                                $nombreProvincia = $registro["nom_prov"];
                                echo "<option value='$codigoProvincia'>$nombreProvincia</option>";
                            }                                
                        ?>                                                        
                    </select>
                    <select class="col-4 text-center" name="provincia" id="provinciSeleccionada" required>
                        <option value="">Lista de Concellos por Provincia</option>
                        <?php
                            $conexion = new mysqli("localhost","root","","practica");
                            $sqlConsultaProvincias = "SELECT * FROM provincias";
                            $ejecutarSqlConsultaProvincias = $conexion->query($sqlConsultaProvincias);
                            foreach($ejecutarSqlConsultaProvincias as $registro){
                                $codigoProvincia = $registro["cod_prov"];
                                $nombreProvincia = $registro["nom_prov"];
                                echo "<option value='$codigoProvincia'>$nombreProvincia</option>";
                            }                                
                        ?>                                                        
                    </select>                                           
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