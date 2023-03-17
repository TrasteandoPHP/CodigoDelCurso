// FUNCION PARA LOGIN

function login()
{
	var ema;
	var pas;
	ema = $("#email").val();
	pas = $("input#pass").val();
	if(ema == "" || pas == "")
	{
		alert("No puedes dejar campos vacíos");
		$("#email").focus();
	}
	else
	{
		$.post(
				"./sesion/php/login.php",
				{email:ema, contrasena:pas},
				function(resultadophp){
					if(resultadophp == "bien")
					{
						window.location.href="./sesion/index.php";
					}
					else
					{
						alert("Usuario o contraseña incorrecta");
						$("#email").focus();
					}
				}
		);
	}
}