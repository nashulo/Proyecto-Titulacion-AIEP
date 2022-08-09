function validarLogin(usuario, contrasenha)
{
    var estadoOK = true;

    if (usuario == "") {
        alert("Debe ingresar su correo o usuario");
        estadoOK = false;
        return estadoOK;
    }

    if (contrasenha == "") {
        alert("Debe ingresar su contraseña");
        estadoOK = false;
        return estadoOK;
    }



    if (estadoOK) {
        document.getElementById("formLogin").submit();
    }
}


var authLogin = document.querySelector("#auth-login");

authLogin.addEventListener("click", function() {
    var usuario = document.getElementById("usuario").value.trim();
    var contrasenha = document.getElementById("contrasenha").value.trim();
    
    validarLogin(usuario, contrasenha);
});