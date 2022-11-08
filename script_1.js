function ValidandoDatos() {
    var usuario = document.getElementById("usuario").value;
    var clave = document.getElementById("pas").value;
    var clave_dos = document.getElementById("pas_dos").value;
    var terminos = document.getElementById("terminos");

    if(usuario === "" || clave === "" || clave_dos === ""){
        alert("Todos los campos son obligatorios.");
        return false;
    }
    else if(usuario.length>30){
        alert("El usuario es muy largo");
        return false;
    }
    else if(clave.length>30){
        alert("La contraseña es muy larga");
        return false;
    }
    else if(clave_dos.length>30){
        alert("El contraseña es muy larga");
        return false;
    }
    else if(clave != clave_dos){
        alert("Las contraseñas no coinciden.");
        return false;
    }
    else if(terminos.checked == false){
        alert("Acepte los terminos");
        return false;
    }

}