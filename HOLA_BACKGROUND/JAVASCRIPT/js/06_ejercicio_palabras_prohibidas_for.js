import {escribe} from "./string.js";

const palabra_prohibida = ['mierda' , 'tonto' , 'jolín', 'asqueroso'];


let cadena_de_texto = prompt('Escribe tu mensaje');

let cadena_a_minuscula = cadena_de_texto.toLowerCase();//Es una cadena de texto
let palabra_descompuesta = cadena_a_minuscula.split(' ');//Es un array

function longitud(cadena,id){
    palabra_descompuesta = cadena.split(' ');
    document.getElementsByName(id).innerHTML= palabra_descompuesta;
    alert(palabra_descompuesta.length);
}

alert(longitud(palabra_descompuesta,'main'));


/*for(let step=0 ; step < palabra_descompuesta.lenght ; step++){
    /*for(let j=0 ; j < palabra_prohibida.lenght ; j++){
        if (palabra_descompuesta[step]== palabra_prohibida[j]){
            escribe("He dicho un taco", 'main');
        }else{
            escribe("No he dicho ningún taco", 'main');
    }
    alert(hola);

}*/


