function data(let){
    cale.display.value += let;
}

function ac(){
    cale.display.value = "";
}

function c(){
    cale.display.value = cale.display.value.slice(0, -1);
}

function equal(){
    cale.display.value = eval(cale.display.value);
}