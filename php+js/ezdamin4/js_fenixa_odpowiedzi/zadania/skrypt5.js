function genInputs() {
  // pobierz wartość
  const inputsQ = +document.querySelector("#inputsQ").value;

  // wygeneruj input i dodaj w odpowiednei miejsce
  const inputs = document.querySelector("#inputs");

  // czyszcze diva by generować od nowa
  inputs.innerHTML = "";
  let counter = inputsQ;
  while (counter > 0) {
    let input = document.createElement("input");

    // nadaję typ number
    input.setAttribute("type", "number");
    input.setAttribute("class", "myInput");
    inputs.appendChild(input);
    counter--;
  }
}
function sumInputs() {
  // pobierz wartości ze wszystkich inputów
  const inputs = document.querySelectorAll(".myInput");

  // wyświetl sumę w pop-up
  let suma = 0;

  // iteruje po wszystkich inputach
  inputs.forEach((element) => {
    suma += +element.value;
  });

  alert(`Suma: ${suma}`);
}
