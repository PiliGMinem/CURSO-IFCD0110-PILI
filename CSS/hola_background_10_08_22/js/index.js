async function inserta() {
    let header = await fetch(header.html);
    let elhtml = await header.text();
    document.getElementById('header').innerHTML = elhtml;
  }


window.onload=function(){
    inserta()
    // Scripts
}