-- Zapytanie 1: zliczające liczbę klientów mieszalni farb
SELECT COUNT(id) FROM klienci;
-- − Zapytanie 2: wybierające jedynie nazwiska, imiona klientów oraz odpowiadające im numery zamówień
-- (pole id), kody kolorów, pojemności i daty odbioru zamówień posortowane rosnąco po dacie odbioru.
-- Należy posłużyć się relacją

SELECT nazwisko,imie,zamowienia.id,kod_koloru,pojemnosc,data_odbioru FROM klienci
    INNER JOIN zamowienia ON zamowienia.id_klienta = klienci.Id
ORDER BY data_odbioru ASC;

-- − Zapytanie 3: wybierające jedynie nazwiska, imiona klientów oraz odpowiadające im numery zamówień
-- (pole id), kody kolorów, pojemności i daty odbioru zamówień posortowane rosnąco po dacie odbioru,
-- jedynie dla zamówień, w których data odbioru jest od 5 listopada do 7 listopada 2021 roku. Należy
-- posłużyć się relacją

SELECT nazwisko,imie,zamowienia.id,kod_koloru,pojemnosc,data_odbioru FROM klienci
    INNER JOIN zamowienia ON zamowienia.id_klienta = klienci.Id
WHERE data_odbioru BETWEEN '2021-11-5' AND '2021-11-7'
ORDER BY data_odbioru ASC;

-- − Zapytanie 4: wybierające jedynie imiona i nazwiska kobiet, które są klientami mieszalni farb
SELECT imie,nazwisko FROM klienci
WHERE plec="k";