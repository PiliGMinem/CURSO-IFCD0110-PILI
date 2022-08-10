// tratamiento de string (cadenas de texto)
function escribe(cadena,id){
    document.getElementById(id).innerHTML = cadena;
    alert(cadena);
}

export {escribe}

/* let cadena_de_texto = 'hola que tal estamos';


cadena_de_texto = cadena_de_texto.replace('que tal', 'como');

escribe(cadena_de_texto,'main'); */