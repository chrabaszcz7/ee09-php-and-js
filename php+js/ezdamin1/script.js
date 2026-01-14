
let btn = document.getElementById('btn');




async function losowanie_kostki(){

    btn.disabled = true;

let zdjecia = ['1.png','2.png','3.png','4.png','5.png','6.png'];
let zdjecie = document.getElementById('zdjecie');
let liczby = [5,6,7,8,9,10];
let losowe_liczby = liczby[Math.floor(Math.random()*liczby.length)]


for(let i=0; i<losowe_liczby;i++){
    let losowa_kostka = zdjecia[Math.floor(Math.random()*zdjecia.length)];
    await new Promise(resolve => setTimeout(resolve,250));
    zdjecie.src = losowa_kostka;
    zdjecie.alt = losowa_kostka.replace('.png','');
}
await new Promise(resolve => setTimeout(resolve,250));
btn.disabled = false;


}

btn.addEventListener('click',()=>{
    losowanie_kostki();
})