// Vamos a realizar una entrada de datos
// y darle salida por la pantalla con un alert();


// declaramos variable
let edad;

// Le damos un valor a variable.
// En este caso le damos un valor que viene de un return
edad = prompt('Introduce tu edad');
// Creamos un condicional para saber si nos han escrito un número

if(Number(edad) == edad){
    // Escribimos el resultado
    document.getElementById('main').innerHTML= `
    <h2>Enhorabuena!! Tu edad es </h2>
    <h1>${edad}</h1>
`;

}else{
    // o es un número, avisamos,
    alert('Tiene que ser un número');
    // Recargamos para que vuelva a salir el prompt
    window.location.reload();
}
