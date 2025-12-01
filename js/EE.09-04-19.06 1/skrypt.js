let plus = document.getElementById('plus');
let minus = document.getElementById('minus');
let mnozenie = document.getElementById('mnozenie');
let dzielenie = document.getElementById('dzielenie');
let potega = document.getElementById('potega');




function dodaj(){
let a = parseFloat(document.getElementById('a').value)
let b = parseFloat(document.getElementById('b').value)
let wynik = document.getElementById('wynik');

let suma=(a+b);
wynik.textContent = `${suma}`;
}

function odejmnij(){
let a = parseFloat(document.getElementById('a').value)
let b = parseFloat(document.getElementById('b').value)
let wynik = document.getElementById('wynik');

let suma=(a-b);
wynik.textContent = `${suma}`;
}

function pomnoz(){
let a = parseFloat(document.getElementById('a').value)
let b = parseFloat(document.getElementById('b').value)
let wynik = document.getElementById('wynik');

let suma=(a*b);
wynik.textContent = `${suma}`;
}

function podziel(){
let a = parseFloat(document.getElementById('a').value)
let b = parseFloat(document.getElementById('b').value)
let wynik = document.getElementById('wynik');

let suma=(a/b);
wynik.textContent = `${suma}`;
}

function poteguj(){
let a = parseFloat(document.getElementById('a').value)
let b = parseFloat(document.getElementById('b').value)
let wynik = document.getElementById('wynik');

let suma=(a**b);
wynik.textContent = `${suma}`;
}


plus.addEventListener('click',()=>{
    dodaj();
})

minus.addEventListener('click',()=>{
    odejmnij();
})

mnozenie.addEventListener('click',()=>{
    pomnoz();
})
dzielenie.addEventListener('click',()=>{
    podziel();
})
potega.addEventListener('click',()=>{
    poteguj();
})