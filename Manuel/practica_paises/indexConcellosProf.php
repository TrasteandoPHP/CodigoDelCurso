<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <title>Index Concellos</title>
    </head>
    <body>        
        <select name="provincias" id="provincia" onchange="cargaConcellos()">
            <option value="">Selecciona Provincia</option>
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
        <select name="concellos" id="concello" style="display:none">
            <!-- <option>Selecciona concello</option> -->
                
        </select>

        <script>
            function cargaConcellos(){
                var valor_de_la_provincia = $("#provincia").val();
                //$("#concello").html("");
                //alert(valor_de_la_provincia);

                if(valor_de_la_provincia!=""){
                    $("#concello").show();
                   
                    $.post("./buscaConcellos.php", {codigodelaprovincia:valor_de_la_provincia}, 
                        function(recojodelphp){
                            
                            $("#concello").append(recojodelphp);
                        }
                    );

                } else { 
                    $("#concello").hide();
                }
            }
        </script>        
    </body>
</html>