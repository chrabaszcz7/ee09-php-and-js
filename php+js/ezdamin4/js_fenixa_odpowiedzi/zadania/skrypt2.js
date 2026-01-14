// id musi byc na zewnątrz bo inaczej nie będzie nam sie zwiekszać
let id = 1;

function addProduct() {
  // pobierz wartości z formularzy
  const productTitle = document.querySelector("#productTitle").value,
    productPrice = +document.querySelector("#productPrice").value,
    productQuantity = +document.querySelector("#productQuantity").value;

  // sprawdź czy któraś z komórek jest pusta i wykonaj akcje
  if (productTitle == "" || productQuantity == "" || productPrice == "") {
    return;
  }

  // odwołaj się do tabeli za pomocą queryselector
  const products = document.querySelector("#products");

  // wygeneruj nowe elementy przez document.createElement("tr") analogicznie dla td
  // wypełnij zawartością komórki
  // pamiętaj o formacie ceny!
  // dodaj td do tr appendchildem

  // używam tablicy z values by łatwiej mi je generować oraz nadać poprawny format dla ceny
  let values = [id, productTitle, `${productPrice} zł`, productQuantity];

  // najpierw definijemy tr do którego przypisywac będziemy komórki
  let tr = document.createElement("tr");
  for (let i = 0; i < values.length; i++) {
    // tworzymy i wypełniamy, na koniec przypisujemy do tr
    let td = document.createElement("td");
    td.innerText = values[i];
    tr.appendChild(td);
  }

  // ALTERNATYWNIE
  /*
    let tr = document.createElement("tr");
    let td = document.createElement("td");
    td.innerText = id;
    tr.appendChild(td);
    td = document.createElement("td");
    td.innerText = productTitle;
    tr.appendChild(td);
    td = document.createElement("td");
    td.innerText = productPrice + " zł";
    tr.appendChild(td);
    td = document.createElement("td");
    td.innerText = productQuantity;
    tr.appendChild(td);
  */

  //dodaj rekord do tabeli przez zmienna.appendChild(nazwa zmiennej)
  products.appendChild(tr);

  //zwiększ id
  id++;
}
