let first2 = document.querySelector('.first2');
let second2 = document.querySelector('.second2');
let third2 = document.querySelector('.third2');

let first = document.querySelector('.first');
let second = document.querySelector('.second');
let third = document.querySelector('.third');


function otworz_baze(){
    first2.style.display="block";
    second2.style.display="none";
    third2.style.display="none";

    first.style.backgroundColor = "MistyRose"
    second.style.backgroundColor = "#FFAEA5"
    third.style.backgroundColor = "#FFAEA5"
}

function otworz_opisy(){
    first2.style.display="none";
    second2.style.display="block";
    third2.style.display="none";

    first.style.backgroundColor = "#FFAEA5"
    second.style.backgroundColor = "MistyRose"
    third.style.backgroundColor = "#FFAEA5"
}

function otworz_galeria(){
    first2.style.display="none";
    second2.style.display="none";
    third2.style.display="block";

    first.style.backgroundColor = "#FFAEA5"
    second.style.backgroundColor = "#FFAEA5"
    third.style.backgroundColor = "MistyRose"
}

first.addEventListener('click',()=>{
    otworz_baze();
})
second.addEventListener('click',()=>{
    otworz_opisy();
})
third.addEventListener('click',()=>{
    otworz_galeria();
})