
 function clock(){
    let date = new Date();
    document.getElementById("hour").innerHTML = date.getHours();
    document.getElementById("minute").innerHTML = date.getMinutes();
    document.getElementById("second").innerHTML = date.getSeconds();
}
setInterval(clock, 1000)
