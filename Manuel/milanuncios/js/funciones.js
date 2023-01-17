function unomas(){
    var contador = parseInt($("input#numero").val());
    contador += 1;
    $("input#numero").val(contador);
    //var cajetin = "<input type='file' name='archivo"+contador+"'>";
    let cajetin = `<input type="file" name="archivo${contador}">`;
    $("div.add").append(cajetin);
}