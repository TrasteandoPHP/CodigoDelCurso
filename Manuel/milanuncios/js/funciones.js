function unomas(){
    // En la variable contador guardo el valor del input con id numero. Y lo convierto a número -> parseInt
    var contador = parseInt($("input#numero").val());
    // Se le suma uno al contador
    contador += 1;
    // Se le cambia el valor del contador al input con id número
    $("input#numero").val(contador);
    //var cajetin = "<input type='file' name='archivo"+contador+"'>";
    let cajetin = `<input type="file" name="archivo${contador}">`;
    $("div.add").append(cajetin);
}