async function inserta() {
    let header = await fetch('header.html');
    let elhtml = await header.text();
    document.getElementById('header').innerHTML = elhtml;

    let footer = await fetch('footer.html');
    let elemt = await footer.text();
    document.getElementById('footer').innerHTML = elemt;


  }


window.onload=function(){
    inserta()
    // Scripts
}


let countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

// Update the count down every 1 second
let x = setInterval(function() {

  // Get today's date and time
  let now = new Date().getTime();

  // Find the distance between now and the count down date
  let distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  let days = Math.floor(distance / (1000 * 60 * 60 * 24));
  let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("ele").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("ele").innerHTML = "EXPIRED";
  }
}, 1000);