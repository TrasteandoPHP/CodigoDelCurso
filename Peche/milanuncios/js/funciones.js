function unomas(){
var contador;
var cajetin;

contador=parseInt($("input#numero").val());
contador=contador+1;
$("input#numero").val(contador);
cajetin="<input type='file' name='archivo"+contador+"'>";
$("div.add").append(cajetin);

}