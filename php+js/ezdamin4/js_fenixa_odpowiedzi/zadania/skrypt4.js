function generateSelectOption() {
  // pobierz wartość
  const newOption = document.querySelector("#newOption").value;
  // sprawdź poprawność inputa
  if (newOption == "") {
    return;
  }
  // dodaj element
  let option = document.createElement("option");
  option.innerText = newOption;

  // dodaję teraz do selecta
  const mySelect = document.querySelector("#mySelect");
  mySelect.appendChild(option);
}

function alertOption() {
  //pobierz i wyświetl wartość selecta
  const mySelect = document.querySelector("#mySelect").value;
  alert(`Wybrana opcja: ${mySelect}`);
}
