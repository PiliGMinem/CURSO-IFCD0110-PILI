import {escribe} from "./string.js";

const palabra_prohibida = 'mierda';

let cadena_de_texto;

cadena_de_texto = prompt('Escribe tu mensaje');


/* if (cadena_de_texto.includes(palabra_prohibida)== true){
    cadena_de_texto = cadena_de_texto.replace(palabra_prohibida, '...');
    escribe(cadena_de_texto,'main');
}else{
    cadena_de_texto= cadena_de_texto.concat(' y no he dicho un taco');
    escribe(cadena_de_texto, 'main');
} */

/* let palabra_descompuesta = cadena_de_texto.split(' ');
console.log(texto_descompuesto);
escribe (cadena_de_texto, 'main'); */

/* let palabra_descompuesta = cadena_de_texto.split(' ');
console.log(palabra_descompuesta[0]);
escribe (cadena_de_texto, 'main'); */

let palabra_descompuesta = cadena_de_texto.split(' ');


for (let step=0 ; step < palabra_descompuesta.lenght ; step++){
    
    palabra_descompuesta[step]; 
}

alert(palabra_descompuesta[step]);

