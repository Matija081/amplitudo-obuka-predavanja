let isWide = false;
let isGreen = false;

function changeText(){
    let elem = document.getElementById('textToChange');
    elem.innerHTML = "Tekst je promijenjen";
}

function increase(){
    let elem = $('counterValue');
    let value = parseInt(elem.innerHTML);
    if (value >= 10) {
        alert('Maksimalna vrijednost je 10');
        return;
    }
    elem.innerHTML = value + 1;
}

function decrease(){
    let elem = $('counterValue');
    let value = parseInt(elem.innerHTML);
    if(value < 1){
        alert('Minimalna vrijednost je 0');
        return;
    }
    elem.innerHTML = value - 1;
}

function changeClass(elem){
    isWide = !isWide;
    if(isWide){
        elem.parentElement.classList.add('wide')
    } else {
        elem.parentElement.classList.remove('wide')
    }
    
}


function addText(){
    let newText = $('input').value;
    $('target').innerHTML += '<br>' + newText;
}


function changeColor(elem){
    isGreen = !isGreen
    if(isGreen) {
        elem.style.backgroundColor = 'green';
        return;
    }

    elem.style.backgroundColor = 'blue';
}


function delayedAlert(elem) {
    elem.innerHTML = ".....";
    setTimeout(function(){
        alert('Testiram alert sa setTimeout funkcijom');
        x.backgroundColor = 'green';
    }, 2000)
}

function repeatEachSecond(elem, targetId){
    let interval = setInterval(function(){
        console.log('interval');
        if (parseInt($('repeat').innerHTML) > 0){
            $('repeat').innerHTML = parseInt($('repeat').innerHTML) - 1;
        }
    }, 1000)
}




function $(id){
    return document.getElementById(id);
}