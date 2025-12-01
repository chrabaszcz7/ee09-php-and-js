-- – Zapytanie 1: wybierające jedynie pola nazwaPliku i podpis z tabeli zdjecia sortując je rosnąco według
-- kolumny podpis
SELECT nazwaPliku,podpis FROM zdjecia
ORDER BY podpis ASC;
-- – Zapytanie 2: wybierające jedynie pola cel i dataWyjazdu z tabeli wycieczki dla wycieczek, które nie są
-- dostępne
SELECT cel,dataWyjazdu FROM wycieczki
WHERE dostepna=0;
-- – Zapytanie 3: wybierające jedynie pola cel i cena z tabeli wycieczki oraz odpowiadające im pole podpis z
-- tabeli zdjecia, dla wycieczek, których cena jest wyższa niż 1300 zł. Zapytanie wykorzystuje relację
SELECT cel,cena,podpis FROM wycieczki
    INNER JOIN zdjecia ON zdjecia.id = wycieczki.zdjecia_id
WHERE cena>1300;
-- – Zapytanie 4: usuwające tabelę uzytkownik 
DROP TABLE uzytkownik;