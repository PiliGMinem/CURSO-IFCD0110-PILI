// Vamos a realizar una entrada de datos
// y darle salida por la pantalla con un alert();


// declaramos variable
let nota;

// Le damos un valor a variable.
// En este caso le damos un valor que viene de un return
nota = prompt('Introduce tu nota del 1 al 10');
// Creamos un condicional para saber si nos han escrito un número

if(Number(nota) == nota){
    if(nota<1 || nota>10){
        alert('Tiene que ser la nota entre 1 y 10 para entrar a este sitio');
        window.location.href="https://elpais.com";
    


}else if(nota<3){
    alert('muy deficiente');
}else if(nota>2 && nota <5){
    alert('insuficiente');
}else if(nota>4 && nota <6){
    alert('suficiente');
}else if(nota>5 && nota <7){
    alert('bien');
}else if(nota>6 && nota <9){
    alert('notable');
}else if(nota>8 && nota <10){
    alert('sobresaliente');
}else{
    // o es un número, avisamos,
    alert('Tiene que ser un número');
    // Recargamos para que vuelva a salir el prompt
    window.location.reload();
}}
