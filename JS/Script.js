document.getElementById("btn__registrarse").addEventListener("click", registro);
document.getElementById("btn__iniciar-sesion").addEventListener("click", IniciarSesion);
window.addEventListener("resize", anchopagina);

//Declarando variables
var contenedor_logueo_registro = document.querySelector(".contenedor__logueo-registro");

var formulario_logueo = document.querySelector(".formulario__logueo");
var formulario_registro = document.querySelector(".formulario__registro");

var caja_trasera_logueo = document.querySelector(".caja__trasera-loguear");
var caja_trasera_registro = document.querySelector(".caja__trasera-registro");

function anchopagina(){
    if(window.innerWidth>850){
        caja_trasera_logueo.style.display ="block";
        caja_trasera_registro.style.display="block";
    }else{
        caja_trasera_registro.style.display="block";
        caja_trasera_registro.style.opacity="1";
        caja_trasera_logueo.style.display="none";
        formulario_logueo.style.display="block";
        formulario_registro.style.display="none";
        contenedor_logueo_registro.style.left="0px";
    }
}

anchopagina();

function IniciarSesion (){
    if(window.innerWidth>850){
        formulario_registro.style.display = "none";
        contenedor_logueo_registro.style.left="10px";
        formulario_logueo.style.display="block";
        caja_trasera_registro.style.opacity = "1";
        caja_trasera_logueo.style.opacity = "0";
    }else{
        formulario_registro.style.display = "none";
        contenedor_logueo_registro.style.left="0px";
        formulario_logueo.style.display="block";
        caja_trasera_registro.style.display = "block";
        caja_trasera_logueo.style.display = "none";
    }
}


function registro (){
    if(window.innerWidth>850){
        formulario_registro.style.display = "block";
        contenedor_logueo_registro.style.left="410px";
        formulario_logueo.style.display="none";
        caja_trasera_registro.style.opacity = "0";
        caja_trasera_logueo.style.opacity = "1";
    }else{
        formulario_registro.style.display = "block";
        contenedor_logueo_registro.style.left="0px";
        formulario_logueo.style.display="none";
        caja_trasera_registro.style.display = "none";
        caja_trasera_logueo.style.display = "block";
        caja_trasera_logueo.style.opacity = "1";
    }
    
}