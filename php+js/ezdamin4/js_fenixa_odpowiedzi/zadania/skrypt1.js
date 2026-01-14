function createTable() {
  // tutaj pobierz wartości z formularza oraz wartość radio
  const tableLength = +document.querySelector("#tableLength").value;
  const radioInputs = document.querySelectorAll('input[type="radio"]');
  let operation = "";

  //sprawdzam czy dane radio jest zaznaczone, jeśli tak to przypisuję wartość i opuszczam pętle
  for (let i = 0; i < radioInputs.length; i++) {
    if (radioInputs[i].checked) {
      operation = radioInputs[i].value;
      break;
    }
  }

  // alternatywa = odwołaj się do każdego z radio po id i ifami sprawdzaj czy są .checked

  /*
    const add = document.getElementById("add");
    const sub = document.getElementById("sub");
    const mul = document.getElementById("mul");
    const div = document.getElementById("div");

    let operation2 = "";

    if (add.checked) {
      operation2 = add.value;
    }
  */

  // sprawdź warunek i odpowiednio go zastosuj
  let numTable = [];
  if (tableLength <= 2) {
    alert("[ " + numTable + " ]");
    console.log(0);
    return;
  }

  // teraz stwórz tablicę z elementów pobranych wyżej np forem
  for (let i = 1; i <= tableLength; i++) {
    numTable.push(+i);
  }

  // wypisz tablicę w okienku pop up
  alert("[ " + numTable + " ]");

  // teraz np forem i zmienną dokonaj obliczeń używając tablicy i wybranego znaku np 1 + 2 + 3 + 4 + 5

  // zaczynam od przypisania pierwszej wartości z tablicy
  let result = numTable[0];

  // switchuję po operacji czy to dodawanei, mnożenie itp
  switch (operation) {
    case "+":
      // iteruję po wartościach z tablicy
      for (let i = 1; i < tableLength; i++) {
        // dopisuje do zmiennej wartośc operacji
        result += numTable[i];
      }
      break;
    case "-":
      for (let i = 1; i < tableLength; i++) {
        result -= numTable[i];
      }
      break;
    case "*":
      for (let i = 1; i < tableLength; i++) {
        result *= numTable[i];
      }
      break;
    case "/":
      for (let i = 1; i < tableLength; i++) {
        result /= numTable[i];
      }
      break;
  }

  // wypisz wynik w konsoli
  console.log(result);
}
