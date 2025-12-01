-- skiem zadań
-- − Zapytanie 1: wybierające losowo dokładnie pięć rekordów z tabeli nagrody zawierających
-- jedynie pola nazwa, opis i cena
SELECT nazwa,opis,cena FROM nagrody
    ORDER BY RAND() LIMIT 5;
-- − Zapytanie 2: wybierające wszystkie pola z tabeli nagrody, dla których cena mieści się w
-- przedziale <100, 1000>, oraz których ilość jest równa 2 sztuki
SELECT * FROM nagrody
WHERE cena >=100 OR cena <=1000 OR ilosc_sztuk=2;

-- − Zapytanie 3: usuwające te rekordy, w których cena nie została wpisana lub wynosi 0 zł
DELETE FROM nagrody
WHERE cena IS NULL OR cena=0;
-- − Zapytanie 4: wybierające jedynie nazwę, cenę i datę dodania nagród, które zostały dodane w
-- sierpniu 2021 roku. Wyniki powinny być posortowane rosnąco według daty 
SELECT nazwa,cena,data_dodania FROM nagrody
WHERE data_dodania LIKE '2021-08%'
ORDER BY data_dodania ASC;