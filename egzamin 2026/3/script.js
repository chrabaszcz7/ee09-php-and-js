

let prostokatbtn = document.getElementById('prostokatbtn');
let trojkatbtn = document.getElementById('trojkatbtn');

let glowne_liczenie = document.getElementById('glowne_liczenie');

let druganazwa = document.getElementById('druganazwa');
let wynik = document.getElementById('wynik');

let oblicz = document.getElementById('oblicz');



function trojkat(){
    druganazwa.innerHTML="H:";
    glowne_liczenie.innerHTML="trojkat";
}

function prostokat(){
    druganazwa.innerHTML="B:";
    glowne_liczenie.innerHTML="Prostokat";
}

function liczenie(){
    let liczba2 = parseFloat(document.getElementById('liczba2').value)
    let liczba1 = parseFloat(document.getElementById('liczba1').value)
    if(druganazwa.innerHTML=="H:"){
        wynik.innerHTML = `wynik tego trojkata to: ${(liczba1*liczba2)/2}`;
    }else if(druganazwa.innerHTML=="B:"){
        wynik.innerHTML = `wynik tego prostokata to: ${liczba1*liczba2}`;
    }
}

trojkatbtn.addEventListener('click',()=>{
    trojkat();
})
prostokatbtn.addEventListener('click',()=>{
    prostokat();
})
oblicz.addEventListener('click',()=>{
    liczenie();
})