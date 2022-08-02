


const palabras_prohibidas =
    ['mierda',
        'futbol',
        'casino'];

function escribe(cadena, id) {
    document.getElementById(id).innerHTML = cadena;
   /* element.innerHTML = cadena;*/
    /*element.style.fontSize = '50px';*/
}
let cadena_de_texto = prompt('Escribe tu mensaje');//Es una cadena

let cadena_a_minuscula = cadena_de_texto.toLowerCase(); //Es una cadena

for (i = 0; i < palabras_prohibidas.lenght; i++) {
    let prohibir = palabras_prohibidas[i].toLowerCase();
    if (cadena_a_minuscula.replace(prohibir, '..') != cadena_a_minuscula) {
        cadena_de_texto = cadena_de_texto.replaceAll(prohibir, 'chocolate')
    }else{ escribe(cadena_de_texto, 'main');}
}
