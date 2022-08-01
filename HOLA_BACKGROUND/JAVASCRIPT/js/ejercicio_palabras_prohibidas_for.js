
const palabra_prohibida = ['mierda' , 'tonto' , 'jolín', 'asqueroso'];

function escribe(cadena , id){
    let elemento = document.getElementById(id);
    elemento. innerHTML = cadena;
    elemento.style.fontSize = '50px';
}

let cadena_de_texto = prompt('Escribe tu mensaje');
let cadena_a_minuscula = cadena_de_texto.toLowerCase();
let palabra_descompuesta = cadena_a_minuscula.split(' ');

for(let step=0 ; step < palabra_descompuesta.lenght ; step++){
    for(let j=0 ; j < palabra_prohibida.lenght ; j++){
        if (palabra_descompuesta[step]== palabra_prohibida[j]){
            escribe("He dicho un taco", main);
        }else{
            escribe("No he dicho ningún taco", main);
    }
}}

