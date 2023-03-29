1.- Leer y traer lo que me escriban en el input.

    var nombrequequiero = $("apuntamos a la etiqueta").val();

2.- Comprobar en cada uno de los inputs ocultos si está la letra del paso 1.
    - recorrer todos los inputs de oculto.

    $("apuntamos a la etiqueta que queremos").each(function(){})    

    En cada vuelta tenemos que hacer:
    1. mirar el valor de ese input.

    var nombrequemedelagana = $(this).val();

    2. preguntar si el valor de ese input es igual a la letra que me han escrito.

    if(nombrequequiero == nombrequemedalagana){}else{}    

    CASO AFIRMATIVO:
    - Comprobamos a donde tenemos que mover la letra encontrada (conociendo el id del input).

    var elnombrequemasmeguste = $(this).attr("id");  

    - Mover la letra encontrada al id que se muestra (palabra ... VER)

    $(elnombrequemasmeguste).val(nombrequemedalagana);

    - Vaciamos la letra de oculto ("").

    $(this).val("");

    - Leemos el dato de letras.

    var letras = $("la etiqueta que sea").text();

    - Restamos uno a letras. Convertir letras a número.

    letras = parseInt(letras);
    letras = letras - 1;

    - Subimos a letras la resta.

    $("la etiqueta que sea").text(letras);

    - Acumular si has acertado.

    aciertos = aciertos + 1;

    CASO NEGATIVO:
    - Por ahora no hacemos nada. Sí restamos aquí estariamos restando tantos errores como letras no encuentra en cada input.

3.- Comprobar si se han acertado todas las letras mirando si lo que hay en letras es igual a cero.

    if($(etiquetaquesea).text()=="0"){}else{}

    CASO AFIRMATIVO.
    - mostrar fin del programa.
    
    alert("Ganaste");
    
    CASO NEGATIVO:
    - preguntar si se han acumulado aciertos, por ejemplo, aciertos = 0?

        if(aciertos==0){}else{}

        CASO AFIRMATIVO:
        - No se ha encontrado ninguna letra, por tanto:
            1. Leer lo que hay en intentos.

            var intentos = $("la etiqueta que sea").text();

            2. Restarle 1  a intentos.

            intentos = intentos - 1;

            3. Subir el valor a intentos.

            $("la etiqueta que sea").text(intentos);

            4. Cambiar la imagen (con problemas o sin problemas).

             $("img").attr("src", "./imagenes/"+imagen+".jp)

        CASO NEGATIVO:
        - No hacemos nada

    - Movemos la letra que han escrito a las letras que ha ido escribiendo.

        $("h1").text(variable letra);

        $("h1").html("<font color='red'>" + variable + "</font>");

        $("span").last().css('color','red'); // si cada letra estuviera dentro de un span.

    - Vaciamos el input donde escribe la persona.

        $("la etiqueta que sea").val("").focus();

    - Le damos foco al input donde la persona escribe.  

        $("la etiqueta que sea").val("").focus();