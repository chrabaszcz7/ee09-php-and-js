// pobierz elementy
const elems = document.querySelectorAll(".square"); // to nic innego jak tablica elementów z html, które są super, bo pozwalają nam robić magię niżej

// nadaj każdemu elementowi listener na kliknięcie
// tak, używając foreach dodajemy eventlistener
elems.forEach((element) => {
  element.addEventListener("click", () =>
    // co tu sie stało? bierzemy element który teraz iterujemy, children to elementy wewnątrz tego elementu w html (span) - zobacz sobie console logiem,
    // [0] - czyli pierwszy element, pozostało wziąć jego inner html lub textContent
    clickMe(element.children[0].innerHTML)
  );
});

// po kliknięciu wykonaj funkcję alertową z zawartością z danego elementu
function clickMe(tekst) {
  alert(tekst);
}
// UWAGA: pamiętaj, że wartości są w span a nie po prostu wpisane
