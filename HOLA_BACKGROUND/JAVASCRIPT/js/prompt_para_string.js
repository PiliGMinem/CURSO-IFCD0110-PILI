import {escribe} from "./string.js";

const palabra_prohibida = 'mierda';

let cadena_de_texto;

cadena_de_texto = prompt('Escribe tu mensaje');


if (cadena_de_texto.includes(palabra_prohibida)== true){
    cadena_de_texto = cadena_de_texto.replace(palabra_prohibida, '...');
    escribe(cadena_de_texto,'main');
}else{
    cadena_de_texto= cadena_de_texto.concat(' y no he dicho un taco');
    escribe(cadena_de_texto, 'main');
}
