// tratamiento de string (cadenas de texto)
function escribe(cadena,id){
    document.getElementById(id).innerHTML = cadena;
}
let cadena_de_texto = 'hola que tal estamos';

escribe(cadena_de_texto,'main');