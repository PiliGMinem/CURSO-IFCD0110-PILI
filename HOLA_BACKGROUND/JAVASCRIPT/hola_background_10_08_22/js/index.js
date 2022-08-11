async function inserta() {
    let header = await fetch(header.html);
    let elhtml = await header.text();
    document.getElementById('header').innerHTML = elhtml;

    let footer = await fetch(footer.html);
    let elemt = await footer.text();
    document.getElementById('footer').innerHTML = elemt;
  }


window.onload=function(){
    inserta()
    // Scripts
}